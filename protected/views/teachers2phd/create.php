<?php
$this->breadcrumbs=array(
	'Teachers2phds'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Teachers2phd','url'=>array('index')),
	array('label'=>'Manage Teachers2phd','url'=>array('admin')),
);
?>

<h1>Create Teachers2phd</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>