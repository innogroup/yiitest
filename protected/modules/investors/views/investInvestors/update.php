<?php
$this->breadcrumbs=array(
	'Nhà đầu tư'=>array('admin'),
	$model->name=>array('view','id'=>$model->id),
	'Cập nhật',
);
?>

<div class="alert alert-info">	
	<h4>Cập nhật nhà đầu tư : <?php echo $model->name; ?></h4>		
</div>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>