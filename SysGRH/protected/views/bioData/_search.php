<?php
/* @var $this BioDataController */
/* @var $model BioData */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idbio_data'); ?>
		<?php echo $form->textField($model,'idbio_data',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'photo_face'); ?>
		<?php echo $form->textField($model,'photo_face'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'photo_face_kepi'); ?>
		<?php echo $form->textField($model,'photo_face_kepi'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'photo_profil_droit'); ?>
		<?php echo $form->textField($model,'photo_profil_droit'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'photo_profil_gauche'); ?>
		<?php echo $form->textField($model,'photo_profil_gauche'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'index_droit'); ?>
		<?php echo $form->textField($model,'index_droit'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'index_gauche'); ?>
		<?php echo $form->textField($model,'index_gauche'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'taille_cm'); ?>
		<?php echo $form->textField($model,'taille_cm',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'poids_lbs'); ?>
		<?php echo $form->textField($model,'poids_lbs',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'groupe_sanguin'); ?>
		<?php echo $form->textField($model,'groupe_sanguin',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->