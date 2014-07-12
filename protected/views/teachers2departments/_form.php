<?php
/* @var $this Teachers2departmentsController */
/* @var $model Teachers2departments */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'teachers2departments-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
        <?php $departmentdata = CHtml::listData( Departments::model()->findAll(),'id','dep_name' ); ?>
		<?php echo $form->labelEx($model,'dep_id'); ?>
        <?php echo $form->dropDownList($model,'dep_id', $departmentdata); ?>
		<?php echo $form->error($model,'dep_id'); ?>
	</div>

	<div class="row">
        <?php $teacherdata = CHtml::listData( Teachers::model()->findAll(),'id', 'lname' ); ?>//TODO:display 2 fields: first and lastname
		<?php echo $form->labelEx($model,'teacher_id'); ?>
        <?php echo $form->dropDownList($model,'teacher_id', $teacherdata); ?>
		<?php echo $form->error($model,'teacher_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'assigned'); ?>
		<?php echo $form->textField($model,'assigned'); ?>
		<?php echo $form->error($model,'assigned'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'released'); ?>
		<?php echo $form->textField($model,'released'); ?>
		<?php echo $form->error($model,'released'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dep_role_id'); ?>
		<?php echo $form->textField($model,'dep_role_id'); ?>
		<?php echo $form->error($model,'dep_role_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'is_chief'); ?>
		<?php echo $form->textField($model,'is_chief'); ?>
		<?php echo $form->error($model,'is_chief'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'is_admin'); ?>
		<?php echo $form->textField($model,'is_admin'); ?>
		<?php echo $form->error($model,'is_admin'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->