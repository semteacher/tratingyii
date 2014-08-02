<?php
/* @var $this GeneralInfoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Ratings General Info',
);

$this->menu=array(
	array('label'=>'Create Rating', 'url'=>array('create')),
	array('label'=>'Manage Rating', 'url'=>array('admin')),
);
?>

<h1>Ratings General Info</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
