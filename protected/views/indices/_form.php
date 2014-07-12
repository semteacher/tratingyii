<?php
/* @var $this IndicesController */
/* @var $model Indices */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'indices-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
        <?php
            $topicdata = CHtml::listData( IndicesTopics::model()->findAll(),'id','topic_name' )
        ?>
		<?php echo $form->labelEx($model,'topic_id'); ?>
        <?php echo $form->dropDownList($model,'topic_id', $topicdata); ?>
<!--		--><?php //echo $form->textField($model,'topic_id'); ?>
		<?php echo $form->error($model,'topic_id'); ?>
	</div>

	<div class="row">
        <?php
        $categorydata = CHtml::listData( IndicesCategories::model()->findAll(),'id','category_name' )
        ?>
		<?php echo $form->labelEx($model,'category_id'); ?>
        <?php echo $form->dropDownList($model,'category_id', $categorydata); ?>
<!--		--><?php //echo $form->textField($model,'category_id'); ?>
		<?php echo $form->error($model,'category_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'indice_name'); ?>
		<?php echo $form->textField($model,'indice_name',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'indice_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'indice_desc'); ?>
		<?php echo $form->textField($model,'indice_desc',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'indice_desc'); ?>
	</div>

	<div class="row">
        <?php
        $datatypedata = CHtml::listData( IndicesDatatypes::model()->findAll(),'id','datatype_name' )
        ?>
		<?php echo $form->labelEx($model,'datatype_id'); ?>
        <?php echo $form->dropDownList($model,'datatype_id', $datatypedata); ?>
<!--		--><?php //echo $form->textField($model,'datatype_id'); ?>
		<?php echo $form->error($model,'datatype_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'indice_def_weight'); ?>
		<?php echo $form->textField($model,'indice_def_weight'); ?>
		<?php echo $form->error($model,'indice_def_weight'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->