<?php
/* @var $this Rating2indicesController */
/* @var $model Rating2indices */

$this->breadcrumbs=array(
	'Rating2indices'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Rating2indices', 'url'=>array('index')),
	array('label'=>'Manage Rating2indices', 'url'=>array('admin')),
);
?>

<h1>Create Rating2indices</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>