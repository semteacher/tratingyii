<?php
/* @var $this IndicesController */
/* @var $model Indices */

$this->breadcrumbs=array(
	'Indices'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Indices', 'url'=>array('index')),
	array('label'=>'Create Indices', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#indices-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Indices</h1>

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
	'id'=>'indices-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		//'topic_id',
        array(
            'name' => 'topic_id',
            'type' => 'raw',
            'value' => '$data->topic->topic_name',
            'filter'=> CHtml::listData(IndicesTopics::model()->findAll(), 'id', 'topic_name'),
        ),
		//'category_id',
        array(
            'name' => 'category_id',
            'type' => 'raw',
            'value' => '$data->category->category_name',
            'filter'=> CHtml::listData(IndicesCategories::model()->findAll(), 'id', 'category_name'),
        ),
		'indice_name',
		'indice_desc',
		//'datatype_id',
        array(
            'name' => 'datatype_id',
            'type' => 'raw',
            'value' => '$data->datatype->datatype_name',
            'filter'=> CHtml::listData(IndicesDatatypes::model()->findAll(), 'id', 'datatype_name'),
        ),
		'indice_def_weight',

		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
