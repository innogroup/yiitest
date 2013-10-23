<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'document-files-form',
	'type'=>'horizontal',
	'enableAjaxValidation'=>false,
)); ?>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->dropDownListRow($model,'lang', Yii::app()->params->languages,array(
				'ajax' => array(
				'type'=>'POST', //request type
				'url'=>CController::createUrl('documentFiles/documentCategories'), //url to call.
				//Style: CController::createUrl('currentController/methodToCall')
				'update'=>'#'.CHtml::activeId($model,'category_id'), //selector to update
				//'data'=>array('lang'=>'js:this.value'),
				//'data'=>'js:javascript statement' 
				//leave out the data key to pass all form values through
				))); 
	 ?>	
	
	<?php $list = $model->isNewRecord? array(): CHtml::listData(DocumentCategories::model()->findAll('lang=:lang',array(':lang'=>$model->lang)), 'id', 'title');
		  echo $form->dropDownListRow($model,'category_id',$list,array('empty' => 'Danh mục gốc')); ?>	

	<?php echo $form->textFieldRow($model,'document_no',array('class'=>'span5','maxlength'=>50)); ?>

	<?php echo $form->textFieldRow($model,'title',array('class'=>'span5','maxlength'=>128)); ?>

	<?php echo $form->textFieldRow($model,'date_of_issue',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'description',array('class'=>'span5','maxlength'=>4000)); ?>

	<div class="control-group ">
		<?php echo $form->labelEx($model,'document_path',array('class'=>'control-label')); ?>
		<div class="controls">		
				<?php //echo $form->textFieldRow($model,'ban_do_hanh_chinh',array('class'=>'span5','maxlength'=>400)); 
					$this->widget('ext.elFinder.ServerFileInput', array(
						'model' => $model,
						'attribute' => 'document_path',
						'connectorRoute' => 'elFinder/connector',
						//'connectorRoute' => 'elFinder/attach/1',
						)
				);
				?>	
		</div>	
	</div>
	
	<?php echo $form->dropDownListRow($model,'actived',Lookup::items('FrontPage')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'type' => 'primary',
			'icon' => 'arrow-left white',
			'label' => 'Danh sách văn bản',
			'url' => array('documentFiles/admin'),
		));
		?>
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Thêm mới' : 'Cập nhật',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
