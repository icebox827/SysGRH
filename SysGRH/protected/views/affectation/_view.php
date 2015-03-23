<?php
/* @var $this AffectationController */
/* @var $data Affectation */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idaffectation')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idaffectation), array('view', 'id'=>$data->idaffectation)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('affectation')); ?>:</b>
	<?php echo CHtml::encode($data->affectation); ?>
	<br />


</div>