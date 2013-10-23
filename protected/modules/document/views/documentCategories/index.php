<?php
$this->breadcrumbs=array(
	'Document Categories',
);

$this->menu=array(
	array('label'=>'Create DocumentCategories','url'=>array('create')),
	array('label'=>'Manage DocumentCategories','url'=>array('admin')),
);
?>

<h1>Document Categories</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
