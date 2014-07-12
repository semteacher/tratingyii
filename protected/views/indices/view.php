<?php
/* @var $this IndicesController */
/* @var $model Indices */

$this->breadcrumbs=array(
	'Indices'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Indices', 'url'=>array('index')),
	array('label'=>'Create Indices', 'url'=>array('create')),
	array('label'=>'Update Indices', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Indices', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Indices', 'url'=>array('admin')),
);
?>

<h1>View Indices #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'topic_id',
		'category_id',
		'indice_name',
		'indice_desc',
		'datatype_id',
		'indice_def_weight',
	),
)); ?>
