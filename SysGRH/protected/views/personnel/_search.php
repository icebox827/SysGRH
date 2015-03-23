<?php
/* @var $this PersonnelController */
/* @var $model Personnel */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idpersonnel'); ?>
		<?php echo $form->textField($model,'idpersonnel',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nom'); ?>
		<?php echo $form->textField($model,'nom',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'prenom'); ?>
		<?php echo $form->textField($model,'prenom',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'date_naissance'); ?>
		<?php echo $form->textField($model,'date_naissance'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'lieu_naissance'); ?>
		<?php echo $form->textField($model,'lieu_naissance'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sexe'); ?>
		<?php echo $form->textField($model,'sexe',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'etat_civil'); ?>
		<?php echo $form->textField($model,'etat_civil',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cin'); ?>
		<?php echo $form->textField($model,'cin',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nif'); ?>
		<?php echo $form->textField($model,'nif',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'num_passeport'); ?>
		<?php echo $form->textField($model,'num_passeport',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'matricule'); ?>
		<?php echo $form->textField($model,'matricule',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'adresse'); ?>
		<?php echo $form->textField($model,'adresse',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'adresse_anterieur'); ?>
		<?php echo $form->textField($model,'adresse_anterieur',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'adresse_ref'); ?>
		<?php echo $form->textField($model,'adresse_ref',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'telephone_primaire'); ?>
		<?php echo $form->textField($model,'telephone_primaire'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'telephone_secondaire'); ?>
		<?php echo $form->textField($model,'telephone_secondaire'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'email_personnel'); ?>
		<?php echo $form->textField($model,'email_personnel',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'email_professionnel'); ?>
		<?php echo $form->textField($model,'email_professionnel',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'autre_email'); ?>
		<?php echo $form->textField($model,'autre_email',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'origine'); ?>
		<?php echo $form->textField($model,'origine',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'entree_en_fonction'); ?>
		<?php echo $form->textField($model,'entree_en_fonction'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_budgetaire'); ?>
		<?php echo $form->textField($model,'id_budgetaire',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'categorie'); ?>
		<?php echo $form->textField($model,'categorie',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->