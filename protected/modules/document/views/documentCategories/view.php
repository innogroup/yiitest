<?php
$this->breadcrumbs=array(
	'Document Categories'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List DocumentCategories','url'=>array('index')),
	array('label'=>'Create DocumentCategories','url'=>array('create')),
	array('label'=>'Update DocumentCategories','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete DocumentCategories','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage DocumentCategories','url'=>array('admin')),
);
?>

<h1>View DocumentCategories #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'lang',
		'parent_id',
		'title',
		'description',
		'actived',
	),
)); ?>
