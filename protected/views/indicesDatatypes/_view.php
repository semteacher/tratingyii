<?php
/* @var $this IndicesDatatypesController */
/* @var $data IndicesDatatypes */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('datatype_name')); ?>:</b>
	<?php echo CHtml::encode($data->datatype_name); ?>
	<br />


</div>