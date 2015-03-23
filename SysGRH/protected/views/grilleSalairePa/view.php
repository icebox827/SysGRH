<?php
/* @var $this GrilleSalairePaController */
/* @var $model GrilleSalairePa */

$this->breadcrumbs=array(
	'Grille Salaire Pas'=>array('index'),
	$model->idgrille_salaire_pa,
);

$this->menu=array(
	array('label'=>'List GrilleSalairePa', 'url'=>array('index')),
	array('label'=>'Create GrilleSalairePa', 'url'=>array('create')),
	array('label'=>'Update GrilleSalairePa', 'url'=>array('update', 'id'=>$model->idgrille_salaire_pa)),
	array('label'=>'Delete GrilleSalairePa', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idgrille_salaire_pa),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage GrilleSalairePa', 'url'=>array('admin')),
);
?>

<h1>View GrilleSalairePa #<?php echo $model->idgrille_salaire_pa; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idgrille_salaire_pa',
		'fonction',
		'salaire',
	),
)); ?>
