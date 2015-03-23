<?php
/* @var $this AffectationController */
/* @var $model Affectation */

$this->breadcrumbs=array(
	'Affectations'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Affectation', 'url'=>array('index')),
	array('label'=>'Manage Affectation', 'url'=>array('admin')),
);
?>

<h1>Create Affectation</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>