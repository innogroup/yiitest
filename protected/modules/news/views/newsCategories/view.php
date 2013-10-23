<?php
$this->breadcrumbs=array(
	'News Categories'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List NewsCategories','url'=>array('index')),
	array('label'=>'Create NewsCategories','url'=>array('create')),
	array('label'=>'Update NewsCategories','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete NewsCategories','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage NewsCategories','url'=>array('admin')),
);
?>

<h1>View NewsCategories #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'lang',
		'parent_id',
		'title',
		'actived',
		'frontpage',
	),
)); ?>
