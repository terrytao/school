<?
/* @var $this yii\web\View */
use frontend\models\School;
use yii\helpers\Html;

$this->registerJsFile($this->theme->getUrl('assets/js/fuelux/treeview/tree-custom.min.js'));
$this->registerJsFile($this->theme->getUrl('assets/js/fuelux/treeview/treeview-init.js'));
?>
<div class="col-lg-6 col-sm-6 col-xs-12">
    <div class="well with-header">
        <div class="header bordered-purple">About Us</div>
        <h6>Basic</h6>


        <div class="row">


            <div class="col-lg-6 col-sm-6 col-xs-6">
                <div class="widget flat radius-bordered">

                    <div class="widget-body">

                        <?
                        echo Html::textInput('search', '', ['id'=>'search']); ?>
                        <?= Html::a('Find', '#search', ['id' => 'searchBtn']); ?>

                        <div id="treeViewContainer">
                            <?= $this->render('_tree_view',['schools'=>[]]); ?>
                        </div>
                    </div>
                </div>
            </div>


        </div>


    </div>
</div>
<script>
    $(function () {
        $('body').on('click', '#searchBtn', function () {

            var search = $('#search').val();

            var postData = {
                search: search
            }

            $.post('<?=Yii::$app->urlManager->createUrl('/site/update-tree-view');?>', postData, function (data) {
                $('#treeViewContainer').html(data.view);
            }, 'json')
        })
    })
</script>