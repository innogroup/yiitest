<?php

/**
 * This is the model class for table "invest_investors".
 *
 * The followings are the available columns in table 'invest_investors':
 * @property integer $id
 * @property string $name
 * @property string $name_en
 * @property string $name_jp
 * @property integer $functional_area_id
 * @property integer $national_id
 * @property double $area
 * @property string $logo_path
 * @property integer $actived
 * @property string $description
 */
class InvestInvestors extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return InvestInvestors the static model class
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
		return 'invest_investors';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, functional_area_id, national_id, area', 'required'),
			array('functional_area_id, national_id, actived', 'numerical', 'integerOnly'=>true),
			array('area', 'numerical'),
			array('name, name_en, name_jp, logo_path', 'length', 'max'=>128),
			array('description', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, name, name_en, name_jp, functional_area_id, national_id, area, logo_path, actived, description', 'safe', 'on'=>'search'),
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
			 'functional'=>array(self::BELONGS_TO, 'InvestFunctionalAreas', 'functional_area_id'),
			 'national'=>array(self::BELONGS_TO, 'InvestNationals', 'national_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'name' => 'Tên nhà đầu tư',
			'name_en' => 'Tên Engligh',
			'name_jp' => 'Tên Japan',
			'functional_area_id' => 'Khu chức năng',
			'national_id' => 'Quốc gia',
			'area' => 'Diện tích sử dụng',
			'logo_path' => 'Logo',
			'actived' => 'Trạng thái',
			'description' => 'Giới thiệu',
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
		$criteria->compare('name_en',$this->name_en,true);
		$criteria->compare('name_jp',$this->name_jp,true);
		$criteria->compare('functional_area_id',$this->functional_area_id);
		$criteria->compare('national_id',$this->national_id);
		$criteria->compare('area',$this->area);
		$criteria->compare('logo_path',$this->logo_path,true);
		$criteria->compare('actived',$this->actived);
		$criteria->compare('description',$this->description,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}