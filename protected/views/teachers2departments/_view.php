<?php
/* @var $this Teachers2departmentsController */
/* @var $data Teachers2departments */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dep_id')); ?>:</b>
	<?php echo CHtml::encode($data->dep_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('teacher_id')); ?>:</b>
	<?php echo CHtml::encode($data->teacher_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('assigned')); ?>:</b>
	<?php echo CHtml::encode($data->assigned); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('released')); ?>:</b>
	<?php echo CHtml::encode($data->released); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dep_role_id')); ?>:</b>
	<?php echo CHtml::encode($data->dep_role_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('is_chief')); ?>:</b>
	<?php echo CHtml::encode($data->is_chief); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('is_admin')); ?>:</b>
	<?php echo CHtml::encode($data->is_admin); ?>
	<br />

	*/ ?>

</div>