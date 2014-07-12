<?php

/**
 * This is the model class for table "{{teachers2departments}}".
 *
 * The followings are the available columns in table '{{teachers2departments}}':
 * @property integer $id
 * @property integer $dep_id
 * @property integer $teacher_id
 * @property string $assigned
 * @property string $released
 * @property integer $dep_role_id
 * @property integer $is_chief
 * @property integer $is_admin
 *
 * The followings are the available model relations:
 * @property Departments $dep
 * @property Teachers $teacher
 * @property Teachers2phd[] $teachers2phds
 */
class Teachers2departments extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{teachers2departments}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('dep_id, teacher_id', 'required'),
			array('dep_id, teacher_id, dep_role_id, is_chief, is_admin', 'numerical', 'integerOnly'=>true),
			array('assigned, released', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, dep_id, teacher_id, assigned, released, dep_role_id, is_chief, is_admin', 'safe', 'on'=>'search'),
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
			'dep' => array(self::BELONGS_TO, 'Departments', 'dep_id'),
			'teacher' => array(self::BELONGS_TO, 'Teachers', 'teacher_id'),
			'teachers2phds' => array(self::HAS_MANY, 'Teachers2phd', 'teacher_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'dep_id' => 'Dep',
			'teacher_id' => 'Teacher',
			'assigned' => 'Assigned',
			'released' => 'Released',
			'dep_role_id' => 'Dep Role',
			'is_chief' => 'Is Chief',
			'is_admin' => 'Is Admin',
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
		$criteria->compare('dep_id',$this->dep_id);
		$criteria->compare('teacher_id',$this->teacher_id);
		$criteria->compare('assigned',$this->assigned,true);
		$criteria->compare('released',$this->released,true);
		$criteria->compare('dep_role_id',$this->dep_role_id);
		$criteria->compare('is_chief',$this->is_chief);
		$criteria->compare('is_admin',$this->is_admin);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Teachers2departments the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
