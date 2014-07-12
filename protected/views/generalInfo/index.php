<?php
/* @var $this GeneralInfoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'General Infos',
);

$this->menu=array(
	array('label'=>'Create GeneralInfo', 'url'=>array('create')),
	array('label'=>'Manage GeneralInfo', 'url'=>array('admin')),
);
?>

<h1>General Infos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
