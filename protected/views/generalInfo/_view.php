<?php
/* @var $this GeneralInfoController */
/* @var $data GeneralInfo */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('rating_name')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->rating_name), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rating_desc')); ?>:</b>
	<?php echo CHtml::encode($data->rating_desc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ratingperiod_datestart')); ?>:</b>
	<?php echo CHtml::encode($data->ratingperiod_datestart); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ratingperiod_dateend')); ?>:</b>
	<?php echo CHtml::encode($data->ratingperiod_dateend); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('submission_datestart')); ?>:</b>
	<?php echo CHtml::encode($data->submission_datestart); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('submission_dateend')); ?>:</b>
	<?php echo CHtml::encode($data->submission_dateend); ?>
	<br />

    <?php echo CHtml::link(CHtml::encode('Your Rating Data'), array('teacher2indicesvalues/indicesvalues', 'ratingID'=>$data->id)); ?>
    <br />

</div>