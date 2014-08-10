<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('teacher_id')); ?>:</b>
	<?php echo CHtml::encode($data->teacher_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('phd_level')); ?>:</b>
	<?php echo CHtml::encode($data->phd_level); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('phd_since')); ?>:</b>
	<?php echo CHtml::encode($data->phd_since); ?>
	<br />


</div>