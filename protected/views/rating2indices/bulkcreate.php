<?php
/* @var $this Rating2indicesController */
/* @var $model Rating2indices */
/* @var $rating_model GeneralInfo */

$this->breadcrumbs=array(
	'Rating2indices'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Rating2indices', 'url'=>array('index')),
	array('label'=>'Manage Rating2indices', 'url'=>array('admin')),
);
?>

<h1>Bulk Create Rating2indices</h1>
<h3>Existing Ratings:</h3>

<?php $this->widget('zii.widgets.grid.CGridView', array(
    'id'=>'general-info-grid',
    'dataProvider'=>$rating_model->search(),
    'filter'=>$rating_model,
    'columns'=>array(
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

    <h3>Include Indices:</h3>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>