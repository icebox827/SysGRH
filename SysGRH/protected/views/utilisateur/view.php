<?php
/* @var $this UtilisateurController */
/* @var $model Utilisateur */

$this->breadcrumbs=array(
	'Utilisateurs'=>array('index'),
	$model->userid,
);

$this->menu=array(
	array('label'=>'List Utilisateur', 'url'=>array('index')),
	array('label'=>'Create Utilisateur', 'url'=>array('create')),
	array('label'=>'Update Utilisateur', 'url'=>array('update', 'id'=>$model->userid)),
	array('label'=>'Delete Utilisateur', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->userid),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Utilisateur', 'url'=>array('admin')),
);
?>

<h1>View Utilisateur #<?php echo $model->userid; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'userid',
		'pseudo',
		'password',
		'date_created',
	),
)); ?>
