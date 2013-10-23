<?php
$this->breadcrumbs=array(
	'Nhà đầu tư'=>array('admin'),
	'Thêm mới',
);
?>

<div class="alert alert-info">	
	<h4>Thêm mới nhà đầu tư</h4>		
</div>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>