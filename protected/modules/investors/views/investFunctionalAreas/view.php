<?php
$this->breadcrumbs=array(
	'Invest Functional Areases'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List InvestFunctionalAreas','url'=>array('index')),
	array('label'=>'Create InvestFunctionalAreas','url'=>array('create')),
	array('label'=>'Update InvestFunctionalAreas','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete InvestFunctionalAreas','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage InvestFunctionalAreas','url'=>array('admin')),
);
?>

<h1>View InvestFunctionalAreas #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'title',
		'title_en',
		'title_jp',
		'area',
		'map_path',
		'description',
	),
)); ?>
