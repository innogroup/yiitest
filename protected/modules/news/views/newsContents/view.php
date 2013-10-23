<?php
$this->breadcrumbs=array(
	'News Contents'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List NewsContents','url'=>array('index')),
	array('label'=>'Create NewsContents','url'=>array('create')),
	array('label'=>'Update NewsContents','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete NewsContents','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage NewsContents','url'=>array('admin')),
);
?>

<h1>View NewsContents #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'lang',
		'category_id',
		'title',
		'short_description',
		'content',
		'future_image',
		'sources',
		'hot',
		'actived',
	),
)); ?>
