<?php
$this->breadcrumbs=array(
	'Teacher2indices Values'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Teacher2indicesValues','url'=>array('index')),
	array('label'=>'Create Teacher2indicesValues','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('teacher2indices-values-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Teacher2indices Values</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button btn')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'teacher2indices-values-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'teacher_id',
		'rating2indice_id',
		'value',
		'setup_date',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
