<?php
/* @var $this TeachersController */
/* @var $model Teachers */

$this->breadcrumbs=array(
	'Teachers'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Teachers', 'url'=>array('index')),
	array('label'=>'Create Teachers', 'url'=>array('create')),
	array('label'=>'Update Teachers', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Teachers', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Teachers', 'url'=>array('admin')),
);
?>

<h1>View Teachers #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'fname',
		'lname',
		'tdmu_login',
		'tdmu_pass',
		'tdmu_id',
		'google_email',
		'google_link',
		'google_photo',
		'google_id',
	),
)); ?>
