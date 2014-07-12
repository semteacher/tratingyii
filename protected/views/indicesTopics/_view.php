<?php
/* @var $this IndicesTopicsController */
/* @var $data IndicesTopics */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('topic_name')); ?>:</b>
	<?php echo CHtml::encode($data->topic_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('topic_desc')); ?>:</b>
	<?php echo CHtml::encode($data->topic_desc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('topic_def_weight')); ?>:</b>
	<?php echo CHtml::encode($data->topic_def_weight); ?>
	<br />


</div>