<?php
$this->breadcrumbs=array(
	'Nhóm văn bản'=>array('admin'),
	'Tạo mới',
);
?>

<div class="alert alert-info">	
	<h4>Thêm mới nhóm văn bản</h4>		
</div>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>