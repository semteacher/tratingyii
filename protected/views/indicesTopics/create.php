<?php
/* @var $this IndicesTopicsController */
/* @var $model IndicesTopics */

$this->breadcrumbs=array(
	'Indices Topics'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List IndicesTopics', 'url'=>array('index')),
	array('label'=>'Manage IndicesTopics', 'url'=>array('admin')),
);
?>

<h1>Create IndicesTopics</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>