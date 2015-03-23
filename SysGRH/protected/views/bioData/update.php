<?php
/* @var $this BioDataController */
/* @var $model BioData */

$this->breadcrumbs=array(
	'Bio Datas'=>array('index'),
	$model->idbio_data=>array('view','id'=>$model->idbio_data),
	'Update',
);

$this->menu=array(
	array('label'=>'List BioData', 'url'=>array('index')),
	array('label'=>'Create BioData', 'url'=>array('create')),
	array('label'=>'View BioData', 'url'=>array('view', 'id'=>$model->idbio_data)),
	array('label'=>'Manage BioData', 'url'=>array('admin')),
);
?>

<h1>Update BioData <?php echo $model->idbio_data; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>