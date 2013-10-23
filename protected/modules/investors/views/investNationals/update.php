<?php
$this->breadcrumbs=array(
	'Quốc gia'=>array('admin'),
	$model->national=>array('view','id'=>$model->id),
	'Cập nhật',
);
?>

<div class="alert alert-info">	
	<h4>Cập nhật : <?php echo $model->national; ?></h4>		
</div>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>