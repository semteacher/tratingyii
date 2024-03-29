<?php

class Rating2indicesController extends Controller
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
			'postOnly + delete', // we only allow deletion via POST request
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
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('masscreate','bulkcreate','admin','delete'),
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
		$model=new Rating2indices;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Rating2indices']))
		{
			$model->attributes=$_POST['Rating2indices'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

    /**
     * Bulk Creates a new models.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionBulkCreate()
    {
        $rating_model=new GeneralInfo('search');
        $rating_model->unsetAttributes();  // clear any default values
        if(isset($_GET['GeneralInfo']))
            $rating_model->attributes=$_GET['GeneralInfo'];

        $indices_model=new Indices('search');
        $indices_model->unsetAttributes();  // clear any default values
        if(isset($_GET['Indices']))
            $indices_model->attributes=$_GET['Indices'];

        if(!isset($_GET['RatingID'])) {
            $RatingID = 1;//TODO: get first real ratingid
            $group = "A";
        } else {
            $RatingID = $_GET['RatingID'];
            $group = "B";
        }

        if(isset($_POST['CheckData']))
        {
            $checkdata=$_POST['CheckData'];
            if(isset($_POST['RatingID'])) {
                $RatingID = $_POST['RatingID'];
            } else{
                $RatingID = array(1);//TODO: get first real ratingid
            }
            Rating2indices::model()->deleteAllByAttributes(array('rating_id'=>$RatingID[0]));//TODO: need check and update
            //var_dump($checkdata);
            //var_dump($RatingID[0]);
            foreach ($checkdata as $indiceID) {
                $tmp_indidce=$indices_model->findByPk($indiceID);
                //var_dump($tmp_indidce);
                $model = new Rating2indices;
                $model->rating_id = $RatingID[0];
                $model->indices_id = $tmp_indidce->attributes[id];
                $model->indices_topic_id = $tmp_indidce->attributes[topic_id];
                $model->indices_category_id = $tmp_indidce->attributes[category_id];
               // $model->date_inc = today();
//var_dump($model);
                $model->save();
            }
            if(Yii::app()->request->isAjaxRequest){
                echo 'success';
                Yii::app()->end();
            }
            //           if($model->save())
            //               $this->redirect(array('view','id'=>$model->id));
        }

        $model=new Rating2indices('search');
        $model->unsetAttributes();  // clear any default values
        $resp=$model->findAllByAttributes(array('rating_id'=>$RatingID));
        $checkarr = array();
        foreach ($resp as $rat2inddata){
            $checkarr[] = $rat2inddata->attributes[indices_id];
        }
        $respjson = CJSON::encode($checkarr);
        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if(isset($_POST['Rating2indices']))
        {
            $model=new Rating2indices('');
            $model->attributes=$_POST['Rating2indices'];
            if($model->save())
                $this->redirect(array('view','id'=>$model->id));
        }



        if($group == "A"){
        $this->render('bulkcreate',array(
            'model'=>$model,
            'rating_model'=>$rating_model,
            'indices_model'=>$indices_model,
        ));
        }else{
            //TODO: send json response
           // var_dump($checkarr);
            echo $respjson;

        }
    }

    public function actionMassCreate()
    {
        $rating_model=new GeneralInfo('search');
        $rating_model->unsetAttributes();  // clear any default values
        if(isset($_GET['GeneralInfo']))
            $rating_model->attributes=$_GET['GeneralInfo'];

        $indices_model=new Indices('search');
        $indices_model->unsetAttributes();  // clear any default values
        if(isset($_GET['Indices']))
            $indices_model->attributes=$_GET['Indices'];

        $model=new Rating2indices('search');
        $model->unsetAttributes();  // clear any default values
        if(isset($_GET['Rating2indices']))
            $model->attributes=$_GET['Rating2indices'];

        if(!isset($_GET['RatingID'])) {
            $RatingID = 1;//TODO: get first real ratingid
            $group = "A";
        } else {
            $RatingID = $_GET['RatingID'];
            $group = "B";
        }

        if($group == "A"){
            $this->render('masscreate',array(
                'model'=>$model,
                'rating_model'=>$rating_model,
                'indices_model'=>$indices_model,
            ));
        }else{
            //TODO: send json response
            //var_dump($checkarr);
            //return $checkarr;

        }
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

		if(isset($_POST['Rating2indices']))
		{
			$model->attributes=$_POST['Rating2indices'];
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
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Rating2indices');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Rating2indices('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Rating2indices']))
			$model->attributes=$_GET['Rating2indices'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Rating2indices the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Rating2indices::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Rating2indices $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='rating2indices-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
