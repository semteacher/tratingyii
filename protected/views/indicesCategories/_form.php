<?php
/* @var $this IndicesCategoriesController */
/* @var $model IndicesCategories */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'indices-categories-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'category_name'); ?>
		<?php echo $form->textField($model,'category_name',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'category_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'category_desc'); ?>
		<?php echo $form->textField($model,'category_desc',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'category_desc'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'category_def_weight'); ?>
		<?php echo $form->textField($model,'category_def_weight'); ?>
		<?php echo $form->error($model,'category_def_weight'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->