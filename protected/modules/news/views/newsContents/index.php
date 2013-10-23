<?php
$this->breadcrumbs=array(
	'News Contents',
);

$this->menu=array(
	array('label'=>'Create NewsContents','url'=>array('create')),
	array('label'=>'Manage NewsContents','url'=>array('admin')),
);
?>

<h1>News Contents</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
