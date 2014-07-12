<?php
/* @var $this IndicesDatatypesController */
/* @var $model IndicesDatatypes */

$this->breadcrumbs=array(
	'Indices Datatypes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List IndicesDatatypes', 'url'=>array('index')),
	array('label'=>'Manage IndicesDatatypes', 'url'=>array('admin')),
);
?>

<h1>Create IndicesDatatypes</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>