<?php
$this->breadcrumbs=array(
	'Clips'=>array('admin'),
	'Tạo mới',
);

?>
<div class="alert alert-info">	
	<h4>Thêm mới Clip</h4>		
</div>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>