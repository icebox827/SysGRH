<?php

/**
 * This is the model class for table "personnel".
 *
 * The followings are the available columns in table 'personnel':
 * @property string $idpersonnel
 * @property string $nom
 * @property string $prenom
 * @property string $date_naissance
 * @property string $lieu_naissance
 * @property string $sexe
 * @property string $etat_civil
 * @property string $cin
 * @property string $nif
 * @property string $num_passeport
 * @property string $matricule
 * @property string $adresse
 * @property string $adresse_anterieur
 * @property string $adresse_ref
 * @property integer $telephone_primaire
 * @property integer $telephone_secondaire
 * @property string $email_personnel
 * @property string $email_professionnel
 * @property string $autre_email
 * @property string $origine
 * @property string $entree_en_fonction
 * @property string $id_budgetaire
 * @property string $categorie
 *
 * The followings are the available model relations:
 * @property Etudes[] $etudes
 */
class Personnel extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'personnel';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('telephone_primaire, telephone_secondaire', 'numerical', 'integerOnly'=>true),
			array('nom, prenom, sexe, etat_civil, cin, nif, num_passeport, matricule, adresse, adresse_anterieur, adresse_ref, email_personnel, email_professionnel, autre_email, origine, id_budgetaire, categorie', 'length', 'max'=>45),
			array('date_naissance, lieu_naissance, entree_en_fonction', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idpersonnel, nom, prenom, date_naissance, lieu_naissance, sexe, etat_civil, cin, nif, num_passeport, matricule, adresse, adresse_anterieur, adresse_ref, telephone_primaire, telephone_secondaire, email_personnel, email_professionnel, autre_email, origine, entree_en_fonction, id_budgetaire, categorie', 'safe', 'on'=>'search'),
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
			'etudes' => array(self::MANY_MANY, 'Etudes', 'etudes_has_personnel(personnel_idpersonnel, etudes_idetude)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idpersonnel' => 'Idpersonnel',
			'nom' => 'Nom',
			'prenom' => 'Prenom',
			'date_naissance' => 'Date Naissance',
			'lieu_naissance' => 'Lieu Naissance',
			'sexe' => 'Sexe',
			'etat_civil' => 'Etat Civil',
			'cin' => 'Cin',
			'nif' => 'Nif',
			'num_passeport' => 'Num Passeport',
			'matricule' => 'Matricule',
			'adresse' => 'Adresse',
			'adresse_anterieur' => 'Adresse Anterieur',
			'adresse_ref' => 'Adresse Ref',
			'telephone_primaire' => 'Telephone Primaire',
			'telephone_secondaire' => 'Telephone Secondaire',
			'email_personnel' => 'Email Personnel',
			'email_professionnel' => 'Email Professionnel',
			'autre_email' => 'Autre Email',
			'origine' => 'Origine',
			'entree_en_fonction' => 'Entree En Fonction',
			'id_budgetaire' => 'Id Budgetaire',
			'categorie' => 'Categorie',
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

		$criteria->compare('idpersonnel',$this->idpersonnel,true);
		$criteria->compare('nom',$this->nom,true);
		$criteria->compare('prenom',$this->prenom,true);
		$criteria->compare('date_naissance',$this->date_naissance,true);
		$criteria->compare('lieu_naissance',$this->lieu_naissance,true);
		$criteria->compare('sexe',$this->sexe,true);
		$criteria->compare('etat_civil',$this->etat_civil,true);
		$criteria->compare('cin',$this->cin,true);
		$criteria->compare('nif',$this->nif,true);
		$criteria->compare('num_passeport',$this->num_passeport,true);
		$criteria->compare('matricule',$this->matricule,true);
		$criteria->compare('adresse',$this->adresse,true);
		$criteria->compare('adresse_anterieur',$this->adresse_anterieur,true);
		$criteria->compare('adresse_ref',$this->adresse_ref,true);
		$criteria->compare('telephone_primaire',$this->telephone_primaire);
		$criteria->compare('telephone_secondaire',$this->telephone_secondaire);
		$criteria->compare('email_personnel',$this->email_personnel,true);
		$criteria->compare('email_professionnel',$this->email_professionnel,true);
		$criteria->compare('autre_email',$this->autre_email,true);
		$criteria->compare('origine',$this->origine,true);
		$criteria->compare('entree_en_fonction',$this->entree_en_fonction,true);
		$criteria->compare('id_budgetaire',$this->id_budgetaire,true);
		$criteria->compare('categorie',$this->categorie,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Personnel the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
