<?php
/* @var $this DepartmentsController */
/* @var $data Departments */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dep_name')); ?>:</b>
	<?php echo CHtml::encode($data->dep_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dep_desc')); ?>:</b>
	<?php echo CHtml::encode($data->dep_desc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dep_type')); ?>:</b>
	<?php echo CHtml::encode($data->dep_type); ?>
	<br />


</div>