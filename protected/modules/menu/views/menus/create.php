<?php
$this->breadcrumbs=array(
	'Menu'=>array('admin'),
	'Thêm mới',
);

?>

<div class="alert alert-info">	
	<h4>Thêm mới menu</h4>		
</div>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>