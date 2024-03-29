<?php
/* @var $this DepartmentsController */
/* @var $model Departments */
/* @var $teacher_model Teachers2departments */

$this->breadcrumbs=array(
	'Departments'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Departments', 'url'=>array('index')),
	array('label'=>'Create Departments', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#departments-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Departments</h1>

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

<div id="parentView">
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'departments-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'dep_name',
		'dep_desc',
		'dep_type',
		array(
			'class'=>'CButtonColumn',
		),
	),
    'ajaxUpdate' => 'childView',
)); ?>
</div>

<p id="loadingPic"></br></p>

<div id="childView">
    <?php
    $this->renderPartial('_child', array(
        'teacher_model' => $teacher_model,
        'depID' => $depID,
    ))
    ?>
</div>

<?php
/* Загрузка javascript-файла,
   содержащего нашу Ajax-функцию */
$path = Yii::app()->baseUrl.'/js/customFunctions.js';
Yii::app()->clientScript->registerScriptFile($path,
    CClientScript::POS_END);
?>