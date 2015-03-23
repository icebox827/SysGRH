<?php
/* @var $this AffectationController */
/* @var $model Affectation */

$this->breadcrumbs=array(
	'Affectations'=>array('index'),
	$model->idaffectation=>array('view','id'=>$model->idaffectation),
	'Update',
);

$this->menu=array(
	array('label'=>'List Affectation', 'url'=>array('index')),
	array('label'=>'Create Affectation', 'url'=>array('create')),
	array('label'=>'View Affectation', 'url'=>array('view', 'id'=>$model->idaffectation)),
	array('label'=>'Manage Affectation', 'url'=>array('admin')),
);
?>

<h1>Update Affectation <?php echo $model->idaffectation; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>