<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'news-contents-form',
	'type'=>'horizontal',
	'enableAjaxValidation'=>false,
)); 
?>
	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->dropDownListRow($model,'lang', Yii::app()->params->languages,array(
				'ajax' => array(
				'type'=>'POST', 
				'url'=>CController::createUrl('newsContents/newsCategories'),
				'update'=>'#'.CHtml::activeId($model,'category_id'), 
				))); 
	 ?>	

	<?php //$list = CHtml::listData(NewsCategories::model()->findAll(array('order' => 'id')), 'id', 'title');
		  //echo $form->dropDownListRow($model,'category_id',$list); 
	?>	
	<?php $list = $model->isNewRecord? array(): CHtml::listData(NewsCategories::model()->findAll('lang=:lang',array(':lang'=>$model->lang)), 'id', 'title');
	  echo $form->dropDownListRow($model,'category_id',$list,array('empty' => 'Danh mục gốc')); ?>	

	<?php echo $form->textFieldRow($model,'title',array('class'=>'span8','maxlength'=>128)); ?>
	
	<div class="control-group ">
		<?php echo $form->labelEx($model,'short_description',array('class'=>'control-label')); ?>
		<div class="controls">		
				<?php 
						$this->widget('ext.tinymce.TinyMce', array(
							'model' => $model,
							'attribute' => 'short_description',
							// Optional config
							'compressorRoute' => 'tinyMce/compressor',
							'spellcheckerRoute' => 'tinyMce/spellchecker',
							'fileManager' => array(
								'class' => 'ext.elFinder.TinyMceElFinder',
								'connectorRoute'=>'elFinder/connector',
							),
							//'editorTemplate'=>'basic',
							'htmlOptions' => array(
								'rows' => 3,
								'cols' => 60,
							),
						));	
						
				?>	
		</div>	
	</div>	
	<div class="control-group ">
		<?php echo $form->labelEx($model,'content',array('class'=>'control-label')); ?>
		<div class="controls">		
				<?php 
						$this->widget('ext.tinymce.TinyMce', array(
							'model' => $model,
							'attribute' => 'content',
							// Optional config
							'compressorRoute' => 'tinyMce/compressor',
							'spellcheckerRoute' => 'tinyMce/spellchecker',
							'fileManager' => array(
								'class' => 'ext.elFinder.TinyMceElFinder',
								'connectorRoute'=>'elFinder/connector',
							),
							'htmlOptions' => array(
								'rows' => 6,
								'cols' => 60,
							),
						));	
						
				?>	
		</div>	
	</div>	

	<div class="control-group ">
		<?php echo $form->labelEx($model,'future_image',array('class'=>'control-label')); ?>
		<div class="controls">		
				<?php //echo $form->textFieldRow($model,'ban_do_hanh_chinh',array('class'=>'span5','maxlength'=>400)); 
					$this->widget('ext.elFinder.ServerFileInput', array(
						'model' => $model,
						'attribute' => 'future_image',
						'connectorRoute' => 'elFinder/connector',
						//'connectorRoute' => 'elFinder/attach/1',
						)
				);
				?>	
		</div>	
	</div>

	<?php echo $form->textFieldRow($model,'sources',array('class'=>'span5','maxlength'=>128)); ?>

	<?php echo $form->dropDownListRow($model,'hot',Lookup::items('Hot')); ?>	

	<?php echo $form->dropDownListRow($model,'actived',Lookup::items('Actived')); ?>	

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'type' => 'primary',
			'icon' => 'arrow-left white',
			'label' => 'Danh sách tin tức',
			'url' => array('newscontents/admin'),
		));
		?>
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Thêm mới' : 'Lưu thông tin',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
