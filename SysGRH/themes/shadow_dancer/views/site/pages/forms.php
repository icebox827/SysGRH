<?php
$this->pageTitle=Yii::app()->name . ' - Form Elements';
$this->breadcrumbs=array(
	'Form Elements',
);
?>
<h1>Formulaire d'Identification</h1>
<div class="container showgrid">
    <div class="form">
        <div class="span-12">
        <div class="row">
            <label for="text" class="required">Nom:</label>
            <?php echo  CHtml::textField('text', 'Bob',array('style' => 'width:300px'));?>
        </div>
		<div class="row">
            <label for="text" class="required">Prenom:</label>
            <?php echo  CHtml::textField('text', 'Billy',array('style' => 'width:300px'));?>
        </div>
       <div class="row">
            <label for="text3">Phone #:</label>
            <?php echo  CHtml::textField('text3', '+111-222-33333',array('style' => 'width:300px'));?>
            <span class="field_name_help">Field help text.</span>
        </div>

        <div class="row">
            <label for="dropdown">Satut:</label>
            <?php echo CHtml::dropDownList('dropdown', 'In-active', array('Active'=>'Active','In-active'=>'In-active'),array('style' => 'width:100px'));?>
            <span class="field_name_help">Please select status.</span>
        </div>
        <div class="row">
            <label for="checkbox">Is Admin:</label>
           <?php echo CHtml::checkBox('checkbox', true);?>
            <span class="field_name_help">Is this user an admin?.</span>
        </div>
         <div class="row">
            <label for="checkbox">Biography:</label>
            <?php echo CHtml::textArea('textarea','', array ( 'rows'=>'10','cols' => '60')); ?>
        </div>
 
       
        </div>
        
        <div class="span-11 last">
            <div class="row">
                <label for="street">Adresse:</label>
                <?php echo  CHtml::textField('street');?>
            </div>
            <div class="row">
                <label for="city">Adresse Anterieure:</label>
                <?php echo  CHtml::textField('city');?>
            </div>
            <div class="row">
                <label for="country">Country:</label>
                <?php echo  CHtml::textField('country');?>
            </div>
        	<div class="row">
                <label for="car_id">Car Type:</label>
               <div class="cars-select">
                <?php echo CHtml::dropDownList('Cars', 'car_id', array(
                    'Mazda'=>array(
                        'mazda-rx7'=>'RX7',
                        'mazda-rx5'=>'RX5',
                    ),
                    'Volvo'=>array(
                        'volvo-b9tl'=>'B9TL',
                        'volvo-l90e-radlader'=>'L90E Radlader',
                    ),
                )); ?>
</div>
            </div>
            <div class="row">
              <?php echo CHtml::htmlButton('button 1', array('class'=>'button green'));?> 
               <?php echo CHtml::htmlButton('button 2', array('class'=>'button blue'));?>
               <?php echo CHtml::htmlButton('button 3', array('class'=>'button red'));?><br /><br />
               <?php echo CHtml::htmlButton('button 4', array('class'=>'button grey'));?>
               <?php echo CHtml::htmlButton('button 5', array('class'=>'button yellow'));?>
            </div>
        </div>
    </div><!-- form -->


</div>
<br />
