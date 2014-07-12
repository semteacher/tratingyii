<?php
/* @var $this IndicesCategoriesController */
/* @var $model IndicesCategories */

$this->breadcrumbs=array(
	'Indices Categories'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List IndicesCategories', 'url'=>array('index')),
	array('label'=>'Create IndicesCategories', 'url'=>array('create')),
	array('label'=>'View IndicesCategories', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage IndicesCategories', 'url'=>array('admin')),
);
?>

<h1>Update IndicesCategories <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>