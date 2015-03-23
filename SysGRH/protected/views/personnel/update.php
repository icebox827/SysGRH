<?php
/* @var $this PersonnelController */
/* @var $model Personnel */

$this->breadcrumbs=array(
	'Personnels'=>array('index'),
	$model->idpersonnel=>array('view','id'=>$model->idpersonnel),
	'Update',
);

$this->menu=array(
	array('label'=>'List Personnel', 'url'=>array('index')),
	array('label'=>'Create Personnel', 'url'=>array('create')),
	array('label'=>'View Personnel', 'url'=>array('view', 'id'=>$model->idpersonnel)),
	array('label'=>'Manage Personnel', 'url'=>array('admin')),
);
?>

<h1>Update Personnel <?php echo $model->idpersonnel; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>