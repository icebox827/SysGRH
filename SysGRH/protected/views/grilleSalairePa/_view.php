<?php
/* @var $this GrilleSalairePaController */
/* @var $data GrilleSalairePa */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idgrille_salaire_pa')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idgrille_salaire_pa), array('view', 'id'=>$data->idgrille_salaire_pa)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fonction')); ?>:</b>
	<?php echo CHtml::encode($data->fonction); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('salaire')); ?>:</b>
	<?php echo CHtml::encode($data->salaire); ?>
	<br />


</div>