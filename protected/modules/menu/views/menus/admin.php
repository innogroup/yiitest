<?php
$this->breadcrumbs=array(
	'Menu'=>array('admin'),
	'Quản lý',
);
?>

<div class="alert alert-info">	
	<h4>Quản lý Menu</h4>		
</div>

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'menus-grid',
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
			 'headerHtmlOptions'=>array('width'=>'150px'),
		),
		'title',
		array(
			'name'=>'parents.title',
			'type'=>'raw',	
			'header'=>'Menu cha',
			'headerHtmlOptions'=>array('width'=>'200'),
		),
		//'parent_id',
		'url',
		array(
			'name'=>'actived',	
			'value'=>'Lookup::item("actived",$data->actived)',         
			'filter'=>Lookup::items("actived"),
			'headerHtmlOptions'=>array('width'=>'100px'),
		),
		/*
		'order',
		
		*/
	),
)); ?>

<div class="form-actions">
	<?php
	//Show button back to list
		$this->widget('bootstrap.widgets.TbButton', array(
			'type'=>'primary',
			'icon'=>'plus white',
			'label'=>'Thêm mới menu',
			'url'=>array('/menu/menus/create'),
		));
	?>
</div>
