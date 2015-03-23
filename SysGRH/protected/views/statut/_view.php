<?php
/* @var $this StatutController */
/* @var $data Statut */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idstatut')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idstatut), array('view', 'id'=>$data->idstatut)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('statut')); ?>:</b>
	<?php echo CHtml::encode($data->statut); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('memo')); ?>:</b>
	<?php echo CHtml::encode($data->memo); ?>
	<br />


</div>