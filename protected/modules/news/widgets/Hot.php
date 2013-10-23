<?php
 
class Hot extends CWidget
{
	
	public function init()
	{
	
	}
	
	public function run()
	{
		$lang = Yii::app()->language;
		$news = NewsContents::model()->findAll(array("limit"=>4,"condition"=>"hot = 1 and lang =:lang","params"=>array(":lang"=>$lang)));
		$models = NewsContents::model()->findAll(array("select"=>"*,rand() as rand","limit"=>1,"order" => "rand","condition"=>"hot = 1 and lang =:lang","params"=>array(":lang"=>$lang)));		
			$this->render("hot",array('models'=>$models,'news'=>$news));
	}
}?>
