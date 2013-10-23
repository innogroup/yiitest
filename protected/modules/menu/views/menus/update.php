<?php
$this->breadcrumbs=array(
	'Menu'=>array('admin'),
	$model->title,
	'Cập nhật',
);
?>

<h1>Update Menus <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>