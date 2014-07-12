<?php
/* @var $this GeneralInfoController */
/* @var $model GeneralInfo */
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
		<?php echo $form->label($model,'rating_name'); ?>
		<?php echo $form->textField($model,'rating_name',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'rating_desc'); ?>
		<?php echo $form->textArea($model,'rating_desc',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ratingperiod_datestart'); ?>
		<?php echo $form->textField($model,'ratingperiod_datestart'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ratingperiod_dateend'); ?>
		<?php echo $form->textField($model,'ratingperiod_dateend'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'submission_datestart'); ?>
		<?php echo $form->textField($model,'submission_datestart'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'submission_dateend'); ?>
		<?php echo $form->textField($model,'submission_dateend'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->