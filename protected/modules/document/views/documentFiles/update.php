<?php
$this->breadcrumbs=array(
	'Văn bản'=>array('admin'),
	$model->title=>array('view','id'=>$model->id),
	'Cập nhật',
);
?>

<div class="alert alert-info">	
	<h4>Cập nhật văn bản : <?php echo $model->title; ?></h4>		
</div>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>