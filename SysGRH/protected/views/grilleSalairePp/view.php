<?php
/* @var $this GrilleSalairePpController */
/* @var $model GrilleSalairePp */

$this->breadcrumbs=array(
	'Grille Salaire Pps'=>array('index'),
	$model->idgrille_salaire_pp,
);

$this->menu=array(
	array('label'=>'List GrilleSalairePp', 'url'=>array('index')),
	array('label'=>'Create GrilleSalairePp', 'url'=>array('create')),
	array('label'=>'Update GrilleSalairePp', 'url'=>array('update', 'id'=>$model->idgrille_salaire_pp)),
	array('label'=>'Delete GrilleSalairePp', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idgrille_salaire_pp),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage GrilleSalairePp', 'url'=>array('admin')),
);
?>

<h1>View GrilleSalairePp #<?php echo $model->idgrille_salaire_pp; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idgrille_salaire_pp',
		'grade',
		'salaire',
	),
)); ?>
