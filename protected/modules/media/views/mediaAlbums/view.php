<?php
$this->breadcrumbs=array(
	'Media Albums'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List MediaAlbums','url'=>array('index')),
	array('label'=>'Create MediaAlbums','url'=>array('create')),
	array('label'=>'Update MediaAlbums','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete MediaAlbums','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage MediaAlbums','url'=>array('admin')),
);
?>

<h1>View MediaAlbums #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'lang',
		'title',
		'description',
		'future_image',
		'album_path',
		'actived',
	),
)); ?>
