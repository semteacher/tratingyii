<?php
/* @var $this IndicesCategoriesController */
/* @var $model IndicesCategories */

$this->breadcrumbs=array(
	'Indices Categories'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List IndicesCategories', 'url'=>array('index')),
	array('label'=>'Manage IndicesCategories', 'url'=>array('admin')),
);
?>

<h1>Create IndicesCategories</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>