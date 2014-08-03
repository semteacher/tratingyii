<?php
/* @var $this GeneralInfoController */
/* @var $model GeneralInfo */

$this->breadcrumbs=array(
	'Ratings General Info'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Ratings General Info', 'url'=>array('index')),
	array('label'=>'Create Rating', 'url'=>array('create')),
	array('label'=>'Update Rating', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Rating', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Ratings General Info', 'url'=>array('admin')),
);
?>

<h1>View Rating General Info: <?php echo $model->rating_name; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'rating_name',
		'rating_desc',
		'ratingperiod_datestart',
		'ratingperiod_dateend',
		'submission_datestart',
		'submission_dateend',
	),
)); ?>
