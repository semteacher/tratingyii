<?php
/* @var $this GeneralInfoController */
/* @var $model GeneralInfo */

$this->breadcrumbs=array(
	'General Infos'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List GeneralInfo', 'url'=>array('index')),
	array('label'=>'Create GeneralInfo', 'url'=>array('create')),
	array('label'=>'Update GeneralInfo', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete GeneralInfo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage GeneralInfo', 'url'=>array('admin')),
);
?>

<h1>View GeneralInfo #<?php echo $model->id; ?></h1>

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
