<?php
$this->breadcrumbs=array(
	'Teachers2phds'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Teachers2phd','url'=>array('index')),
	array('label'=>'Create Teachers2phd','url'=>array('create')),
	array('label'=>'View Teachers2phd','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage Teachers2phd','url'=>array('admin')),
);
?>

<h1>Update Teachers2phd <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>