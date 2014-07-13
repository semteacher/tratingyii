<?php

/**
 * This is the model class for table "{{general_info}}".
 *
 * The followings are the available columns in table '{{general_info}}':
 * @property integer $id
 * @property string $rating_name
 * @property string $rating_desc
 * @property string $ratingperiod_datestart
 * @property string $ratingperiod_dateend
 * @property string $submission_datestart
 * @property string $submission_dateend
 *
 * The followings are the available model relations:
 * @property Rating2indices[] $rating2indices
 */
class GeneralInfo extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{general_info}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ratingperiod_datestart, ratingperiod_dateend, submission_datestart, submission_dateend', 'required'),
			array('rating_name', 'length', 'max'=>100),
			array('rating_desc', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, rating_name, rating_desc, ratingperiod_datestart, ratingperiod_dateend, submission_datestart, submission_dateend', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'rating2indices' => array(self::HAS_MANY, 'Rating2indices', 'rating_id'),
            'rating2teacher' => array(self::HAS_MANY, 'Rating2teacher', 'rating_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'rating_name' => 'Rating Name',
			'rating_desc' => 'Rating Desc',
			'ratingperiod_datestart' => 'Ratingperiod Datestart',
			'ratingperiod_dateend' => 'Ratingperiod Dateend',
			'submission_datestart' => 'Submission Datestart',
			'submission_dateend' => 'Submission Dateend',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('rating_name',$this->rating_name,true);
		$criteria->compare('rating_desc',$this->rating_desc,true);
		$criteria->compare('ratingperiod_datestart',$this->ratingperiod_datestart,true);
		$criteria->compare('ratingperiod_dateend',$this->ratingperiod_dateend,true);
		$criteria->compare('submission_datestart',$this->submission_datestart,true);
		$criteria->compare('submission_dateend',$this->submission_dateend,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return GeneralInfo the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
