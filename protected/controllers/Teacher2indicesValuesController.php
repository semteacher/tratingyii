<?php

class Teacher2indicesValuesController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update','indicesvalues'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Teacher2indicesValues;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Teacher2indicesValues']))
		{
			$model->attributes=$_POST['Teacher2indicesValues'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Teacher2indicesValues']))
		{
			$model->attributes=$_POST['Teacher2indicesValues'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		if(Yii::app()->request->isPostRequest)
		{
			// we only allow deletion via POST request
			$this->loadModel($id)->delete();

			// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
			if(!isset($_GET['ajax']))
				$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
		}
		else
			throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Teacher2indicesValues');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Teacher2indicesValues('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Teacher2indicesValues']))
			$model->attributes=$_GET['Teacher2indicesValues'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

    public function actionIndicesValues()
    {
        $group = "A";
        if(!isset($_GET['ratingID'])){
            $ratingID = 0; //Child-gridview will have no records
        } else{
            $ratingID = $_GET['ratingID'];
        }

        $act = $_GET['act'];
        if($act=='teacherindicesvalues')
        {
            $group = "B";
            $teacherindicesvaluesAll = $_POST['yourvalues'];
            if(count($teacherindicesvaluesAll)>0)
            {
                foreach($teacherindicesvaluesAll as $indicesId=>$teacherindicesvalues)
                {
                    $model=Teacher2indicesValues::model()->find('(rating2indice_id=:indicesID)AND(teacher_id=:teacherID)',array(':indicesID'=>$indicesId,':teacherID'=>Yii::app()->user->id));
                    if (!$model){
                        $model=new Teacher2indicesValues;
                    }
                    $model->rating2indice_id = $indicesId;
                    $model->value = $teacherindicesvalues;
                    $model->teacher_id = Yii::app()->user->id; //kravec TODO: get teacher id form session
                    $model->setup_date = new CDbExpression('NOW()');
                    $model->save();
                }
            }
        }

        //$model=new Teacher2indicesValues;

        $ratingindicesmodel = new Rating2indices('searchByRating');
        $ratingindicesmodel->unsetAttributes();

       // $tmp_teachval=Teacher2indicesValues::model()->findAll('(ratingID=:ratingID)AND()', array(':ratingID'=>$ratingID));
        $tmp_ratingind=Rating2indices::model()->with('teacher2indicesValues')->findAll('(rating_id=:ratingID)AND(teacher_id=:teacherID)', array(':ratingID'=>$ratingID,':teacherID'=>3));
        foreach($tmp_ratingind as $key=>$tmpone_ratingind){
      //      $tmpone_ratingind
        }
        //$tmp_ratingind=Rating2indices::model()->with('teacher2indicesValues')->findAll('rating_id=:ratingID', array(':ratingID'=>$ratingID));

        //  $tmp_rating=GeneralInfo::model()->findByPk($ratingID);
      //  $tmp_ratind=$tmp_rating->attributes;

        if(isset($_GET['Rating2indices']))
            $ratingindicesmodel->attributes=$_GET['Rating2indices'];
        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if(isset($_POST['Teacher2indicesValues']))
        {
            $model->attributes=$_POST['Teacher2indicesValues'];
            if($model->save())
                $this->redirect(array('view','id'=>$model->id));
        }

        if ($group == "A"){
            $this->render('indicesvalues',array(
                //'model'=>$model,
                'ratingindicesmodel'=>$ratingindicesmodel,
                'ratingID'=>$ratingID,
            ));
        } else {
            echo $teacherindicesvaluesAll;
        }

    }
	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=Teacher2indicesValues::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='teacher2indices-values-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
