<div class="menu1">
	 <ul id="topnav">
		<?php foreach($models as $model){?>
			<li><a href="<?php echo Yii::app()->createUrl($model->url);?>"><?php echo $model->title?></a>
				<?php $items = Menus::model()->findAll(array('condition'=>'lang=:lang and parent_id=:id','params'=>array(':lang'=>$lang,':id'=>$model->id)));?>
				<?php if($items){?>
				<span>
				<div class="m_sub">
					<?php foreach($items as $item)
					{?>
						<a href="<?php echo Yii::app()->createUrl($item->url);?>"><?php echo $item->title;?></a>|
					<?php }?>
                </div>
				</span>
				<?php }?>
			</li>
		<?php }?>
	</ul>
</div>