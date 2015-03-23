<?php
/* @var $this GrilleSalairePaController */
/* @var $model GrilleSalairePa */

$this->breadcrumbs=array(
	'Grille Salaire Pas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List GrilleSalairePa', 'url'=>array('index')),
	array('label'=>'Manage GrilleSalairePa', 'url'=>array('admin')),
);
?>

<h1>Create GrilleSalairePa</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>