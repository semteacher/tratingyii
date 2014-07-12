<?php
/* @var $this IndicesCategoriesController */
/* @var $data IndicesCategories */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('category_name')); ?>:</b>
	<?php echo CHtml::encode($data->category_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('category_desc')); ?>:</b>
	<?php echo CHtml::encode($data->category_desc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('category_def_weight')); ?>:</b>
	<?php echo CHtml::encode($data->category_def_weight); ?>
	<br />


</div>