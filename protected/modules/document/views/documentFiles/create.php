<?php
$this->breadcrumbs=array(
	'Văn bản'=>array('admin'),
	'Thêm mới',
);
?>

<div class="alert alert-info">	
	<h4>Thêm mới văn bản</h4>		
</div>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>