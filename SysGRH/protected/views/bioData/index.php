<?php
/* @var $this BioDataController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Bio Datas',
);

$this->menu=array(
	array('label'=>'Create BioData', 'url'=>array('create')),
	array('label'=>'Manage BioData', 'url'=>array('admin')),
);
?>

<h1>Bio Datas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
