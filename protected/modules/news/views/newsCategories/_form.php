<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'news-categories-form',
	'type'=>'horizontal',
	'enableAjaxValidation'=>false,
)); ?>

	<?php
		$this->widget('bootstrap.widgets.TbAlert');
	?>
	<?php echo $form->errorSummary($model); ?>
	
	<?php echo $form->dropDownListRow($model,'lang', Yii::app()->params->languages,array(
				'ajax' => array(
				'type'=>'POST', 
				'url'=>CController::createUrl('newsCategories/categories'),
				'update'=>'#'.CHtml::activeId($model,'parent_id'), 
				))); 
	 ?>	
	 
	<?php $list = $model->isNewRecord? array(): CHtml::listData(NewsCategories::model()->findAll('lang=:lang',array(':lang'=>$model->lang)), 'id', 'title');
		echo $form->dropDownListRow($model,'parent_id',$list,array('empty' => 'Danh mục gốc')); ?>	

	<?php echo $form->textFieldRow($model,'title',array('class'=>'span5','maxlength'=>128)); ?>

	<?php echo $form->dropDownListRow($model,'actived',Lookup::items('Actived'),array('class'=>'span2')); ?>	

	<?php echo $form->dropDownListRow($model,'frontpage',Lookup::items('FrontPage'),array('class'=>'span2')); ?>	

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'type' => 'primary',
			'icon' => 'arrow-left white',
			'label' => 'Danh sách tin tức',
			'url' => array('newscategories/admin'),
		));
		?>
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Thêm mới' : 'Lưu thông tin',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
