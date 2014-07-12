<?php

/**
 * This is the model class for table "{{rating2indices}}".
 *
 * The followings are the available columns in table '{{rating2indices}}':
 * @property integer $id
 * @property integer $rating_id
 * @property integer $indices_id
 * @property integer $indices_topic_id
 * @property integer $indices_category_id
 * @property integer $acrive
 * @property double $weight
 * @property string $date_inc
 *
 * The followings are the available model relations:
 * @property GeneralInfo $rating
 * @property Indices $indices
 * @property Teacher2indicesValues[] $teacher2indicesValues
 */
class Rating2indices extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{rating2indices}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('rating_id, indices_id, indices_topic_id, indices_category_id', 'required'),
			array('rating_id, indices_id, indices_topic_id, indices_category_id, acrive', 'numerical', 'integerOnly'=>true),
			array('weight', 'numerical'),
			array('date_inc', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, rating_id, indices_id, indices_topic_id, indices_category_id, acrive, weight, date_inc', 'safe', 'on'=>'search'),
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
			'rating' => array(self::BELONGS_TO, 'GeneralInfo', 'rating_id'),
			'indices' => array(self::BELONGS_TO, 'Indices', 'indices_id'),
			'teacher2indicesValues' => array(self::HAS_MANY, 'Teacher2indicesValues', 'rating2indice_id'),
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
			'indices_id' => 'Indices',
			'indices_topic_id' => 'Indices Topic',
			'indices_category_id' => 'Indices Category',
			'acrive' => 'Acrive',
			'weight' => 'Weight',
			'date_inc' => 'Date Inc',
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
		$criteria->compare('indices_id',$this->indices_id);
		$criteria->compare('indices_topic_id',$this->indices_topic_id);
		$criteria->compare('indices_category_id',$this->indices_category_id);
		$criteria->compare('acrive',$this->acrive);
		$criteria->compare('weight',$this->weight);
		$criteria->compare('date_inc',$this->date_inc,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Rating2indices the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
