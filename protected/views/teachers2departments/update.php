<?php
/* @var $this Teachers2departmentsController */
/* @var $model Teachers2departments */

$this->breadcrumbs=array(
	'Teachers2departments'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Teachers2departments', 'url'=>array('index')),
	array('label'=>'Create Teachers2departments', 'url'=>array('create')),
	array('label'=>'View Teachers2departments', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Teachers2departments', 'url'=>array('admin')),
);
?>

<h1>Update Teachers2departments <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>