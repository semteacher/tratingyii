<?php
$this->breadcrumbs=array(
	'Teacher2indices Values'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Teacher2indicesValues','url'=>array('index')),
	array('label'=>'Create Teacher2indicesValues','url'=>array('create')),
	array('label'=>'View Teacher2indicesValues','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage Teacher2indicesValues','url'=>array('admin')),
);
?>

<h1>Update Teacher2indicesValues <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>