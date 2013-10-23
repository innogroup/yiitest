<?php
$this->breadcrumbs=array(
	'Media Clips'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List MediaClips','url'=>array('index')),
	array('label'=>'Create MediaClips','url'=>array('create')),
	array('label'=>'Update MediaClips','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete MediaClips','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage MediaClips','url'=>array('admin')),
);
?>

<h1>View MediaClips #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'lang',
		'title',
		'future_image',
		'description',
		'clip_path',
		'actived',
	),
)); ?>
