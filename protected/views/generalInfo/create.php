<?php
/* @var $this GeneralInfoController */
/* @var $model GeneralInfo */

$this->breadcrumbs=array(
	'General Infos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List GeneralInfo', 'url'=>array('index')),
	array('label'=>'Manage GeneralInfo', 'url'=>array('admin')),
);
?>

<h1>Create GeneralInfo</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>