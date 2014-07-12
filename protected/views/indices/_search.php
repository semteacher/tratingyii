<?php
/* @var $this IndicesController */
/* @var $model Indices */
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
		<?php echo $form->label($model,'topic_id'); ?>
		<?php echo $form->textField($model,'topic_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'category_id'); ?>
		<?php echo $form->textField($model,'category_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'indice_name'); ?>
		<?php echo $form->textField($model,'indice_name',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'indice_desc'); ?>
		<?php echo $form->textField($model,'indice_desc',array('size'=>60,'maxlength'=>500)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'datatype_id'); ?>
		<?php echo $form->textField($model,'datatype_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'indice_def_weight'); ?>
		<?php echo $form->textField($model,'indice_def_weight'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->