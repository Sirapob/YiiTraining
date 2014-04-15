<?php

/**
 * This is the model class for table "datetime".
 *
 * The followings are the available columns in table 'datetime':
 * @property integer $datetime_id
 * @property string $datetime1
 * @property string $datetime2
 * @property string $datetime3
 */
class Datetimetest extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'datetime';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('datetime_id', 'required'),
			array('datetime_id', 'numerical', 'integerOnly'=>true),
			array('datetime1, datetime2, datetime3', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('datetime_id, datetime1, datetime2, datetime3', 'safe', 'on'=>'search'),
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
			'datetime_id' => 'Datetime',
			'datetime1' => 'Datetime1',
			'datetime2' => 'Datetime2',
			'datetime3' => 'Datetime3',
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

		$criteria->compare('datetime_id',$this->datetime_id);
		$criteria->compare('datetime1',$this->datetime1,true);
		$criteria->compare('datetime2',$this->datetime2,true);
		$criteria->compare('datetime3',$this->datetime3,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Datetimetest the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
