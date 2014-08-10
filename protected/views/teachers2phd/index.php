<?php
$this->breadcrumbs=array(
	'Teachers2phds',
);

$this->menu=array(
	array('label'=>'Create Teachers2phd','url'=>array('create')),
	array('label'=>'Manage Teachers2phd','url'=>array('admin')),
);
?>

<h1>Teachers2phds</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
