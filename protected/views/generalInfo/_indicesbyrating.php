<?php
/**
 * Created by PhpStorm.
 * User: SemenetsA
 * Date: 12.07.14
 * Time: 17:04
 */
?>

<h3>Indices by selected Rating: <?php echo GeneralInfo::model()->findByPk($ratingID)->rating_name; ?></h3>

<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'id'=>'raingindices-child-grid',
    'dataProvider'=>$indicesofrating_model->searchByRating($ratingID),
    'filter'=>$indicesofrating_model,
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
            'filter' => CHtml::activeTextField($indicesofrating_model, 'indice_name_param'),
        ),
        'weight',
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

    <h3>Indices NOT in selected Rating:</h3>

<?php
//var_dump($moreindices_model);
$this->widget('zii.widgets.grid.CGridView', array(
    'id'=>'moreindices-child-grid',
    'dataProvider'=>$moreindices_model->searchNotInRating($ratingID),
    'filter'=>$moreindices_model,
    'columns'=>array(
        'id',
        //'indices_topic_id',
        array(
            'name' => 'topic_id',
            'type' => 'raw',
            'value' => '$data->topic->topic_name',
            'filter'=> CHtml::listData(IndicesTopics::model()->findAll(), 'id', 'topic_name'),
        ),
        //'indices_category_id',
        //'indices.category.category_name',
        array(
            'name' => 'category_id',
            'type' => 'raw',
            'value' => '$data->category->category_name',
            'filter'=> CHtml::listData(IndicesCategories::model()->findAll(), 'id', 'category_name'),
        ),
        'indice_name',
        'indice_def_weight',
        array(
            'class'=>'CButtonColumn',
            'template'=>'{view}{update}{delete}',
            'viewButtonUrl' => 'array("indices/view", "id"=>$data->id)',
            'updateButtonUrl' => 'array("indices/update", "id"=>$data->id)',
            'deleteButtonUrl' => 'array("rating2indices/delete", "id"=>$data->id)',
        ),
    ),
));
?>