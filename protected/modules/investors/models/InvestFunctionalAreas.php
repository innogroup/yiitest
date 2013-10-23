<?php

/**
 * This is the model class for table "invest_functional_areas".
 *
 * The followings are the available columns in table 'invest_functional_areas':
 * @property integer $id
 * @property string $title
 * @property string $title_en
 * @property string $title_jp
 * @property double $area
 * @property string $map_path
 * @property string $description
 */
class InvestFunctionalAreas extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return InvestFunctionalAreas the static model class
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
		return 'invest_functional_areas';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('title, area', 'required'),
			array('area', 'numerical'),
			array('title, title_en, title_jp, map_path', 'length', 'max'=>128),
			//array('description', 'length', 'max'=>4000),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, title, title_en, title_jp, area, map_path, description', 'safe', 'on'=>'search'),
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
			'title' => 'Tiêu đề',
			'title_en' => 'Tiêu đề En',
			'title_jp' => 'Tiêu đề Jp',
			'area' => 'Diện tích (ha)',
			'map_path' => 'Bản đồ',
			'description' => 'Mô tả',
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
		$criteria->compare('title',$this->title,true);
		$criteria->compare('title_en',$this->title_en,true);
		$criteria->compare('title_jp',$this->title_jp,true);
		$criteria->compare('area',$this->area);
		$criteria->compare('map_path',$this->map_path,true);
		$criteria->compare('description',$this->description,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}