<?php
/* @var $this IndicesController */
/* @var $model Indices */

$this->breadcrumbs=array(
	'Indices'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Indices', 'url'=>array('index')),
	array('label'=>'Manage Indices', 'url'=>array('admin')),
);
?>

<h1>Create Indices</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>