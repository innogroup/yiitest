<?php
$this->breadcrumbs=array(
	'Clips'=>array('admin'),
	$model->title=>array('view','id'=>$model->id),
	'Cập nhật',
);
?>

<div class="alert alert-info">	
	<h4>Cập nhật Clip : <?php echo $model->title; ?></h4>		
</div>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>