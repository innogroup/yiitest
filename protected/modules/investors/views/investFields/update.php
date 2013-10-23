<?php
$this->breadcrumbs=array(
	'Lĩnh vực đầu tư'=>array('admin'),
	$model->title=>array('view','id'=>$model->id),
	'Cập nhật',
);
?>

<div class="alert alert-info">	
	<h4>Cập nhật lĩnh vực đầu tư : <?php echo $model->title; ?></h4>		
</div>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>