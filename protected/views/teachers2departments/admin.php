<?php
/* @var $this Teachers2departmentsController */
/* @var $model Teachers2departments */

$this->breadcrumbs=array(
	'Teachers2departments'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Teachers2departments', 'url'=>array('index')),
	array('label'=>'Create Teachers2departments', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#teachers2departments-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Teachers2departments</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'teachers2departments-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'dep_id',
		'teacher_id',
		'assigned',
		'released',
		'dep_role_id',
		/*
		'is_chief',
		'is_admin',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
