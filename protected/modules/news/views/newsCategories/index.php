<?php
$this->breadcrumbs=array(
	'News Categories',
);

$this->menu=array(
	array('label'=>'Create NewsCategories','url'=>array('create')),
	array('label'=>'Manage NewsCategories','url'=>array('admin')),
);
?>

<h1>News Categories</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
