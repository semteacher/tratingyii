<?php
/* @var $this Teachers2departmentsController */
/* @var $model Teachers2departments */
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
		<?php echo $form->label($model,'dep_id'); ?>
		<?php echo $form->textField($model,'dep_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'teacher_id'); ?>
		<?php echo $form->textField($model,'teacher_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'assigned'); ?>
		<?php echo $form->textField($model,'assigned'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'released'); ?>
		<?php echo $form->textField($model,'released'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dep_role_id'); ?>
		<?php echo $form->textField($model,'dep_role_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'is_chief'); ?>
		<?php echo $form->textField($model,'is_chief'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'is_admin'); ?>
		<?php echo $form->textField($model,'is_admin'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->