<?php
$this->breadcrumbs=array(
	'Media Clips',
);

$this->menu=array(
	array('label'=>'Create MediaClips','url'=>array('create')),
	array('label'=>'Manage MediaClips','url'=>array('admin')),
);
?>

<h1>Media Clips</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
