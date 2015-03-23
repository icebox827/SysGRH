<?php
/* @var $this BioDataController */
/* @var $model BioData */

$this->breadcrumbs=array(
	'Bio Datas'=>array('index'),
	$model->idbio_data,
);

$this->menu=array(
	array('label'=>'List BioData', 'url'=>array('index')),
	array('label'=>'Create BioData', 'url'=>array('create')),
	array('label'=>'Update BioData', 'url'=>array('update', 'id'=>$model->idbio_data)),
	array('label'=>'Delete BioData', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idbio_data),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage BioData', 'url'=>array('admin')),
);
?>

<h1>View BioData #<?php echo $model->idbio_data; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idbio_data',
		'photo_face',
		'photo_face_kepi',
		'photo_profil_droit',
		'photo_profil_gauche',
		'index_droit',
		'index_gauche',
		'taille_cm',
		'poids_lbs',
		'groupe_sanguin',
	),
)); ?>
