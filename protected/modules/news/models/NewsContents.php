<?php

/**
 * This is the model class for table "news_contents".
 *
 * The followings are the available columns in table 'news_contents':
 * @property string $id
 * @property string $lang
 * @property integer $category_id
 * @property string $title
 * @property string $short_description
 * @property string $content
 * @property string $future_image
 * @property string $sources
 * @property integer $hot
 * @property integer $actived
 */
class NewsContents extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return NewsContents the static model class
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
		return 'news_contents';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('lang, category_id, title, short_description, content', 'required'),
			array('category_id, hot, actived', 'numerical', 'integerOnly'=>true),
			array('lang', 'length', 'max'=>2),
			array('title, future_image, sources', 'length', 'max'=>128),
			array('short_description', 'length', 'max'=>4000),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, lang, category_id, title, short_description, content, future_image, sources, hot, actived', 'safe', 'on'=>'search'),
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
			   'category'=>array(self::BELONGS_TO, 'NewsCategories', 'category_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'lang' => Yii::t('main','Ngôn ngữ'),
			'category_id' => Yii::t('main','Danh mục'),
			'title' => Yii::t('main','Tiêu đề'),
			'short_description' => Yii::t('main','Mô tả'),
			'content' => Yii::t('main','Nội dung'),
			'future_image' => Yii::t('main','Hình ảnh'),
			'sources' => Yii::t('main','Nguồn'),
			'hot' => Yii::t('main','Tin nóng'),
			'actived' => Yii::t('main','Trạng thái'),
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

		$criteria->compare('id',$this->id,true);
		$criteria->compare('lang',$this->lang,true);
		$criteria->compare('category_id',$this->category_id);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('short_description',$this->short_description,true);
		$criteria->compare('content',$this->content,true);
		$criteria->compare('future_image',$this->future_image,true);
		$criteria->compare('sources',$this->sources,true);
		$criteria->compare('hot',$this->hot);
		$criteria->compare('actived',$this->actived);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}