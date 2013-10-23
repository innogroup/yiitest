<?php
$this->breadcrumbs=array(
	'Albums'=>array('admin'),
	'Tạo mới',
);
?>

<div class="alert alert-info">	
	<h4>Tạo mới Album</h4>		
</div>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>