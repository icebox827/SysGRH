<?php
/* @var $this ArmeController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Armes',
);

$this->menu=array(
	array('label'=>'Create Arme', 'url'=>array('create')),
	array('label'=>'Manage Arme', 'url'=>array('admin')),
);
?>

<h1>Armes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
