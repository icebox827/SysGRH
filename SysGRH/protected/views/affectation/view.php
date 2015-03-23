<?php
/* @var $this AffectationController */
/* @var $model Affectation */

$this->breadcrumbs=array(
	'Affectations'=>array('index'),
	$model->idaffectation,
);

$this->menu=array(
	array('label'=>'List Affectation', 'url'=>array('index')),
	array('label'=>'Create Affectation', 'url'=>array('create')),
	array('label'=>'Update Affectation', 'url'=>array('update', 'id'=>$model->idaffectation)),
	array('label'=>'Delete Affectation', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idaffectation),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Affectation', 'url'=>array('admin')),
);
?>

<h1>View Affectation #<?php echo $model->idaffectation; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idaffectation',
		'affectation',
	),
)); ?>
