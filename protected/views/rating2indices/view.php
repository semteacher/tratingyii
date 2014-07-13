<?php
/* @var $this Rating2indicesController */
/* @var $model Rating2indices */

$this->breadcrumbs=array(
	'Rating2indices'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Rating2indices', 'url'=>array('index')),
	array('label'=>'Create Rating2indices', 'url'=>array('create')),
	array('label'=>'Update Rating2indices', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Rating2indices', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Rating2indices', 'url'=>array('admin')),
);
?>

<h1>View Rating2indices #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'rating_id',
		'indices_id',
		'indices_topic_id',
		'indices_category_id',
		'is_archive',
		'weight',
		'date_inc',
		'is_chief_only',
	),
)); ?>
