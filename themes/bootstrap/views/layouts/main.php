<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/styles.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>

	<?php Yii::app()->bootstrap->register(); ?>
</head>

<body>

<?php
if(Yii::app()->user->name==='admin') {
    $adminmenu=        array(
        'class'=>'bootstrap.widgets.TbMenu',
        'htmlOptions'=>array('class'=>'pull-right'),
        'items'=>array(
            array('label'=>'Manage Ratings'. ' (' . GeneralInfo::model()->count() . ')', 'url'=>'index.php?r=generalInfo/admin'),
            array('label'=>'Dropdown', 'url'=>'#', 'items'=>array(
                array('label'=>'Manage Indices' . ' (' . Indices::model()->count() . ')', 'url'=>'index.php?r=indices/admin'),
                array('label'=>'Manage Indices Assignments', 'url'=>'index.php?r=rating2indices/admin'),
                '---',
                array('label'=>'Manage Users'. ' (' . Teachers::model()->count() . ')', 'url'=>'index.php?r=teachers/admin'),
                array('label'=>'Manage Departments'. ' (' . Departments::model()->count() . ')', 'url'=>'index.php?r=departments/admin'),
                array('label'=>'Manage User Assignments', 'url'=>'index.php?r='),
                '---',
                array('label'=>'Logout', 'url'=>'index.php?r=site/logout'),
            )),
        ),
    );
}else{
    $adminmenu=array();
}
$this->widget('bootstrap.widgets.TbNavbar',array(
    'items'=>array(
        array(
            'class'=>'bootstrap.widgets.TbMenu',
            'items'=>array(
                array('label'=>'Home', 'url'=>array('/site/index')),
                array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
                array('label'=>'Contact', 'url'=>array('/site/contact')),
                array('label'=>'Rating', 'url'=>array('/generalInfo/index')),
                array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
            ),
        ),
        $adminmenu,

    ),
)); ?>

<div class="container" id="page">

	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('bootstrap.widgets.TbBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
