<?php
$this->breadcrumbs=array(
	'Menuses',
);

$this->menu=array(
	array('label'=>'Create Menus','url'=>array('create')),
	array('label'=>'Manage Menus','url'=>array('admin')),
);
?>

<h1>Menuses</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
