<?php

/**
 * This is the model class for table "{{departments}}".
 *
 * The followings are the available columns in table '{{departments}}':
 * @property integer $id
 * @property string $dep_name
 * @property string $dep_desc
 * @property integer $dep_type
 *
 * The followings are the available model relations:
 * @property Teachers2departments[] $teachers2departments
 */
class Departments extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{departments}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('dep_name', 'required'),
			array('dep_type', 'numerical', 'integerOnly'=>true),
			array('dep_name', 'length', 'max'=>100),
			array('dep_desc', 'length', 'max'=>300),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, dep_name, dep_desc, dep_type', 'safe', 'on'=>'search'),
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
			'teachers2departments' => array(self::HAS_MANY, 'Teachers2departments', 'dep_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'dep_name' => 'Dep Name',
			'dep_desc' => 'Dep Desc',
			'dep_type' => 'Dep Type',
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
		$criteria->compare('dep_name',$this->dep_name,true);
		$criteria->compare('dep_desc',$this->dep_desc,true);
		$criteria->compare('dep_type',$this->dep_type);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Departments the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
