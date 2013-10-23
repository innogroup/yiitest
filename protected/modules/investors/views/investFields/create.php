<?php
$this->breadcrumbs=array(
	'Lĩnh vực đầu tư'=>array('admin'),
	'Tạo mới',
);
?>

<div class="alert alert-info">	
	<h4>Thêm mới lĩnh vực đầu tư</h4>		
</div>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>