<?php
/* @var $this ArmeController */
/* @var $data Arme */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idarme')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idarme), array('view', 'id'=>$data->idarme)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('num_serie')); ?>:</b>
	<?php echo CHtml::encode($data->num_serie); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('type')); ?>:</b>
	<?php echo CHtml::encode($data->type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('marque')); ?>:</b>
	<?php echo CHtml::encode($data->marque); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('modele')); ?>:</b>
	<?php echo CHtml::encode($data->modele); ?>
	<br />


</div>