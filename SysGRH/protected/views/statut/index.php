<?php
/* @var $this StatutController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Statuts',
);

$this->menu=array(
	array('label'=>'Create Statut', 'url'=>array('create')),
	array('label'=>'Manage Statut', 'url'=>array('admin')),
);
?>

<h1>Statuts</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
