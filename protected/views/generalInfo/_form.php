<?php
/* @var $this GeneralInfoController */
/* @var $model GeneralInfo */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'general-info-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'rating_name'); ?>
		<?php echo $form->textField($model,'rating_name',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'rating_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rating_desc'); ?>
		<?php echo $form->textArea($model,'rating_desc',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'rating_desc'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ratingperiod_datestart'); ?>
		<?php echo $form->textField($model,'ratingperiod_datestart'); ?>
		<?php echo $form->error($model,'ratingperiod_datestart'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ratingperiod_dateend'); ?>
		<?php echo $form->textField($model,'ratingperiod_dateend'); ?>
		<?php echo $form->error($model,'ratingperiod_dateend'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'submission_datestart'); ?>
		<?php echo $form->textField($model,'submission_datestart'); ?>
		<?php echo $form->error($model,'submission_datestart'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'submission_dateend'); ?>
		<?php echo $form->textField($model,'submission_dateend'); ?>
		<?php echo $form->error($model,'submission_dateend'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->