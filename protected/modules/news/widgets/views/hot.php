<?php 
function neods($string,$len)
{
	if($len > strlen($string)){$len=strlen($string);};
	$pos = strpos($string, ' ', $len);
	if($pos){$string = substr($string,0,$pos);}else{$string = substr($string,0,$len);}    
	return $string;
}
?>
<?php 
	foreach($models as $model)
	{?>
		<div class="row">
			<div class="hot_image span4">
				<img src="<?php echo $model->future_image;?>" />
			</div>
			<div class="hot_content span4">
				<a href="<?php echo Yii::app()->createUrl('news/newsContents/view',array('id'=>$model->id));?>"><?php echo $model->title?></a>
				<p><?php echo neods($model->short_description,350)?></p>
			</div>
		</div>
	<?php }
?>
<div class="row">
<?php 
	foreach($news as $new)
	{?>
			<div class="hot_new span2">
				<a href="<?php echo Yii::app()->createUrl('news/newsContents/view',array('id'=>$new->id));?>">
					<img src="<?php echo $new->future_image;?>" />
					<?php echo neods($new->title,50)?>
				</a>
			</div>
		
	<?php }
?>
	</div>