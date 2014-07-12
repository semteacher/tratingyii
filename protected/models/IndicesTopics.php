<?php

/**
 * This is the model class for table "{{indices_topics}}".
 *
 * The followings are the available columns in table '{{indices_topics}}':
 * @property integer $id
 * @property string $topic_name
 * @property string $topic_desc
 * @property double $topic_def_weight
 *
 * The followings are the available model relations:
 * @property Indices[] $indices
 */
class IndicesTopics extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{indices_topics}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('topic_name', 'required'),
			array('topic_def_weight', 'numerical'),
			array('topic_name', 'length', 'max'=>200),
			array('topic_desc', 'length', 'max'=>500),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, topic_name, topic_desc, topic_def_weight', 'safe', 'on'=>'search'),
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
			'indices' => array(self::HAS_MANY, 'Indices', 'topic_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'topic_name' => 'Topic Name',
			'topic_desc' => 'Topic Desc',
			'topic_def_weight' => 'Topic Def Weight',
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
		$criteria->compare('topic_name',$this->topic_name,true);
		$criteria->compare('topic_desc',$this->topic_desc,true);
		$criteria->compare('topic_def_weight',$this->topic_def_weight);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return IndicesTopics the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
