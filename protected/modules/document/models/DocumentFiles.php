<?php

/**
 * This is the model class for table "document_files".
 *
 * The followings are the available columns in table 'document_files':
 * @property integer $id
 * @property string $lang
 * @property integer $category_id
 * @property string $document_no
 * @property string $title
 * @property string $date_of_issue
 * @property string $description
 * @property string $document_path
 * @property integer $actived
 */
class DocumentFiles extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return DocumentFiles the static model class
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
		return 'document_files';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('lang, category_id, title, actived', 'required'),
			array('category_id, actived', 'numerical', 'integerOnly'=>true),
			array('lang', 'length', 'max'=>2),
			array('document_no', 'length', 'max'=>50),
			array('title, document_path', 'length', 'max'=>128),
			array('description', 'length', 'max'=>4000),
			array('date_of_issue', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, lang, category_id, document_no, title, date_of_issue, description, document_path, actived', 'safe', 'on'=>'search'),
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
			'categories'=>array(self::BELONGS_TO, 'DocumentCategories', 'category_id'),
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
			'category_id' => 'Danh mục gốc',
			'document_no' => 'Số hiệu văn bản',
			'title' => 'Tên văn bản tài liệu',
			'date_of_issue' => 'Ngày ban hành',
			'document_path' => 'Đường dẫn văn bản tài liệu',
			'actived' => 'Trạng thái',
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
		$criteria->compare('lang',$this->lang,true);
		$criteria->compare('category_id',$this->category_id);
		$criteria->compare('document_no',$this->document_no,true);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('date_of_issue',$this->date_of_issue,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('document_path',$this->document_path,true);
		$criteria->compare('actived',$this->actived);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}