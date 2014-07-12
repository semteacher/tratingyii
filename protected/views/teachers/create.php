<?php
/* @var $this TeachersController */
/* @var $model Teachers */

$this->breadcrumbs=array(
	'Teachers'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Teachers', 'url'=>array('index')),
	array('label'=>'Manage Teachers', 'url'=>array('admin')),
);
?>

<h1>Create Teachers</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>