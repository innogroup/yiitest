<?php
$this->breadcrumbs=array(
	'Nhà đầu tư'=>array('admin'),
	'Quản lý',
);

?>

<div class="alert alert-info">	
	<h4>Quản lý nhà đầu tư</h4>		
</div>

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'invest-investors-grid',
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
			'deleteConfirmation'=>"js:'Tin tức \"'+$(this).parent().parent().children(':nth-child(1)').text()+'\" sẽ bị xóa! Bạn có muốn tiếp tục?'",								
		),
		'name',
		'name_en',
		'name_jp',
		array(
			'name'=>'functional.title',
			'header'=>'Khu chức năng',
		),
		'national.national',
		/*
		'area',
		'logo_path',
		'actived',
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
			'label'=>'Thêm mới nhà đầu tư',
			'url'=>array('investInvestors/create'),
		));
	?>
</div>
