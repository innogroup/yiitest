<?php
$this->breadcrumbs=array(
	'Quốc gia'=>array('admin'),
	'Tạo mới',
);
?>

<div class="alert alert-info">	
	<h4>Thêm mới quốc gia</h4>		
</div>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>