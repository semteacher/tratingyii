<?php

/**
 * This is the model class for table "{{teacher2indices_values}}".
 *
 * The followings are the available columns in table '{{teacher2indices_values}}':
 * @property string $id
 * @property integer $teacher_id
 * @property integer $rating2indice_id
 * @property string $value
 * @property string $setup_date
 *
 * The followings are the available model relations:
 * @property Teachers $teacher
 * @property Rating2indices $rating2indice
 */
class Teacher2indicesValues extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{teacher2indices_values}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('teacher_id, rating2indice_id, value, setup_date', 'required'),
			array('teacher_id, rating2indice_id', 'numerical', 'integerOnly'=>true),
			array('value', 'length', 'max'=>20),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, teacher_id, rating2indice_id, value, setup_date', 'safe', 'on'=>'search'),
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
			'rating2indice' => array(self::BELONGS_TO, 'Rating2indices', 'rating2indice_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'teacher_id' => 'Teacher',
			'rating2indice_id' => 'Rating2indice',
			'value' => 'Value',
			'setup_date' => 'Setup Date',
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

		$criteria->compare('id',$this->id,true);
		$criteria->compare('teacher_id',$this->teacher_id);
		$criteria->compare('rating2indice_id',$this->rating2indice_id);
		$criteria->compare('value',$this->value,true);
		$criteria->compare('setup_date',$this->setup_date,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Teacher2indicesValues the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
