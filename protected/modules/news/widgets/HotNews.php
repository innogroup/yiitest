<?php
 
class HotNews extends CWidget
{
	
	public function init()
	{
	
	}
	
	public function run()
	{
		$models = NewsContents::model()->findAll(array("order" => "id DESC","condition"=>"hot = 1"));		
			$this->render("hotnews",array('models'=>$models));
	}
}?>
