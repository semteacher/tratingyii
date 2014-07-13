<?php
/**
 * Created by PhpStorm.
 * User: SemenetsA
 * Date: 12.07.14
 * Time: 14:41
 */
?>
<ul>
    <li><?php echo CHtml::link('Manage Ratings',array('generalInfo/admin')) . ' (' . GeneralInfo::model()->count() . ')'; ?></li>
    <li><?php echo CHtml::link('Manage Indices',array('indices/admin')) . ' (' . Indices::model()->count() . ')'; ?></li>
    <li><?php echo CHtml::link('Manage Users',array('teachers/admin')) . ' (' . Teachers::model()->count() . ')'; ?></li>
    <li><?php echo CHtml::link('Manage Departments',array('departments/admin')) . ' (' . Departments::model()->count() . ')'; ?></li>
    <li><?php echo CHtml::link('Manage User Assignments',array('teachers2departments/admin')) . ' (' . Teachers2departments::model()->count() . ')'; ?></li>
    <li><?php echo CHtml::link('Logout',array('site/logout')); ?></li>
</ul>