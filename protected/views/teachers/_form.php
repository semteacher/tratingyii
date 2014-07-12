<?php
/* @var $this TeachersController */
/* @var $model Teachers */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'teachers-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'fname'); ?>
		<?php echo $form->textField($model,'fname',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'fname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lname'); ?>
		<?php echo $form->textField($model,'lname',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'lname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tdmu_login'); ?>
		<?php echo $form->textField($model,'tdmu_login',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'tdmu_login'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tdmu_pass'); ?>
<!--		--><?php //echo $form->textField($model,'tdmu_pass',array('size'=>60,'maxlength'=>100)); ?>
        <?php echo $form->passwordField($model,'tdmu_pass',array('size'=>60,'maxlength'=>100)); ?>
        <?php echo $form->error($model,'tdmu_pass'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tdmu_id'); ?>
		<?php echo $form->textField($model,'tdmu_id',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'tdmu_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'google_email'); ?>
		<?php echo $form->textField($model,'google_email'); ?>
		<?php echo $form->error($model,'google_email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'google_link'); ?>
		<?php echo $form->textField($model,'google_link',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'google_link'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'google_photo'); ?>
		<?php echo $form->textField($model,'google_photo',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'google_photo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'google_id'); ?>
		<?php echo $form->textField($model,'google_id',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'google_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->