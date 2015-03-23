<?php
/* @var $this BioDataController */
/* @var $model BioData */

$this->breadcrumbs=array(
	'Bio Datas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List BioData', 'url'=>array('index')),
	array('label'=>'Manage BioData', 'url'=>array('admin')),
);
?>

<h1>Create BioData</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>