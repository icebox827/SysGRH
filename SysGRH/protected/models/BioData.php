<?php

/**
 * This is the model class for table "bio_data".
 *
 * The followings are the available columns in table 'bio_data':
 * @property string $idbio_data
 * @property string $photo_face
 * @property string $photo_face_kepi
 * @property string $photo_profil_droit
 * @property string $photo_profil_gauche
 * @property string $index_droit
 * @property string $index_gauche
 * @property string $taille_cm
 * @property string $poids_lbs
 * @property string $groupe_sanguin
 */
class BioData extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'bio_data';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('taille_cm, poids_lbs', 'length', 'max'=>2),
			array('groupe_sanguin', 'length', 'max'=>45),
			array('photo_face, photo_face_kepi, photo_profil_droit, photo_profil_gauche, index_droit, index_gauche', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idbio_data, photo_face, photo_face_kepi, photo_profil_droit, photo_profil_gauche, index_droit, index_gauche, taille_cm, poids_lbs, groupe_sanguin', 'safe', 'on'=>'search'),
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
			'idbio_data' => 'Idbio Data',
			'photo_face' => 'Photo Face',
			'photo_face_kepi' => 'Photo Face Kepi',
			'photo_profil_droit' => 'Photo Profil Droit',
			'photo_profil_gauche' => 'Photo Profil Gauche',
			'index_droit' => 'Index Droit',
			'index_gauche' => 'Index Gauche',
			'taille_cm' => 'Taille Cm',
			'poids_lbs' => 'Poids Lbs',
			'groupe_sanguin' => 'Groupe Sanguin',
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

		$criteria->compare('idbio_data',$this->idbio_data,true);
		$criteria->compare('photo_face',$this->photo_face,true);
		$criteria->compare('photo_face_kepi',$this->photo_face_kepi,true);
		$criteria->compare('photo_profil_droit',$this->photo_profil_droit,true);
		$criteria->compare('photo_profil_gauche',$this->photo_profil_gauche,true);
		$criteria->compare('index_droit',$this->index_droit,true);
		$criteria->compare('index_gauche',$this->index_gauche,true);
		$criteria->compare('taille_cm',$this->taille_cm,true);
		$criteria->compare('poids_lbs',$this->poids_lbs,true);
		$criteria->compare('groupe_sanguin',$this->groupe_sanguin,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return BioData the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
