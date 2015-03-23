<?php
/* @var $this GrilleSalairePaController */
/* @var $model GrilleSalairePa */

$this->breadcrumbs=array(
	'Grille Salaire Pas'=>array('index'),
	$model->idgrille_salaire_pa=>array('view','id'=>$model->idgrille_salaire_pa),
	'Update',
);

$this->menu=array(
	array('label'=>'List GrilleSalairePa', 'url'=>array('index')),
	array('label'=>'Create GrilleSalairePa', 'url'=>array('create')),
	array('label'=>'View GrilleSalairePa', 'url'=>array('view', 'id'=>$model->idgrille_salaire_pa)),
	array('label'=>'Manage GrilleSalairePa', 'url'=>array('admin')),
);
?>

<h1>Update GrilleSalairePa <?php echo $model->idgrille_salaire_pa; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>