<?php
/* @var $this ArmeController */
/* @var $model Arme */

$this->breadcrumbs=array(
	'Armes'=>array('index'),
	$model->idarme,
);

$this->menu=array(
	array('label'=>'List Arme', 'url'=>array('index')),
	array('label'=>'Create Arme', 'url'=>array('create')),
	array('label'=>'Update Arme', 'url'=>array('update', 'id'=>$model->idarme)),
	array('label'=>'Delete Arme', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idarme),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Arme', 'url'=>array('admin')),
);
?>

<h1>View Arme #<?php echo $model->idarme; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idarme',
		'num_serie',
		'type',
		'marque',
		'modele',
	),
)); ?>
