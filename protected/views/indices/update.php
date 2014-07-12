<?php
/* @var $this IndicesController */
/* @var $model Indices */

$this->breadcrumbs=array(
	'Indices'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Indices', 'url'=>array('index')),
	array('label'=>'Create Indices', 'url'=>array('create')),
	array('label'=>'View Indices', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Indices', 'url'=>array('admin')),
);
?>

<h1>Update Indices <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>