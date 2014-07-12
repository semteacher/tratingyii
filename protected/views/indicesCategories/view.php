<?php
/* @var $this IndicesCategoriesController */
/* @var $model IndicesCategories */

$this->breadcrumbs=array(
	'Indices Categories'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List IndicesCategories', 'url'=>array('index')),
	array('label'=>'Create IndicesCategories', 'url'=>array('create')),
	array('label'=>'Update IndicesCategories', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete IndicesCategories', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage IndicesCategories', 'url'=>array('admin')),
);
?>

<h1>View IndicesCategories #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'category_name',
		'category_desc',
		'category_def_weight',
	),
)); ?>
