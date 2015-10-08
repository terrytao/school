<?
use newerton\jcrop\jCrop;
use yii\helpers\Html;


$tmpProfileImage = Yii::$app->session->get('tmpProfileImage');

$src = 'tmp/' . $result['uuid'] . '/' . $result['uploadName'];
?>

<h4>Crop Image</h4>

<div class="jc-demo-box">
    <!-- This is the image we're attaching Jcrop to -->
    <img src="<?= Yii::$app->urlManager->createUrl($src); ?>" id="target"
         alt="[Jcrop Example]"/>

    <!-- This is the form that our event handler fills -->
    <form id="coords"
          class="coords"
          onsubmit="return false;"
          action="http://example.com/post.php">

        <div class="inline-labels">
            <?= Html::hiddenInput('x1', '', ['id' => 'x1']); ?>
            <?= Html::hiddenInput('y1', '', ['id' => 'y1']); ?>
            <?= Html::hiddenInput('x2', '', ['id' => 'x2']); ?>
            <?= Html::hiddenInput('y2', '', ['id' => 'y2']); ?>
            <?= Html::hiddenInput('w', '', ['id' => 'w']); ?>
            <?= Html::hiddenInput('h', '', ['id' => 'h']); ?>


        </div>
    </form>

    <?= Html::a('Crop and Save Image', '#', ['class' => 'btn btn-success', 'id' => 'saveImageBtn']); ?>
</div>
<script type="text/javascript">

    jQuery(function ($) {

        var jcrop_api;

        $('#target').Jcrop({
            aspectRatio: 1,
            onChange: showCoords,
            onSelect: showCoords,
            onRelease: clearCoords
        }, function () {
            jcrop_api = this;
        });

        $('#coords').on('change', 'input', function (e) {
            var x1 = $('#x1').val(),
                x2 = $('#x2').val(),
                y1 = $('#y1').val(),
                y2 = $('#y2').val();
            jcrop_api.setSelect([x1, y1, x2, y2]);
        });

    });

    // Simple event handler, called from onChange and onSelect
    // event handlers, as per the Jcrop invocation above
    function showCoords(c) {
        $('#x1').val(c.x);
        $('#y1').val(c.y);
        $('#x2').val(c.x2);
        $('#y2').val(c.y2);
        $('#w').val(c.w);
        $('#h').val(c.h);
    }
    ;

    function clearCoords() {
        $('#coords input').val('');
    }
    ;


    $('body').on('click', '#saveImageBtn', function () {
        var x1 = $('#x1').val();
        var y1 = $('#y1').val();
        var x2 = $('#x2').val();
        var y2 = $('#y2').val();
        var w = $('#w').val();
        var h = $('#h').val();
        var postData = {
            x1: x1,
            y1: y1,
            x2: x2,
            y2: y2,
            w: w,
            h: h
        }
        $.post('<?=Yii::$app->urlManager->createUrl('/profile/crop');?>', postData, function (data) {
            window.location.href = "<?=Yii::$app->urlManager->createUrl('/profile');?>";
        }, 'json');
    })
</script>