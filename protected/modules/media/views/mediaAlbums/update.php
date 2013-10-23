<?php
$this->breadcrumbs=array(
	'Media Albums'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List MediaAlbums','url'=>array('index')),
	array('label'=>'Create MediaAlbums','url'=>array('create')),
	array('label'=>'View MediaAlbums','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage MediaAlbums','url'=>array('admin')),
);
?>

<h1>Update MediaAlbums <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>