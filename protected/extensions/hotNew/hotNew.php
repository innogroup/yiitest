<?php
function neods($string,$len)
{
	if($len > strlen($string)){$len=strlen($string);};
	$pos = strpos($string, ' ', $len);
	if($pos){$string = substr($string,0,$pos);}else{$string = substr($string,0,$len);}    
	return $string;
}
class hotNew extends CWidget {
	
	
	public function init()
	{
	
	}
	
//
	public function run()
	{
		$hotnews = NewsContents::model()->findAll(array("order" => "id DESC","condition"=>"hot = 1"));
	?>
	<script>
	$(document).ready(function() {		
		slideShow();
	});

	function slideShow() {
		$('#gallery a').css({opacity: 0.0});
		$('#gallery a:first').css({opacity: 1.0});
		$('#gallery .caption').css({opacity: 0.7});
		$('#gallery .caption').css({width: $('#gallery a').find('img').css('width')});
		$('#gallery .content').html($('#gallery a:first').find('img').attr('rel'))
		.animate({opacity: 0.7}, 400);
		setInterval('gallery()',6000);
	}

	function gallery() {
		var current = ($('#gallery a.show')?  $('#gallery a.show') : $('#gallery a:first'));
		var next = ((current.next().length) ? ((current.next().hasClass('caption'))? $('#gallery a:first') :current.next()) : $('#gallery a:first'));	
		var caption = next.find('img').attr('rel');	
		next.css({opacity: 0.0})
		.addClass('show')
		.animate({opacity: 1.0}, 1000);
		current.animate({opacity: 0.0}, 1000)
		.removeClass('show');
		$('#gallery .caption').animate({opacity: 0.0}, { queue:false, duration:0 }).animate({height: '1px'}, { queue:true, duration:300 });	
		$('#gallery .caption').animate({opacity: 0.7},100 ).animate({height: '50px'},500 );
		$('#gallery .content').html(caption);	
	}
	</script>
	<div id="gallery">
		<?php foreach($hotnews as $hotnew){?>
		<a href="<?php echo Yii::app()->createUrl('news/tinTuc/view',array('id'=>$hotnew->id))?>" class="show">
			<img src="<?php echo $hotnew->future_image; ?>" alt="Flowing Rock" width="770" height="300" title="" alt="" rel="<h3><?php echo neods($hotnew->title,50)?></h3>"/>
		</a>
		<?php }?>
		<div class="caption"><div class="content"></div></div>
	</div>
	<?php }	
}?>


