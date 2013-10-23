<?php
$this->breadcrumbs=array(
	'Khu chức năng'=>array('admin'),
	'Quản lý',
);
?>

<div class="alert alert-info">	
	<h4>Quản lý khu chức năng</h4>		
</div>

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'invest-functional-areas-grid',
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
			'deleteConfirmation'=>"js:'Tin tức \"'+$(this).parent().parent().children(':nth-child(3)').text()+'\" sẽ bị xóa! Bạn có muốn tiếp tục?'",								
		),
		'title',
		array(
			'header'=>'Diện tích (ha)',
			'name'=>'area',
			'headerHtmlOptions'=>array('width'=>'150px'),
		),
		/*
		'description',
		*/
	),
)); ?>
<div class="form-actions">
	<?php
	//Show button back to list
		$this->widget('bootstrap.widgets.TbButton', array(
			'type'=>'primary',
			'icon'=>'plus white',
			'label'=>'Thêm mới khu chức năng',
			'url'=>array('/investors/investFunctionalAreas/create'),
		));
	?>
</div>
