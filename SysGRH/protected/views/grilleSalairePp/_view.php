<?php
/* @var $this GrilleSalairePpController */
/* @var $data GrilleSalairePp */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idgrille_salaire_pp')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idgrille_salaire_pp), array('view', 'id'=>$data->idgrille_salaire_pp)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('grade')); ?>:</b>
	<?php echo CHtml::encode($data->grade); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('salaire')); ?>:</b>
	<?php echo CHtml::encode($data->salaire); ?>
	<br />


</div>