<?php
$this->breadcrumbs=array(
	'Invest Investors'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List InvestInvestors','url'=>array('index')),
	array('label'=>'Create InvestInvestors','url'=>array('create')),
	array('label'=>'Update InvestInvestors','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete InvestInvestors','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage InvestInvestors','url'=>array('admin')),
);
?>

<h1>View InvestInvestors #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'name_en',
		'name_jp',
		'functional_area_id',
		'national_id',
		'area',
		'logo_path',
		'actived',
		'description',
	),
)); ?>
