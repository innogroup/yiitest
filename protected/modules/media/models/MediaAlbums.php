<?php

/**
 * This is the model class for table "media_albums".
 *
 * The followings are the available columns in table 'media_albums':
 * @property integer $id
 * @property string $lang
 * @property string $title
 * @property string $description
 * @property string $future_image
 * @property string $album_path
 * @property integer $actived
 */
class MediaAlbums extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return MediaAlbums the static model class
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
		return 'media_albums';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('lang, title, actived', 'required'),
			array('actived', 'numerical', 'integerOnly'=>true),
			array('lang', 'length', 'max'=>2),
			array('title, future_image, album_path', 'length', 'max'=>128),
			array('description', 'length', 'max'=>4000),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, lang, title, description, future_image, album_path, actived', 'safe', 'on'=>'search'),
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
			'lang' => 'Ngôn ngữ',
			'title' => 'Tiêu đề',
			'description' => 'Mô tả',
			'future_image' => 'Ảnh đại diện',
			'album_path' => 'Đường dẫn Album',
			'actived' => 'Trạng thái',
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
		$criteria->compare('lang',$this->lang,true);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('future_image',$this->future_image,true);
		$criteria->compare('album_path',$this->album_path,true);
		$criteria->compare('actived',$this->actived);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}