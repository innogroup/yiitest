<?php
$this->breadcrumbs=array(
	'Nhóm tin tức'=>array('admin'),
	'Quản lý',
);
?>

<div class="alert alert-info">	
	<h4>Quản lý nhóm tin</h4>		
</div>

<?php
	$this->widget('bootstrap.widgets.TbAlert');
?>
	
<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'news-categories-grid',
	'dataProvider'=>$model->search(),
	'template' => "{items}{pager}{summary}",
	'filter'=>$model,
	'columns'=>array(
		array(
			'header'=>'Stt',
			'value'=>'$row+1',       //  row is zero based
			'headerHtmlOptions'=>array('width'=>'5px'),
			'filter'=>CHtml::activeTextField($model, 'id', array('id'=>false,'style'=>'display:none')),
        ),
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',			
			'template'=>'{update}{delete}',			
			'deleteConfirmation'=>"js:'Tin tức \"'+$(this).parent().parent().children(':nth-child(4)').text()+'\" sẽ bị xóa! Bạn có muốn tiếp tục?'",								
		),
		array(
			 'name'=>'lang',			         
			 'value'=>'Yii::app()->params->languages[$data->lang]',         
			 'filter'=>Yii::app()->params->languages,
			 'headerHtmlOptions'=>array('width'=>'120'),
		),
		'title',
		array(
			'name'=>'actived',	
			'value'=>'Lookup::item("actived",$data->actived)',         
			'filter'=>Lookup::items("actived"),
			'headerHtmlOptions'=>array('width'=>'120'),
		),
		array(
			'name'=>'frontpage',	
			'value'=>'Lookup::item("frontpage",$data->frontpage)',         
			'filter'=>Lookup::items("frontpage"),
			'headerHtmlOptions'=>array('width'=>'160'),
		),
	),
)); ?>

<div class="form-actions">
	<?php
	//Show button back to list
		$this->widget('bootstrap.widgets.TbButton', array(
			'type'=>'primary',
			'icon'=>'plus white',
			'label'=>'Thêm mới nhóm tin',
			'url'=>array('newscategories/create'),
		));
	?>
</div>
