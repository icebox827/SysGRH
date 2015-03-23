<?php
/* @var $this StatutController */
/* @var $model Statut */

$this->breadcrumbs=array(
	'Statuts'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Statut', 'url'=>array('index')),
	array('label'=>'Manage Statut', 'url'=>array('admin')),
);
?>

<h1>Create Statut</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>