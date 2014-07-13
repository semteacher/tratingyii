<?php
/* @var $this Rating2indicesController */
/* @var $model Rating2indices */

$this->breadcrumbs=array(
	'Rating2indices'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Rating2indices', 'url'=>array('index')),
	array('label'=>'Create Rating2indices', 'url'=>array('create')),
	array('label'=>'View Rating2indices', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Rating2indices', 'url'=>array('admin')),
);
?>

<h1>Update Rating2indices <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>