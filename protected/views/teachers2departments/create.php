<?php
/* @var $this Teachers2departmentsController */
/* @var $model Teachers2departments */

$this->breadcrumbs=array(
	'Teachers2departments'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Teachers2departments', 'url'=>array('index')),
	array('label'=>'Manage Teachers2departments', 'url'=>array('admin')),
);
?>

<h1>Create Teachers2departments</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>