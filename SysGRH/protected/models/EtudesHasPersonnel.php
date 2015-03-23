<?php

/**
 * This is the model class for table "etudes_has_personnel".
 *
 * The followings are the available columns in table 'etudes_has_personnel':
 * @property string $etudes_idetude
 * @property string $personnel_idpersonnel
 */
class EtudesHasPersonnel extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'etudes_has_personnel';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('etudes_idetude, personnel_idpersonnel', 'required'),
			array('etudes_idetude, personnel_idpersonnel', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('etudes_idetude, personnel_idpersonnel', 'safe', 'on'=>'search'),
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
			'etudes_idetude' => 'Etudes Idetude',
			'personnel_idpersonnel' => 'Personnel Idpersonnel',
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

		$criteria->compare('etudes_idetude',$this->etudes_idetude,true);
		$criteria->compare('personnel_idpersonnel',$this->personnel_idpersonnel,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return EtudesHasPersonnel the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
