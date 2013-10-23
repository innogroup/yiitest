<?php
$this->breadcrumbs=array(
	'Nhóm tin tức'=>array('index'),
	'Tạo mới',
);
?>

<div class="alert alert-info">	
	<h4>Thêm mới nhóm tin</h4>		
</div>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>