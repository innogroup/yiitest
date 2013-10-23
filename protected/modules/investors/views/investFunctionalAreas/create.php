<?php
$this->breadcrumbs=array(
	'Khu chức năng'=>array('admin'),
	'Thêm mới',
);
?>

<div class="alert alert-info">	
	<h4>Thêm mới khu chức năng</h4>		
</div>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>