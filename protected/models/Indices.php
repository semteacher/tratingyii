<?php

/**
 * This is the model class for table "{{indices}}".
 *
 * The followings are the available columns in table '{{indices}}':
 * @property integer $id
 * @property integer $topic_id
 * @property integer $category_id
 * @property string $indice_name
 * @property string $indice_desc
 * @property integer $datatype_id
 * @property double $indice_def_weight
 *
 * The followings are the available model relations:
 * @property IndicesCategories $category
 * @property IndicesTopics $topic
 * @property IndicesDatatypes $datatype
 * @property Rating2indices[] $rating2indices
 */
class Indices extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{indices}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('topic_id, category_id, indice_name, datatype_id', 'required'),
			array('indice_def_weight', 'numerical'),
            array('topic_id, category_id, datatype_id', 'numerical', 'integerOnly'=>true),
			array('indice_name', 'length', 'max'=>200),
			array('indice_desc', 'length', 'max'=>500),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, topic_id, category_id, indice_name, indice_desc, datatype_id, indice_def_weight', 'safe', 'on'=>'search'),
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
			'category' => array(self::BELONGS_TO, 'IndicesCategories', 'category_id'),
			'topic' => array(self::BELONGS_TO, 'IndicesTopics', 'topic_id'),
			'datatype' => array(self::BELONGS_TO, 'IndicesDatatypes', 'datatype_id'),
			'rating2indices' => array(self::HAS_MANY, 'Rating2indices', 'indices_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'topic_id' => 'Topic',
			'category_id' => 'Category',
			'indice_name' => 'Indice Name',
			'indice_desc' => 'Indice Desc',
			'datatype_id' => 'Datatype',
			'indice_def_weight' => 'Indice Def Weight',
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
		$criteria->compare('topic_id',$this->topic_id);
		$criteria->compare('category_id',$this->category_id);
		$criteria->compare('indice_name',$this->indice_name,true);
		$criteria->compare('indice_desc',$this->indice_desc,true);
		$criteria->compare('datatype_id',$this->datatype_id);
		$criteria->compare('indice_def_weight',$this->indice_def_weight);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

    public function searchNotInRating($ratingID)
    {
        //create list of the indices by the current rating
        $list_indices=Rating2indices::model()->findAll('rating_id=:rating_id',array(':rating_id'=>$ratingID));
        $list_indices_arr=array();
        foreach ($list_indices as $curr_indice){
            $list_indices_arr[]=$curr_indice->indices_id;
        }

        $criteria=new CDbCriteria;
        if ($ratingID>0){
            $criteria->addNotInCondition('t.id',$list_indices_arr);
        }else{
            $criteria->addInCondition('t.id',$list_indices_arr);
        }

        //$criteria->compare('t.id',$this->id);
        $criteria->compare('t.topic_id',$this->topic_id);
        $criteria->compare('t.category_id',$this->category_id);
        $criteria->compare('t.indice_name',$this->indice_name,true);

        return new CActiveDataProvider($this, array(
            'criteria'=>$criteria,
        ));
    }

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Indices the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
