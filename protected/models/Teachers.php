<?php

/**
 * This is the model class for table "{{teachers}}".
 *
 * The followings are the available columns in table '{{teachers}}':
 * @property integer $id
 * @property string $fname
 * @property string $lname
 * @property string $tdmu_login
 * @property string $tdmu_pass
 * @property string $tdmu_id
 * @property string $google_email
 * @property string $google_link
 * @property string $google_photo
 * @property string $google_id
 *
 * The followings are the available model relations:
 * @property Teacher2indicesValues[] $teacher2indicesValues
 * @property Teachers2departments[] $teachers2departments
 */
class Teachers extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{teachers}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
            array('fname, lname, google_email', 'required'),
			//array('google_email', 'numerical', 'integerOnly'=>true),
			array('fname, lname, tdmu_login, tdmu_id, google_id, google_email', 'length', 'max'=>20),
			array('tdmu_pass', 'length', 'max'=>100),
			array('google_link, google_photo', 'length', 'max'=>150),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, fname, lname, tdmu_login, tdmu_pass, tdmu_id, google_email, google_link, google_photo, google_id', 'safe', 'on'=>'search'),
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
			'teacher2indicesValues' => array(self::HAS_MANY, 'Teacher2indicesValues', 'teacher_id'),
			'teachers2departments' => array(self::HAS_MANY, 'Teachers2departments', 'teacher_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'fname' => 'Fname',
			'lname' => 'Lname',
			'tdmu_login' => 'Tdmu Login',
			'tdmu_pass' => 'Tdmu Pass',
			'tdmu_id' => 'Tdmu',
			'google_email' => 'Google Email',
			'google_link' => 'Google Link',
			'google_photo' => 'Google Photo',
			'google_id' => 'Google',
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
		$criteria->compare('fname',$this->fname,true);
		$criteria->compare('lname',$this->lname,true);
		$criteria->compare('tdmu_login',$this->tdmu_login,true);
		$criteria->compare('tdmu_pass',$this->tdmu_pass,true);
		$criteria->compare('tdmu_id',$this->tdmu_id,true);
		$criteria->compare('google_email',$this->google_email);
		$criteria->compare('google_link',$this->google_link,true);
		$criteria->compare('google_photo',$this->google_photo,true);
		$criteria->compare('google_id',$this->google_id,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

    public function save()
    {
        //$this->tdmu_pass = crypt($this->tdmu_pass);
        $this->tdmu_pass = CPasswordHelper::hashPassword($this->tdmu_pass);

        return parent::save();
    }

    public function validatePassword($password)
    {
        return CPasswordHelper::verifyPassword($password,$this->tdmu_pass);
    }
	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Teachers the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
