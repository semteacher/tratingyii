<?php
/* @var $this Rating2indicesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Rating2indices',
);

$this->menu=array(
	array('label'=>'Create Rating2indices', 'url'=>array('create')),
	array('label'=>'Manage Rating2indices', 'url'=>array('admin')),
);
?>

<h1>Rating2indices</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
