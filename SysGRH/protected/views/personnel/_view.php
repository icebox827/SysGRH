<?php
/* @var $this PersonnelController */
/* @var $data Personnel */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idpersonnel')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idpersonnel), array('view', 'id'=>$data->idpersonnel)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nom')); ?>:</b>
	<?php echo CHtml::encode($data->nom); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('prenom')); ?>:</b>
	<?php echo CHtml::encode($data->prenom); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_naissance')); ?>:</b>
	<?php echo CHtml::encode($data->date_naissance); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lieu_naissance')); ?>:</b>
	<?php echo CHtml::encode($data->lieu_naissance); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sexe')); ?>:</b>
	<?php echo CHtml::encode($data->sexe); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('etat_civil')); ?>:</b>
	<?php echo CHtml::encode($data->etat_civil); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('cin')); ?>:</b>
	<?php echo CHtml::encode($data->cin); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nif')); ?>:</b>
	<?php echo CHtml::encode($data->nif); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('num_passeport')); ?>:</b>
	<?php echo CHtml::encode($data->num_passeport); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('matricule')); ?>:</b>
	<?php echo CHtml::encode($data->matricule); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('adresse')); ?>:</b>
	<?php echo CHtml::encode($data->adresse); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('adresse_anterieur')); ?>:</b>
	<?php echo CHtml::encode($data->adresse_anterieur); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('adresse_ref')); ?>:</b>
	<?php echo CHtml::encode($data->adresse_ref); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telephone_primaire')); ?>:</b>
	<?php echo CHtml::encode($data->telephone_primaire); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telephone_secondaire')); ?>:</b>
	<?php echo CHtml::encode($data->telephone_secondaire); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email_personnel')); ?>:</b>
	<?php echo CHtml::encode($data->email_personnel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email_professionnel')); ?>:</b>
	<?php echo CHtml::encode($data->email_professionnel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('autre_email')); ?>:</b>
	<?php echo CHtml::encode($data->autre_email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('origine')); ?>:</b>
	<?php echo CHtml::encode($data->origine); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('entree_en_fonction')); ?>:</b>
	<?php echo CHtml::encode($data->entree_en_fonction); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_budgetaire')); ?>:</b>
	<?php echo CHtml::encode($data->id_budgetaire); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('categorie')); ?>:</b>
	<?php echo CHtml::encode($data->categorie); ?>
	<br />

	*/ ?>

</div>