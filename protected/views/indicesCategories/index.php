<?php
/* @var $this IndicesCategoriesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Indices Categories',
);

$this->menu=array(
	array('label'=>'Create IndicesCategories', 'url'=>array('create')),
	array('label'=>'Manage IndicesCategories', 'url'=>array('admin')),
);
?>

<h1>Indices Categories</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
