<?php
/* @var $this BioDataController */
/* @var $data BioData */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idbio_data')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idbio_data), array('view', 'id'=>$data->idbio_data)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('photo_face')); ?>:</b>
	<?php echo CHtml::encode($data->photo_face); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('photo_face_kepi')); ?>:</b>
	<?php echo CHtml::encode($data->photo_face_kepi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('photo_profil_droit')); ?>:</b>
	<?php echo CHtml::encode($data->photo_profil_droit); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('photo_profil_gauche')); ?>:</b>
	<?php echo CHtml::encode($data->photo_profil_gauche); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('index_droit')); ?>:</b>
	<?php echo CHtml::encode($data->index_droit); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('index_gauche')); ?>:</b>
	<?php echo CHtml::encode($data->index_gauche); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('taille_cm')); ?>:</b>
	<?php echo CHtml::encode($data->taille_cm); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('poids_lbs')); ?>:</b>
	<?php echo CHtml::encode($data->poids_lbs); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('groupe_sanguin')); ?>:</b>
	<?php echo CHtml::encode($data->groupe_sanguin); ?>
	<br />

	*/ ?>

</div>