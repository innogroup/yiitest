<?php
$this->breadcrumbs=array(
	'Invest Functional Areases',
);

$this->menu=array(
	array('label'=>'Create InvestFunctionalAreas','url'=>array('create')),
	array('label'=>'Manage InvestFunctionalAreas','url'=>array('admin')),
);
?>

<h1>Invest Functional Areases</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
