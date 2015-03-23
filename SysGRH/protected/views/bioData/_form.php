<?php
/* @var $this BioDataController */
/* @var $model BioData */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'bio-data-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'photo_face'); ?>
		<?php echo $form->textField($model,'photo_face'); ?>
		<?php echo $form->error($model,'photo_face'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'photo_face_kepi'); ?>
		<?php echo $form->textField($model,'photo_face_kepi'); ?>
		<?php echo $form->error($model,'photo_face_kepi'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'photo_profil_droit'); ?>
		<?php echo $form->textField($model,'photo_profil_droit'); ?>
		<?php echo $form->error($model,'photo_profil_droit'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'photo_profil_gauche'); ?>
		<?php echo $form->textField($model,'photo_profil_gauche'); ?>
		<?php echo $form->error($model,'photo_profil_gauche'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'index_droit'); ?>
		<?php echo $form->textField($model,'index_droit'); ?>
		<?php echo $form->error($model,'index_droit'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'index_gauche'); ?>
		<?php echo $form->textField($model,'index_gauche'); ?>
		<?php echo $form->error($model,'index_gauche'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'taille_cm'); ?>
		<?php echo $form->textField($model,'taille_cm',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'taille_cm'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'poids_lbs'); ?>
		<?php echo $form->textField($model,'poids_lbs',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'poids_lbs'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'groupe_sanguin'); ?>
		<?php echo $form->textField($model,'groupe_sanguin',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'groupe_sanguin'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->