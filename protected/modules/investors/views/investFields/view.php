<?php
$this->breadcrumbs=array(
	'Invest Fields'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List InvestFields','url'=>array('index')),
	array('label'=>'Create InvestFields','url'=>array('create')),
	array('label'=>'Update InvestFields','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete InvestFields','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage InvestFields','url'=>array('admin')),
);
?>

<h1>View InvestFields #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'lang',
		'title',
	),
)); ?>
