<?php
/* @var $this IndicesTopicsController */
/* @var $model IndicesTopics */

$this->breadcrumbs=array(
	'Indices Topics'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List IndicesTopics', 'url'=>array('index')),
	array('label'=>'Create IndicesTopics', 'url'=>array('create')),
	array('label'=>'View IndicesTopics', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage IndicesTopics', 'url'=>array('admin')),
);
?>

<h1>Update IndicesTopics <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>