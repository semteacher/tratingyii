<?php
/* @var $this IndicesTopicsController */
/* @var $model IndicesTopics */

$this->breadcrumbs=array(
	'Indices Topics'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List IndicesTopics', 'url'=>array('index')),
	array('label'=>'Create IndicesTopics', 'url'=>array('create')),
	array('label'=>'Update IndicesTopics', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete IndicesTopics', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage IndicesTopics', 'url'=>array('admin')),
);
?>

<h1>View IndicesTopics #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'topic_name',
		'topic_desc',
		'topic_def_weight',
	),
)); ?>
