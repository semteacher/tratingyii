<?php
/* @var $this Rating2teacherController */
/* @var $data Rating2teacher */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rating_id')); ?>:</b>
	<?php echo CHtml::encode($data->rating_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('teacher_id')); ?>:</b>
	<?php echo CHtml::encode($data->indices_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('teach_rating')); ?>:</b>
	<?php echo CHtml::encode($data->indices_topic_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rating_date')); ?>:</b>
	<?php echo CHtml::encode($data->indices_category_id); ?>
	<br />

</div>