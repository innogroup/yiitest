<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'media-albums-form',
	'type'=>'horizontal',
	'enableAjaxValidation'=>false,
)); ?>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->dropDownListRow($model,'lang', Yii::app()->params->languages) ?>	

	<?php echo $form->textFieldRow($model,'title',array('class'=>'span5','maxlength'=>128)); ?>
	
	<div class="control-group ">
		<?php echo $form->labelEx($model,'description',array('class'=>'control-label')); ?>
		<div class="controls">		
				<?php 
						$this->widget('ext.tinymce.TinyMce', array(
							'model' => $model,
							'attribute' => 'description',
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
	<div class="control-group ">
		<?php echo $form->labelEx($model,'album_path',array('class'=>'control-label')); ?>
		<div class="controls">		
				<?php //echo $form->textFieldRow($model,'ban_do_hanh_chinh',array('class'=>'span5','maxlength'=>400)); 
					$this->widget('ext.elFinder.ServerFileInput', array(
						'model' => $model,
						'attribute' => 'album_path',
						'connectorRoute' => 'elFinder/connector',
						//'connectorRoute' => 'elFinder/attach/1',
						)
				);
				?>	
		</div>	
	</div>

	<?php echo $form->dropDownListRow($model,'actived',Lookup::items('Actived')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'type' => 'primary',
			'icon' => 'arrow-left white',
			'label' => 'Danh sách Album',
			'url' => array('/media/mediaAlbums/admin'),
		));
		?>
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Thêm mới' : 'Lưu thông tin',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
