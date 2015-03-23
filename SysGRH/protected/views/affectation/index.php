<?php
/* @var $this AffectationController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Affectations',
);

$this->menu=array(
	array('label'=>'Create Affectation', 'url'=>array('create')),
	array('label'=>'Manage Affectation', 'url'=>array('admin')),
);
?>

<h1>Affectations</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
