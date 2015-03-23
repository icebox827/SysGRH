<?php
/* @var $this PersonnelController */
/* @var $model Personnel */

$this->breadcrumbs=array(
	'Personnels'=>array('index'),
	$model->idpersonnel,
);

$this->menu=array(
	array('label'=>'List Personnel', 'url'=>array('index')),
	array('label'=>'Create Personnel', 'url'=>array('create')),
	array('label'=>'Update Personnel', 'url'=>array('update', 'id'=>$model->idpersonnel)),
	array('label'=>'Delete Personnel', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idpersonnel),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Personnel', 'url'=>array('admin')),
);
?>

<h1>View Personnel #<?php echo $model->idpersonnel; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idpersonnel',
		'nom',
		'prenom',
		'date_naissance',
		'lieu_naissance',
		'sexe',
		'etat_civil',
		'cin',
		'nif',
		'num_passeport',
		'matricule',
		'adresse',
		'adresse_anterieur',
		'adresse_ref',
		'telephone_primaire',
		'telephone_secondaire',
		'email_personnel',
		'email_professionnel',
		'autre_email',
		'origine',
		'entree_en_fonction',
		'id_budgetaire',
		'categorie',
	),
)); ?>
