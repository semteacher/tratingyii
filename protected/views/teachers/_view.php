<?php
/* @var $this TeachersController */
/* @var $data Teachers */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fname')); ?>:</b>
	<?php echo CHtml::encode($data->fname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lname')); ?>:</b>
	<?php echo CHtml::encode($data->lname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tdmu_login')); ?>:</b>
	<?php echo CHtml::encode($data->tdmu_login); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tdmu_pass')); ?>:</b>
	<?php echo CHtml::encode($data->tdmu_pass); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tdmu_id')); ?>:</b>
	<?php echo CHtml::encode($data->tdmu_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('google_email')); ?>:</b>
	<?php echo CHtml::encode($data->google_email); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('google_link')); ?>:</b>
	<?php echo CHtml::encode($data->google_link); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('google_photo')); ?>:</b>
	<?php echo CHtml::encode($data->google_photo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('google_id')); ?>:</b>
	<?php echo CHtml::encode($data->google_id); ?>
	<br />

	*/ ?>

</div>