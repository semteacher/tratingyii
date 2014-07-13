<?php

/**
 * This is the model class for table "{{rating2teacher}}".
 *
 * The followings are the available columns in table '{{rating2teacher}}':
 * @property integer $id
 * @property integer $rating_id
 * @property integer $teacher_id
 * @property double $teach_rating
 * @property string $rating_date
 *
 * The followings are the available model relations:
 * @property Teachers $teacher
 * @property GeneralInfo $rating
 */
class Rating2teacher extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{rating2teacher}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('rating_id, teacher_id', 'required'),
			array('rating_id, teacher_id', 'numerical', 'integerOnly'=>true),
			array('teach_rating', 'numerical'),
			array('rating_date', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, rating_id, teacher_id, teach_rating, rating_date', 'safe', 'on'=>'search'),
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
			'teacher' => array(self::BELONGS_TO, 'Teachers', 'teacher_id'),
			'rating' => array(self::BELONGS_TO, 'GeneralInfo', 'rating_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'rating_id' => 'Rating',
			'teacher_id' => 'Teacher',
			'teach_rating' => 'Teach Rating',
			'rating_date' => 'Rating Date',
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
		$criteria->compare('rating_id',$this->rating_id);
		$criteria->compare('teacher_id',$this->teacher_id);
		$criteria->compare('teach_rating',$this->teach_rating);
		$criteria->compare('rating_date',$this->rating_date,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Rating2teacher the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
