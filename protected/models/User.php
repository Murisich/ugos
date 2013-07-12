<?php

/**
 * This is the model class for table "{{_users}}".
 *
 * The followings are the available columns in table '{{_users}}':
 * @property integer $id
 * @property string $name
 * @property string $surname
 * @property string $email
 * @property string $password
 * @property string $birthday
 * @property integer $sex
 * @property string $country
 * @property string $city
 * @property string $mobtel
 */
class User extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return User the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{_users}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, surname, email, password, birthday, sex', 'required'),
			array('sex', 'numerical', 'integerOnly'=>true),
			array('name, surname', 'length', 'max'=>20),
			array('email, password, country, city, mobtel', 'length', 'max'=>128),
			array('id, name, surname, email, password, birthday, sex, country, city, mobtel', 'safe', 'on'=>'search'),
			array('email', 'email'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'name' => 'Имя',
			'surname' => 'Фамилия',
			'email' => 'Почта',
			'password' => 'Пароль',
			'birthday' => 'День рождения',
			'sex' => 'Пол',
			'country' => 'Страна',
			'city' => 'Город',
			'mobtel' => 'Мобильный телефон',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('surname',$this->surname,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('birthday',$this->birthday,true);
		$criteria->compare('sex',$this->sex);
		$criteria->compare('country',$this->country,true);
		$criteria->compare('city',$this->city,true);
		$criteria->compare('mobtel',$this->mobtel,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public function beforeSave()
	{
		$this->password = md5('ugos'.$this->password);
		return parent::beforeSave();
	}
}