<?php
/* @var $this IndicesTopicsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Indices Topics',
);

$this->menu=array(
	array('label'=>'Create IndicesTopics', 'url'=>array('create')),
	array('label'=>'Manage IndicesTopics', 'url'=>array('admin')),
);
?>

<h1>Indices Topics</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
