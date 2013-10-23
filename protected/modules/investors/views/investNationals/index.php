<?php
$this->breadcrumbs=array(
	'Invest Nationals',
);

$this->menu=array(
	array('label'=>'Create InvestNationals','url'=>array('create')),
	array('label'=>'Manage InvestNationals','url'=>array('admin')),
);
?>

<h1>Invest Nationals</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
