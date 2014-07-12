<?php
/* @var $this TeachersController */
/* @var $model Teachers */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fname'); ?>
		<?php echo $form->textField($model,'fname',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'lname'); ?>
		<?php echo $form->textField($model,'lname',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tdmu_login'); ?>
		<?php echo $form->textField($model,'tdmu_login',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tdmu_pass'); ?>
		<?php echo $form->textField($model,'tdmu_pass',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tdmu_id'); ?>
		<?php echo $form->textField($model,'tdmu_id',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'google_email'); ?>
		<?php echo $form->textField($model,'google_email'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'google_link'); ?>
		<?php echo $form->textField($model,'google_link',array('size'=>60,'maxlength'=>150)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'google_photo'); ?>
		<?php echo $form->textField($model,'google_photo',array('size'=>60,'maxlength'=>150)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'google_id'); ?>
		<?php echo $form->textField($model,'google_id',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->