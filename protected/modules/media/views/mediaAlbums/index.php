<?php
$this->breadcrumbs=array(
	'Media Albums',
);

$this->menu=array(
	array('label'=>'Create MediaAlbums','url'=>array('create')),
	array('label'=>'Manage MediaAlbums','url'=>array('admin')),
);
?>

<h1>Media Albums</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
