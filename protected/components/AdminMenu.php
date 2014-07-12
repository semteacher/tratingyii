<?php
/**
 * Created by PhpStorm.
 * User: SemenetsA
 * Date: 12.07.14
 * Time: 14:38
 */

Yii::import('zii.widgets.CPortlet');

class AdminMenu extends CPortlet
{
    public function init()
    {
        $this->title='Admin: '.CHtml::encode(Yii::app()->user->name);
        parent::init();
    }

    protected function renderContent()
    {
        $this->render('adminMenu');
    }
}