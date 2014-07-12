<?php
/* @var $this Teachers2departmentsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Teachers2departments',
);

$this->menu=array(
	array('label'=>'Create Teachers2departments', 'url'=>array('create')),
	array('label'=>'Manage Teachers2departments', 'url'=>array('admin')),
);
?>

<h1>Teachers2departments</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
