<?php
/**
 * Created by PhpStorm.
 * User: SemenetsA
 * Date: 12.07.14
 * Time: 17:04
 */
?>

<p>Teachers by Department</p>
<div class="hint">(If Department does not select the first will be displayed)</div>

<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'id'=>'child-grid',
    'dataProvider'=>$child_model->searchIncludingProducts($parentID),
    'filter'=>$child_model,
    'columns'=>array(
        'id',
        array(
            'name'=>'fname_param',
            /* Проверяем, чтобы пустые связанные поля не приводили
               к ошибкам приложения */
            'value'=>'($data->relProduct)?$data->relProduct->product_name:""',
            'header'=>'Product Name',
            'filter' => CHtml::activeTextField($child_model, 'fname_param'),
        ),
        array(
            'class'=>'CButtonColumn',
            'template'=>'{view}{update}{delete}',
            'viewButtonUrl' => 'array("teachers/view", "id"=>$data->teacher_id)',
            'updateButtonUrl' => 'array("teachers/update", "id"=>$data->teacher_id)',
            'deleteButtonUrl' => 'array("teachers2departments/delete", "id"=>$data->id)',
        ),
    ),
));
?>