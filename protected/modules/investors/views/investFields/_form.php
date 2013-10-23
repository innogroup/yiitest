<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'invest-fields-form',
	'type'=>'horizontal',
	'enableAjaxValidation'=>false,
)); ?>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->dropDownListRow($model,'lang', Yii::app()->params->languages); ?>	

	<?php echo $form->textFieldRow($model,'title',array('class'=>'span5','maxlength'=>128)); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'type' => 'primary',
			'icon' => 'arrow-left white',
			'label' => 'Danh sách lĩnh vực đầu tư',
			'url' => array('investFields/admin'),
		));
		?>
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Thêm mới' : 'Lưu thông tin',
		)); ?>
	</div>
<?php $this->endWidget(); ?>
