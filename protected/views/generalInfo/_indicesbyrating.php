<?php
/**
 * Created by PhpStorm.
 * User: SemenetsA
 * Date: 12.07.14
 * Time: 17:04
 */
?>

<p>Indices by selected Rating</p>

<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'id'=>'raingindices-child-grid',
    'dataProvider'=>$indicesofrating_model->searchByRating($ratingID),
    'filter'=>$indicesofrating_model,
    'columns'=>array(
        'id',
        'indices_topic_id',
        'indices_category_id',
        //'indices.indice_name',
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
            'updateButtonUrl' => 'array("indices/update", "id"=>$data->indices_id)',
            'deleteButtonUrl' => 'array("rating2indices/delete", "id"=>$data->id)',
        ),
    ),
));
?>