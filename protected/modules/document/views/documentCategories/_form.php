<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'document-categories-form',
	'type'=>'horizontal',
	'enableAjaxValidation'=>false,
)); ?>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->dropDownListRow($model,'lang', Yii::app()->params->languages,array(
				'ajax' => array(
				'type'=>'POST', 
				'url'=>CController::createUrl('documentCategories/document'),
				'update'=>'#'.CHtml::activeId($model,'parent_id'), 
				))); 
	 ?>	
	<?php $list = $model->isNewRecord? array(): CHtml::listData(DocumentCategories::model()->findAll('lang=:lang',array(':lang'=>$model->lang)), 'id', 'title');
		echo $form->dropDownListRow($model,'parent_id',$list,array('empty' => 'Danh mục gốc')); ?>	

	<?php echo $form->textFieldRow($model,'title',array('class'=>'span5','maxlength'=>128)); ?>

	<?php echo $form->textFieldRow($model,'description',array('class'=>'span5','maxlength'=>4000)); ?>

	<?php echo $form->dropDownListRow($model,'actived',Lookup::items('Actived')); ?>	

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'type' => 'primary',
			'icon' => 'arrow-left white',
			'label' => 'Danh sách nhóm văn bản',
			'url' => array('documentCategories/admin'),
		));
		?>
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Thêm mới' : 'Cập nhật',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
