<?php
$this->breadcrumbs=array(
	'Teacher2indices Values',
);

$this->menu=array(
	array('label'=>'Create Teacher2indicesValues','url'=>array('create')),
	array('label'=>'Manage Teacher2indicesValues','url'=>array('admin')),
);
?>

<h1>Teacher2indices Values</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
