<?php
/* @var $this ArmeController */
/* @var $model Arme */

$this->breadcrumbs=array(
	'Armes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Arme', 'url'=>array('index')),
	array('label'=>'Manage Arme', 'url'=>array('admin')),
);
?>

<h1>Create Arme</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>