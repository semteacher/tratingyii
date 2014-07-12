<?php
/* @var $this Teachers2departmentsController */
/* @var $model Teachers2departments */

$this->breadcrumbs=array(
	'Teachers2departments'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Teachers2departments', 'url'=>array('index')),
	array('label'=>'Create Teachers2departments', 'url'=>array('create')),
	array('label'=>'Update Teachers2departments', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Teachers2departments', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Teachers2departments', 'url'=>array('admin')),
);
?>

<h1>View Teachers2departments #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'dep_id',
		'teacher_id',
		'assigned',
		'released',
		'dep_role_id',
		'is_chief',
		'is_admin',
	),
)); ?>
