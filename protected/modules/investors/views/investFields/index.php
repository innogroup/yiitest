<?php
$this->breadcrumbs=array(
	'Invest Fields',
);

$this->menu=array(
	array('label'=>'Create InvestFields','url'=>array('create')),
	array('label'=>'Manage InvestFields','url'=>array('admin')),
);
?>

<h1>Invest Fields</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
