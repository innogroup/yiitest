<?php
$this->breadcrumbs=array(
	'Document Files',
);

$this->menu=array(
	array('label'=>'Create DocumentFiles','url'=>array('create')),
	array('label'=>'Manage DocumentFiles','url'=>array('admin')),
);
?>

<h1>Document Files</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
