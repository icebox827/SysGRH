<?php
/* @var $this StatutController */
/* @var $model Statut */

$this->breadcrumbs=array(
	'Statuts'=>array('index'),
	$model->idstatut,
);

$this->menu=array(
	array('label'=>'List Statut', 'url'=>array('index')),
	array('label'=>'Create Statut', 'url'=>array('create')),
	array('label'=>'Update Statut', 'url'=>array('update', 'id'=>$model->idstatut)),
	array('label'=>'Delete Statut', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idstatut),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Statut', 'url'=>array('admin')),
);
?>

<h1>View Statut #<?php echo $model->idstatut; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idstatut',
		'statut',
		'memo',
	),
)); ?>
