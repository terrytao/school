<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;


$form = ActiveForm::begin([
    'id'=>'field-test',
    'options'=>[
        'class'=>'form-horizontal',
        'enctype'=>'multipart/form-data',
    ],

]);

?>


<?= $form->field($model, 'password')->input('password') ?>

<?= $form->field($model, 'password')->passwordInput() ?>

<?= $form->field($model, 'password')->passwordInput()->hint('Password should be within A-Za-z0-9')->label('Password Hint') ?>

<?= $form->field($model, 'email')->input('email'); ?>

<?= $form->field($model, 'uploadFile')->fileInput() ?>

<?php echo $form->field($model, 'uploadFile[]')->fileInput(['multiple'=>'multiple']); ?>

<?= $form->field($model, 'population')->checkbox(); ?>

<?= $form->field($model, 'population')->checkbox(array('label'=>'pop')); ?>

<?= $form->field($model, 'population')->checkbox(array('label'=>'', 'disabled'=>false))
                               ->label('Gender'); ?>

<?= $form->field($model, 'population')->checkbox(array(

                                'label'=>'',

                                'labelOptions'=>array(['style'=>'padding:5px;', 'size'=>'200']),

                                'disabled'=>true

                                ))

                                ->label('Gender'); ?>

<?php echo $form->field($model, 'name[]')->checkboxList(['a' => 'Item A', 'b' => 'Item B', 'c' => 'Item C']); ?>
<?php echo $form->field($model, 'name[]')->checkboxList(['a'=>'211', 'b'=>'985', 'c'=>"中央部委"]); ?>

<?= $form->field($model, 'population')->radioList(array('1'=>'One',2=>'Two')); ?>

<!-- Listbox with prompt text -->
<?= $form->field($model, 'population')-> listBox(
    array('1'=>'1',2=>'2',3=>3,4=>4,5=>5),
    array('prompt'=>'Select')
); ?>
<!-- Listbox with size -->
<?= $form->field($model, 'population')-> listBox(
    array('1'=>'1',2=>'2',3=>3,4=>4,5=>5),
    array('prompt'=>'Select','size'=>3)
); ?>
<!-- Listbox with disabled, style properties -->
<?= $form->field($model, 'population')-> listBox(
    array('1'=>'1',2=>'2',3=>3,4=>4,5=>5),
    array('disabled' => true,'style'=>'background:blue;color:#fff;'))
    ->label('Gender'); ?>


//Format 1
<?php echo $form->field($model, 'name')->dropDownList(['a' => 'Item A', 'b' => 'Item B', 'c' => 'Item C']); ?>
// Format 2
< echo $form->field($model, 'name')->dropDownList($listData, ['prompt'=>'Choose...']);>


<?php ActiveForm::end(); ?>


