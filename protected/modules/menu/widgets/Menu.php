<?php
class Menu extends CWidget {
	
	
	public function init()
	{
		
	}
	
//
	public function run()
	{
		$lang = Yii::app()->language;
		$models = Menus::model()->findAll(array('condition'=>'lang=:lang and parent_id=:id','params'=>array(':lang'=>$lang,':id'=>1)));		
		$this->render("menu",array('models'=>$models,'lang'=>$lang));
	}
}
?>

