<?php
/* @var $this StatutController */
/* @var $model Statut */

$this->breadcrumbs=array(
	'Statuts'=>array('index'),
	$model->idstatut=>array('view','id'=>$model->idstatut),
	'Update',
);

$this->menu=array(
	array('label'=>'List Statut', 'url'=>array('index')),
	array('label'=>'Create Statut', 'url'=>array('create')),
	array('label'=>'View Statut', 'url'=>array('view', 'id'=>$model->idstatut)),
	array('label'=>'Manage Statut', 'url'=>array('admin')),
);
?>

<h1>Update Statut <?php echo $model->idstatut; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>