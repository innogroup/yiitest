<?php
$this->breadcrumbs=array(
	'Document Files'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List DocumentFiles','url'=>array('index')),
	array('label'=>'Create DocumentFiles','url'=>array('create')),
	array('label'=>'Update DocumentFiles','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete DocumentFiles','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage DocumentFiles','url'=>array('admin')),
);
?>

<h1>View DocumentFiles #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'lang',
		'category_id',
		'document_no',
		'title',
		'date_of_issue',
		'description',
		'document_path',
		'actived',
	),
)); ?>
