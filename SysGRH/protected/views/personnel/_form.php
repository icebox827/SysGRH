<?php
/* @var $this PersonnelController */
/* @var $model Personnel */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'personnel-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nom'); ?>
		<?php echo $form->textField($model,'nom',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'nom'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'prenom'); ?>
		<?php echo $form->textField($model,'prenom',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'prenom'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'date_naissance'); ?>
		<?php echo $form->textField($model,'date_naissance'); ?>
		<?php echo $form->error($model,'date_naissance'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lieu_naissance'); ?>
		<?php echo $form->textField($model,'lieu_naissance'); ?>
		<?php echo $form->error($model,'lieu_naissance'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sexe'); ?>
		<?php echo $form->textField($model,'sexe',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'sexe'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'etat_civil'); ?>
		<?php echo $form->textField($model,'etat_civil',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'etat_civil'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cin'); ?>
		<?php echo $form->textField($model,'cin',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'cin'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nif'); ?>
		<?php echo $form->textField($model,'nif',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'nif'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'num_passeport'); ?>
		<?php echo $form->textField($model,'num_passeport',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'num_passeport'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'matricule'); ?>
		<?php echo $form->textField($model,'matricule',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'matricule'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'adresse'); ?>
		<?php echo $form->textField($model,'adresse',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'adresse'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'adresse_anterieur'); ?>
		<?php echo $form->textField($model,'adresse_anterieur',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'adresse_anterieur'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'adresse_ref'); ?>
		<?php echo $form->textField($model,'adresse_ref',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'adresse_ref'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telephone_primaire'); ?>
		<?php echo $form->textField($model,'telephone_primaire'); ?>
		<?php echo $form->error($model,'telephone_primaire'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telephone_secondaire'); ?>
		<?php echo $form->textField($model,'telephone_secondaire'); ?>
		<?php echo $form->error($model,'telephone_secondaire'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email_personnel'); ?>
		<?php echo $form->textField($model,'email_personnel',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'email_personnel'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email_professionnel'); ?>
		<?php echo $form->textField($model,'email_professionnel',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'email_professionnel'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'autre_email'); ?>
		<?php echo $form->textField($model,'autre_email',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'autre_email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'origine'); ?>
		<?php echo $form->textField($model,'origine',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'origine'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'entree_en_fonction'); ?>
		<?php echo $form->textField($model,'entree_en_fonction'); ?>
		<?php echo $form->error($model,'entree_en_fonction'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_budgetaire'); ?>
		<?php echo $form->textField($model,'id_budgetaire',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'id_budgetaire'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'categorie'); ?>
		<?php echo $form->textField($model,'categorie',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'categorie'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->