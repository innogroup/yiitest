<?php
$this->breadcrumbs=array(
	'Invest Nationals'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List InvestNationals','url'=>array('index')),
	array('label'=>'Create InvestNationals','url'=>array('create')),
	array('label'=>'Update InvestNationals','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete InvestNationals','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage InvestNationals','url'=>array('admin')),
);
?>

<h1>View InvestNationals #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'national',
	),
)); ?>
