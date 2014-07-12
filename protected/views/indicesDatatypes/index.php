<?php
/* @var $this IndicesDatatypesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Indices Datatypes',
);

$this->menu=array(
	array('label'=>'Create IndicesDatatypes', 'url'=>array('create')),
	array('label'=>'Manage IndicesDatatypes', 'url'=>array('admin')),
);
?>

<h1>Indices Datatypes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
