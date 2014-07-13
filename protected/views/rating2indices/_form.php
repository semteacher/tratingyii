<?php
/* @var $this Rating2indicesController */
/* @var $model Rating2indices */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'rating2indices-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'rating_id'); ?>
		<?php echo $form->textField($model,'rating_id'); ?>
		<?php echo $form->error($model,'rating_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'indices_id'); ?>
		<?php echo $form->textField($model,'indices_id'); ?>
		<?php echo $form->error($model,'indices_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'indices_topic_id'); ?>
		<?php echo $form->textField($model,'indices_topic_id'); ?>
		<?php echo $form->error($model,'indices_topic_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'indices_category_id'); ?>
		<?php echo $form->textField($model,'indices_category_id'); ?>
		<?php echo $form->error($model,'indices_category_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'is_archive'); ?>
		<?php echo $form->textField($model,'is_archive'); ?>
		<?php echo $form->error($model,'is_archive'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'weight'); ?>
		<?php echo $form->textField($model,'weight'); ?>
		<?php echo $form->error($model,'weight'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'date_inc'); ?>
		<?php echo $form->textField($model,'date_inc'); ?>
		<?php echo $form->error($model,'date_inc'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'is_chief_only'); ?>
		<?php echo $form->textField($model,'is_chief_only'); ?>
		<?php echo $form->error($model,'is_chief_only'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->