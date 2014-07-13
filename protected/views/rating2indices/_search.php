<?php
/* @var $this Rating2indicesController */
/* @var $model Rating2indices */
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
		<?php echo $form->label($model,'rating_id'); ?>
		<?php echo $form->textField($model,'rating_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'indices_id'); ?>
		<?php echo $form->textField($model,'indices_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'indices_topic_id'); ?>
		<?php echo $form->textField($model,'indices_topic_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'indices_category_id'); ?>
		<?php echo $form->textField($model,'indices_category_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'is_archive'); ?>
		<?php echo $form->textField($model,'is_archive'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'weight'); ?>
		<?php echo $form->textField($model,'weight'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'date_inc'); ?>
		<?php echo $form->textField($model,'date_inc'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'is_chief_only'); ?>
		<?php echo $form->textField($model,'is_chief_only'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->