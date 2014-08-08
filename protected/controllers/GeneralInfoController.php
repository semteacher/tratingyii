<?php

class GeneralInfoController extends Controller
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
//				'users'=>array('@'),
                'users'=>array('admin'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('ratingindices','admin','delete'),
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
		$model=new GeneralInfo;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['GeneralInfo']))
		{
			$model->attributes=$_POST['GeneralInfo'];
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

		if(isset($_POST['GeneralInfo']))
		{
			$model->attributes=$_POST['GeneralInfo'];
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
		$dataProvider=new CActiveDataProvider('GeneralInfo');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new GeneralInfo('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['GeneralInfo']))
			$model->attributes=$_GET['GeneralInfo'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

    public function actionRatingIndices()
    {
        //setup master dataset
        $model=new GeneralInfo('search');
        $model->unsetAttributes();  // clear any default values
        if(isset($_GET['GeneralInfo']))
            $model->attributes=$_GET['GeneralInfo'];

        //chose mode of displaying
        if(!isset($_GET['ratingID'])){
            $group = "A";
            $ratingID = 0; //Child-gridview will have no records
        }
        else{
            $group = "B";
            $ratingID = $_GET['ratingID'];
        }

        if(isset($_POST['CheckData'])&&isset($_POST['ratingID'])){
            $group = "B";
            $checkdata=$_POST['CheckData'];
            $ratingID = $_POST['ratingID'][0];
            //var_dump($checkdata);
            //var_dump($RatingID[0]);
            foreach ($checkdata as $indiceID) {
                $tmp_indidce=Indices::model()->findByPk($indiceID);
                //var_dump($tmp_indidce);
                $tmp_model = new Rating2indices;
                $tmp_model->rating_id = $ratingID;
                $tmp_model->indices_id = $tmp_indidce->attributes[id];
                $tmp_model->indices_topic_id = $tmp_indidce->attributes[topic_id];
                $tmp_model->indices_category_id = $tmp_indidce->attributes[category_id];
                // $model->date_inc = today();
//var_dump($model);
                $tmp_model->save();
            }
        }

        //setup detail dataset - indices per current rating
        $indicesofrating_model = new Rating2indices('searchByRating');
        $indicesofrating_model->unsetAttributes();

        if(isset($_GET['Rating2indices']))
            $indicesofrating_model->attributes=$_GET['Rating2indices'];

        //TODO: list more available indices
        $moreindices_model = new Indices('searchNotInRating');
        $moreindices_model->unsetAttributes();
        if(isset($_GET['Indices']))
            $moreindices_model->attributes=$_GET['Indices'];

        //render the data
        if($group == "A") {
            $this->render('ratingindices',array(
                'model'=>$model,
                'indicesofrating_model'=>$indicesofrating_model,
                'moreindices_model'=>$moreindices_model,
                'ratingID' => $ratingID,
            ));
        } else {
            $this->renderPartial('_indicesbyrating', array(
                'indicesofrating_model'=>$indicesofrating_model,
                'moreindices_model'=>$moreindices_model,
                'ratingID' => $ratingID,
            ));
        }
    }

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return GeneralInfo the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=GeneralInfo::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param GeneralInfo $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='general-info-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
