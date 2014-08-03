<?php
/* @var $this Rating2indicesController */
/* @var $data Rating2indices */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rating_id')); ?>:</b>
	<?php echo CHtml::encode($data->rating->rating_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('indices_id')); ?>:</b>
	<?php echo CHtml::encode($data->indices->indice_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('indices_topic_id')); ?>:</b>
	<?php echo CHtml::encode($data->indices->topic->topic_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('indices_category_id')); ?>:</b>
	<?php echo CHtml::encode($data->indices->category->category_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('is_archive')); ?>:</b>
	<?php echo CHtml::encode($data->is_archive); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('weight')); ?>:</b>
	<?php echo CHtml::encode($data->weight); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('date_inc')); ?>:</b>
	<?php echo CHtml::encode($data->date_inc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('is_chief_only')); ?>:</b>
	<?php echo CHtml::encode($data->is_chief_only); ?>
	<br />

	*/ ?>

</div>