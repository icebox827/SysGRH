<?php
/* @var $this GrilleSalairePaController */
/* @var $model GrilleSalairePa */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'grille-salaire-pa-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'fonction'); ?>
		<?php echo $form->textField($model,'fonction',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'fonction'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'salaire'); ?>
		<?php echo $form->textField($model,'salaire',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'salaire'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->