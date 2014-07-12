<?php
/* @var $this GeneralInfoController */
/* @var $model GeneralInfo */

$this->breadcrumbs=array(
	'General Infos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List GeneralInfo', 'url'=>array('index')),
	array('label'=>'Create GeneralInfo', 'url'=>array('create')),
	array('label'=>'View GeneralInfo', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage GeneralInfo', 'url'=>array('admin')),
);
?>

<h1>Update GeneralInfo <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>