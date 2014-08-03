<?php
/* @var $this GeneralInfoController */
/* @var $model GeneralInfo */
/* @var $indicesofrating_model Rating2indices */

$this->breadcrumbs = array(
    'General Infos' => array('index'),
    'Manage',
);

$this->menu = array(
    array('label' => 'List Ratings', 'url' => array('index')),
    array('label' => 'Create Rating', 'url' => array('create')),
    //array('label'=>'Manage Rating Indices', 'url'=>array('ratingindices')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#general-info-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Indices Assignments by Ratings</h1>

<p>
    You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>
        &lt;&gt;</b>
    or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search', '#', array('class' => 'search-button')); ?>
<div class="search-form" style="display:none">
    <?php $this->renderPartial('_search', array(
        'model' => $model,
    )); ?>
</div><!-- search-form -->

<div id="parentView">
    <?php $this->widget('zii.widgets.grid.CGridView', array(
        'id' => 'general-info-grid',
        'dataProvider' => $model->search(),
        'filter' => $model,
        'ajaxUpdate' => 'childView',
        'selectionChanged'=> "updateChild",  // new function
        'columns' => array(
            'id',
            'rating_name',
            'rating_desc',
//		'ratingperiod_datestart',
            array(
                'name' => 'rating_period datestart',
                'type' => 'raw',
                'value' => '$data->ratingperiod_datestart',
                'filter' => $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                        'model' => $model,
                        'attribute' => 'ratingperiod_datestart',
                        'language' => 'uk',
                        'htmlOptions' => array(
                            'id' => 'datepicker_rating_period_datestart',
                            'size' => '10',
                        ),
                        'options' => array(
                            //'showOn' => 'focus',
                            'showAnim' => 'fold',
                            'dateFormat' => 'yy-mm-dd',
                            'showOtherMonths' => true, // show dates in other months
                            'selectOtherMonths' => true, // can select dates in other months
                            'changeYear' => true, // can change year
                            'changeMonth' => true, // can change month
                        ),
                    ), true),
            ),
            'ratingperiod_dateend',
            'submission_datestart',
            'submission_dateend',

            array(
                'class' => 'CButtonColumn',
                'template' => '{view} {update} {delete} {children}',
                'buttons' => array(
                    'children' => array(
                        'label' => 'View Related Records',
                        'url' => '$this->grid->controller->createUrl("ratingindices", array("ratingID"=>$data->primaryKey,))',
                        'options' => array(
                            'ajax' => array(
                                'type' => 'get',
                                'url' => 'js:$(this).attr("href")',
                                'success' => 'function(response){
                            jQuery("#ratingindicesView").html(response);
                            /* you may add additional javascript statements
                            here - such as making childDiv visible etc. */
                        }',
                            ),
                        ),
                    ),
                ),
            ),
        ),
        'afterAjaxUpdate' => "function() {
        jQuery('#datepicker_rating_period_datestart').datepicker(jQuery.extend(jQuery.datepicker.regional['uk'],{
                                            'showAnim':'fold',
                                            'dateFormat':'yy-mm-dd',
                                            'changeMonth':'true',
                                            'changeYear':'true'}));
    }",
    ));
    ?>
</div>

<p id="loadingPic"></br></p>

<div id="ratingindicesView">
    <?php
    $this->renderPartial('_indicesbyrating', array(
        'indicesofrating_model' => $indicesofrating_model,
        'ratingID' => $ratingID,
    ))
    ?>
</div>

<?php
/*Load the javascript file that contains our own ajax function*/
$path = Yii::app()->baseUrl.'/js/getIndicesByRating2.js';
Yii::app()->clientScript->registerScriptFile($path,
    CClientScript::POS_END);
?>