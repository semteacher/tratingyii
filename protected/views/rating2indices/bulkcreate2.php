<?php
/* @var $this Rating2indicesController */
/* @var $model Rating2indices */
/* @var $rating_model GeneralInfo */
/* @var $indices_model Indices */

$this->breadcrumbs=array(
	'Rating2indices'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Rating2indices', 'url'=>array('index')),
	array('label'=>'Manage Rating2indices', 'url'=>array('admin')),
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

<h1>Bulk Create Rating2indices-2</h1>
<h3>Existing Ratings:</h3>
<div id="parentView">
<?php $this->widget('zii.widgets.grid.CGridView', array(
    'id'=>'ratings-grid',
    'dataProvider'=>$rating_model->search(),
    'filter'=>$rating_model,
    'columns'=>array(
        'id',
        'rating_name',
        'ratingperiod_datestart',
        'ratingperiod_dateend',
        'submission_datestart',
        'submission_dateend',

        array(
            'class'=>'CButtonColumn',
        ),
    ),
)); ?>
</div>

    <h3>Include Indices:</h3>
<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
    <?php $this->renderPartial('_search',array(
        'model'=>$model,
    )); ?>
</div><!-- search-form -->

<p id="loadingPic"></br></p>

<?php $this->widget('zii.widgets.grid.CGridView', array(
    'id'=>'rating2indices-grid',
    'dataProvider'=>$indices_model->search(),
    'filter'=>$indices_model,
    'columns'=>array(
        array(
            'class'=>'CCheckBoxColumn',
            'selectableRows' => 2,
            'checkBoxHtmlOptions' => array('class' => 'checkclass'),
        ),
        'id',
        'topic_id',
        'category_id',
        'indice_name',
        'indice_desc',
        'datatype_id',
        'indice_def_weight',
        array(
            'class'=>'CButtonColumn',
        ),
    ),
)); ?>

<?php
/* Загрузка javascript-файла,
   содержащего нашу Ajax-функцию */
$path = Yii::app()->baseUrl.'/js/getIndicesByRating.js';
Yii::app()->clientScript->registerScriptFile($path,
    CClientScript::POS_END);
?>