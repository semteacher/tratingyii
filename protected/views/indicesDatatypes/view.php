<?php
/* @var $this IndicesDatatypesController */
/* @var $model IndicesDatatypes */

$this->breadcrumbs=array(
	'Indices Datatypes'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List IndicesDatatypes', 'url'=>array('index')),
	array('label'=>'Create IndicesDatatypes', 'url'=>array('create')),
	array('label'=>'Update IndicesDatatypes', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete IndicesDatatypes', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage IndicesDatatypes', 'url'=>array('admin')),
);
?>

<h1>View IndicesDatatypes #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'datatype_name',
	),
)); ?>
