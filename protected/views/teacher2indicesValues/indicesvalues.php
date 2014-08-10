<?php
/* @var $this Teacher2indicesValuesController */

/* @var ratingindicesmodel Rating2indices */


$this->breadcrumbs=array(
	'Teacher2indices Values'=>array('index'),
	'Indices Values',
);

$this->menu=array(
	array('label'=>'List Teacher2indicesValues','url'=>array('index')),
	array('label'=>'Manage Teacher2indicesValues','url'=>array('admin')),
);
?>

<h1>Your Indices Values</h1>



<h3>Indices by selected Rating: <?php echo GeneralInfo::model()->findByPk($ratingID)->rating_name; ?></h3>

<?php $form=$this->beginWidget('CActiveForm', array(
    'enableAjaxValidation'=>true,
)); ?>
<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'id'=>'raingindices-child-grid',
    'dataProvider'=>$ratingindicesmodel->searchByRating($ratingID),
    'filter'=>$ratingindicesmodel,
    'columns'=>array(
        'id',
        //'indices_topic_id',
        array(
            'name' => 'indices_topic_id',
            'type' => 'raw',
            'value' => '$data->indices->topic->topic_name',
            'filter'=> CHtml::listData(IndicesTopics::model()->findAll(), 'id', 'topic_name'),
        ),
        //'indices_category_id',
        //'indices.category.category_name',
        array(
            'name' => 'indices_category_id',
            'type' => 'raw',
            'value' => '$data->indices->category->category_name',
            'filter'=> CHtml::listData(IndicesCategories::model()->findAll(), 'id', 'category_name'),
        ),
        //'indices.indice_name',
        'indices_id',
        array(
            'name'=>'indice_name_param',
            /* Проверяем, чтобы пустые связанные поля не приводили
               к ошибкам приложения */
            'value'=>'($data->indices)?$data->indices->indice_name:""',
            'header'=>'Indice Name',
            'filter' => CHtml::activeTextField($ratingindicesmodel, 'indice_name_param'),
        ),
        'weight',
        array(
            'name'=>'yourvalue',
            'type'=>'raw',
            'value'=>'CHtml::textField("yourvalue[$data->id]",$data->yourvalue,array("style"=>"width:50px;"))',
            'htmlOptions'=>array("width"=>"50px"),
        ),
        array(
            'class'=>'CButtonColumn',
            'template'=>'{view}{update}{delete}',
            'viewButtonUrl' => 'array("indices/view", "id"=>$data->indices_id)',
            'updateButtonUrl' => 'array("rating2indices/update", "id"=>$data->id)',
            'deleteButtonUrl' => 'array("rating2indices/delete", "id"=>$data->id)',
        ),
    ),
));
?>
    <script>
        function reloadGrid(data) {
            $.fn.yiiGridView.update('raingindices-child-grid');
        }
    </script>

<?php echo CHtml::ajaxSubmitButton('Update Your Values',array('teacher2indicesvalues/indicesvalues&ratingID='.$ratingID,'act'=>'teacherindicesvalues'), array('success'=>'reloadGrid')); ?>
<?php $this->endWidget(); ?>