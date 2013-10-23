<?php
$this->breadcrumbs=array(
	'Tin tức'=>array('admin'),
	'Thêm mới',
);
?>

<div class="alert alert-info">	
	<h4>Thêm mới tin tức</h4>		
</div>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>