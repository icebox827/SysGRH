<?php

/**
 * This is the model class for table "dependant".
 *
 * The followings are the available columns in table 'dependant':
 * @property string $iddependant
 * @property string $nom
 * @property string $prenom
 * @property string $date_naissance
 * @property string $lien_parente
 * @property string $cin
 * @property string $nif
 * @property string $adresse
 * @property string $memo
 */
class Dependant extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'dependant';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nom, prenom, date_naissance, lien_parente, cin, nif, adresse, memo', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('iddependant, nom, prenom, date_naissance, lien_parente, cin, nif, adresse, memo', 'safe', 'on'=>'search'),
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
			'iddependant' => 'Iddependant',
			'nom' => 'Nom',
			'prenom' => 'Prenom',
			'date_naissance' => 'Date Naissance',
			'lien_parente' => 'Lien Parente',
			'cin' => 'Cin',
			'nif' => 'Nif',
			'adresse' => 'Adresse',
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

		$criteria->compare('iddependant',$this->iddependant,true);
		$criteria->compare('nom',$this->nom,true);
		$criteria->compare('prenom',$this->prenom,true);
		$criteria->compare('date_naissance',$this->date_naissance,true);
		$criteria->compare('lien_parente',$this->lien_parente,true);
		$criteria->compare('cin',$this->cin,true);
		$criteria->compare('nif',$this->nif,true);
		$criteria->compare('adresse',$this->adresse,true);
		$criteria->compare('memo',$this->memo,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Dependant the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
