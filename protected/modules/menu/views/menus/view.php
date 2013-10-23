<?php
$this->breadcrumbs=array(
	'Menuses'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List Menus','url'=>array('index')),
	array('label'=>'Create Menus','url'=>array('create')),
	array('label'=>'Update Menus','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete Menus','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Menus','url'=>array('admin')),
);
?>

<h1>View Menus #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'lang',
		'title',
		'parent_id',
		'url',
		'parent',
		'order',
		'actived',
	),
)); ?>
