<?php

/**
 * This is the model class for table "{{teachers2phd}}".
 *
 * The followings are the available columns in table '{{teachers2phd}}':
 * @property integer $id
 * @property integer $teacher_id
 * @property integer $phd_level
 * @property string $phd_since
 *
 * The followings are the available model relations:
 * @property Teachers2departments $teacher
 */
class Teachers2phd extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{teachers2phd}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('teacher_id', 'required'),
			array('teacher_id, phd_level', 'numerical', 'integerOnly'=>true),
			array('phd_since', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, teacher_id, phd_level, phd_since', 'safe', 'on'=>'search'),
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
			'teacher' => array(self::BELONGS_TO, 'Teachers2departments', 'teacher_id'),
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
			'phd_level' => 'Phd Level',
			'phd_since' => 'Phd Since',
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
		$criteria->compare('teacher_id',$this->teacher_id);
		$criteria->compare('phd_level',$this->phd_level);
		$criteria->compare('phd_since',$this->phd_since,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Teachers2phd the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
