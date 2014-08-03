<?php
/* @var $this Rating2indicesController */
/* @var $model Rating2indices */

$this->breadcrumbs=array(
	'Rating2indices'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Rating2indices', 'url'=>array('index')),
	array('label'=>'Create Rating2indices', 'url'=>array('create')),
    array('label'=>'Bulk Create Rating2indices', 'url'=>array('bulkcreate')),
    array('label'=>'Mass Create Rating2indices', 'url'=>array('masscreate')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#rating2indices-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Rating2indices</h1>

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
	'id'=>'rating2indices-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'rating_id',
		'indices_id',
		'indices_topic_id',
		'indices_category_id',
		'is_archive',
		/*
		'weight',
		'date_inc',
		'is_chief_only',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
