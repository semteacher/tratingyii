<?php

/**
 * This is the model class for table "{{indices_categories}}".
 *
 * The followings are the available columns in table '{{indices_categories}}':
 * @property integer $id
 * @property string $category_name
 * @property string $category_desc
 * @property double $category_def_weight
 *
 * The followings are the available model relations:
 * @property Indices[] $indices
 */
class IndicesCategories extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{indices_categories}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('category_name', 'required'),
			array('category_def_weight', 'numerical'),
			array('category_name', 'length', 'max'=>200),
			array('category_desc', 'length', 'max'=>500),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, category_name, category_desc, category_def_weight', 'safe', 'on'=>'search'),
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
			'indices' => array(self::HAS_MANY, 'Indices', 'category_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'category_name' => 'Category Name',
			'category_desc' => 'Category Desc',
			'category_def_weight' => 'Category Def Weight',
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
		$criteria->compare('category_name',$this->category_name,true);
		$criteria->compare('category_desc',$this->category_desc,true);
		$criteria->compare('category_def_weight',$this->category_def_weight);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return IndicesCategories the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
