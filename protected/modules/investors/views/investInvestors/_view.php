<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name_en')); ?>:</b>
	<?php echo CHtml::encode($data->name_en); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name_jp')); ?>:</b>
	<?php echo CHtml::encode($data->name_jp); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('functional_area_id')); ?>:</b>
	<?php echo CHtml::encode($data->functional_area_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('national_id')); ?>:</b>
	<?php echo CHtml::encode($data->national_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('area')); ?>:</b>
	<?php echo CHtml::encode($data->area); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('logo_path')); ?>:</b>
	<?php echo CHtml::encode($data->logo_path); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('actived')); ?>:</b>
	<?php echo CHtml::encode($data->actived); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	*/ ?>

</div>