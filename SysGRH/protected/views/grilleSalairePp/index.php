<?php
/* @var $this GrilleSalairePpController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Grille Salaire Pps',
);

$this->menu=array(
	array('label'=>'Create GrilleSalairePp', 'url'=>array('create')),
	array('label'=>'Manage GrilleSalairePp', 'url'=>array('admin')),
);
?>

<h1>Grille Salaire Pps</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
