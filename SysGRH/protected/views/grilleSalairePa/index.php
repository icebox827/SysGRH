<?php
/* @var $this GrilleSalairePaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Grille Salaire Pas',
);

$this->menu=array(
	array('label'=>'Create GrilleSalairePa', 'url'=>array('create')),
	array('label'=>'Manage GrilleSalairePa', 'url'=>array('admin')),
);
?>

<h1>Grille Salaire Pas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
