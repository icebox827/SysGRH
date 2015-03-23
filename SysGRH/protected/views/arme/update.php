<?php
/* @var $this ArmeController */
/* @var $model Arme */

$this->breadcrumbs=array(
	'Armes'=>array('index'),
	$model->idarme=>array('view','id'=>$model->idarme),
	'Update',
);

$this->menu=array(
	array('label'=>'List Arme', 'url'=>array('index')),
	array('label'=>'Create Arme', 'url'=>array('create')),
	array('label'=>'View Arme', 'url'=>array('view', 'id'=>$model->idarme)),
	array('label'=>'Manage Arme', 'url'=>array('admin')),
);
?>

<h1>Update Arme <?php echo $model->idarme; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>