<?php
$this->breadcrumbs=array(
	'Teacher2indices Values'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Teacher2indicesValues','url'=>array('index')),
	array('label'=>'Manage Teacher2indicesValues','url'=>array('admin')),
);
?>

<h1>Create Teacher2indicesValues</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>