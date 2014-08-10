<?php
$this->breadcrumbs=array(
	'Teachers2phds'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Teachers2phd','url'=>array('index')),
	array('label'=>'Create Teachers2phd','url'=>array('create')),
	array('label'=>'Update Teachers2phd','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete Teachers2phd','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Teachers2phd','url'=>array('admin')),
);
?>

<h1>View Teachers2phd #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'teacher_id',
		'phd_level',
		'phd_since',
	),
)); ?>
