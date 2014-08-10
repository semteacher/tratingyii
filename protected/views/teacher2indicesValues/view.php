<?php
$this->breadcrumbs=array(
	'Teacher2indices Values'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Teacher2indicesValues','url'=>array('index')),
	array('label'=>'Create Teacher2indicesValues','url'=>array('create')),
	array('label'=>'Update Teacher2indicesValues','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete Teacher2indicesValues','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Teacher2indicesValues','url'=>array('admin')),
);
?>

<h1>View Teacher2indicesValues #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'teacher_id',
		'rating2indice_id',
		'value',
		'setup_date',
	),
)); ?>
