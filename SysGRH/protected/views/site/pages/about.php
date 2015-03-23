<?php
$this->pageTitle=Yii::app()->name . ' - Calendar';
$this->breadcrumbs=array(
	'Calendar',
);
?>
<h1>Calendrier</h1>

<?php
$this->widget('application.extensions.fullcalendar.FullcalendarGraphWidget', 
    array(
        'data'=>array(
                'title'=> 'Planning  quotidienne',
                'start'=> '2015-03-23',
				'end'=> '2015-03-25',
        ),
        'options'=>array(
            'editable'=>true,
        ),
        'htmlOptions'=>array(
               'class'=>'cal_theme',
			   'style'=>'width:910px;margin: 0 auto;'
        ),
    )
);
?>
