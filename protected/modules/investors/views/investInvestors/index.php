<?php
$this->breadcrumbs=array(
	'Invest Investors',
);

$this->menu=array(
	array('label'=>'Create InvestInvestors','url'=>array('create')),
	array('label'=>'Manage InvestInvestors','url'=>array('admin')),
);
?>

<h1>Invest Investors</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
