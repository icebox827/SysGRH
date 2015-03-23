<?php
/* @var $this GrilleSalairePpController */
/* @var $model GrilleSalairePp */

$this->breadcrumbs=array(
	'Grille Salaire Pps'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List GrilleSalairePp', 'url'=>array('index')),
	array('label'=>'Manage GrilleSalairePp', 'url'=>array('admin')),
);
?>

<h1>Create GrilleSalairePp</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>