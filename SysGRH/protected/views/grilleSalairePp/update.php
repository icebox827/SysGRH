<?php
/* @var $this GrilleSalairePpController */
/* @var $model GrilleSalairePp */

$this->breadcrumbs=array(
	'Grille Salaire Pps'=>array('index'),
	$model->idgrille_salaire_pp=>array('view','id'=>$model->idgrille_salaire_pp),
	'Update',
);

$this->menu=array(
	array('label'=>'List GrilleSalairePp', 'url'=>array('index')),
	array('label'=>'Create GrilleSalairePp', 'url'=>array('create')),
	array('label'=>'View GrilleSalairePp', 'url'=>array('view', 'id'=>$model->idgrille_salaire_pp)),
	array('label'=>'Manage GrilleSalairePp', 'url'=>array('admin')),
);
?>

<h1>Update GrilleSalairePp <?php echo $model->idgrille_salaire_pp; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>