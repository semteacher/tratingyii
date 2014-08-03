<?php
/* @var $this IndicesController */
/* @var $data Indices */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('topic_id')); ?>:</b>
	<?php echo CHtml::encode($data->topic->topic_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('category_id')); ?>:</b>
	<?php echo CHtml::encode($data->category->category_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('indice_name')); ?>:</b>
	<?php echo CHtml::encode($data->indice_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('indice_desc')); ?>:</b>
	<?php echo CHtml::encode($data->indice_desc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('datatype_id')); ?>:</b>
	<?php echo CHtml::encode($data->datatype->datatype_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('indice_def_weight')); ?>:</b>
	<?php echo CHtml::encode($data->indice_def_weight); ?>
	<br />


</div>