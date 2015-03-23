<?php

/**
 * This is the model class for table "personnel_etudes".
 *
 * The followings are the available columns in table 'personnel_etudes':
 * @property string $niveau
 * @property string $niveau_obtenu
 * @property string $etablissement
 * @property string $date_debut
 * @property string $date_fin
 * @property string $memo
 */
class PersonnelEtudes extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'personnel_etudes';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('niveau, niveau_obtenu, etablissement, memo', 'length', 'max'=>45),
			array('date_debut, date_fin', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('niveau, niveau_obtenu, etablissement, date_debut, date_fin, memo', 'safe', 'on'=>'search'),
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
			'niveau' => 'Niveau',
			'niveau_obtenu' => 'Niveau Obtenu',
			'etablissement' => 'Etablissement',
			'date_debut' => 'Date Debut',
			'date_fin' => 'Date Fin',
			'memo' => 'Memo',
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

		$criteria->compare('niveau',$this->niveau,true);
		$criteria->compare('niveau_obtenu',$this->niveau_obtenu,true);
		$criteria->compare('etablissement',$this->etablissement,true);
		$criteria->compare('date_debut',$this->date_debut,true);
		$criteria->compare('date_fin',$this->date_fin,true);
		$criteria->compare('memo',$this->memo,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return PersonnelEtudes the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
