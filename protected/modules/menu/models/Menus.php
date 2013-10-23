<?php

/**
 * This is the model class for table "menus".
 *
 * The followings are the available columns in table 'menus':
 * @property integer $id
 * @property string $lang
 * @property string $title
 * @property integer $parent_id
 * @property string $url
 * @property integer $parent
 * @property integer $order
 * @property integer $actived
 */
class Menus extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Menus the static model class
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
		return 'menus';
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
			array('parent_id, parent, order, actived', 'numerical', 'integerOnly'=>true),
			array('lang', 'length', 'max'=>2),
			array('title', 'length', 'max'=>50),
			array('url', 'length', 'max'=>128),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, lang, title, parent_id, url, parent, order, actived', 'safe', 'on'=>'search'),
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
			'parents'=>array(self::BELONGS_TO, 'Menus', 'parent_id'),
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
			'title' => 'Tên',
			'parent_id' => 'Menu cha',
			'url' => 'Url',
			'parent' => 'Parent',
			'order' => 'Order',
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
		$criteria->compare('parent_id',$this->parent_id);
		$criteria->compare('url',$this->url,true);
		$criteria->compare('parent',$this->parent);
		$criteria->compare('order',$this->order);
		$criteria->compare('actived',$this->actived);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	public function getChildrenMenu($id)
	{   
		$items = Menus::model()->findAll(array('condition'=>'parent_id=:parent_id AND actived=1','params'=>array(':parent_id'=>$id)));
		if(sizeOf($items)>0){
			$out = array();
			foreach($items as $item){
				$childrens = $this->getChildrenMenu($item->id);
				$currow= array('url'=>array(array($item->url), 'label'=>$item->title));   
				if($childrens){   
					$currow= array('label'=>$item->title,'items'=>$childrens);
				}  
				$out[]=$currow;
			}
			return $out;
		}
		else{
			return null;
		}
	}

	public function getTreeMenu()
	{
		$roots = Menus::model()->findAll(array('condition'=>'id=1'));
		$out = array();
		foreach($roots as $item){
			$childrens = $this->getChildrenMenu($item->id);
			$currow= array('url'=>array(array($item->url), 'label'=>$item->title));
			if($childrens){   
				$currow= array('label'=>$item->title,'items'=>$childrens);
			}  
			$out[]=$currow;
		}
		return $out;
	}
}