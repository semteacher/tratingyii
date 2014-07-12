<?php
/* @var $this IndicesDatatypesController */
/* @var $model IndicesDatatypes */

$this->breadcrumbs=array(
	'Indices Datatypes'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List IndicesDatatypes', 'url'=>array('index')),
	array('label'=>'Create IndicesDatatypes', 'url'=>array('create')),
	array('label'=>'View IndicesDatatypes', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage IndicesDatatypes', 'url'=>array('admin')),
);
?>

<h1>Update IndicesDatatypes <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>