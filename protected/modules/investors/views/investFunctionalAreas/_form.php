<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'invest-functional-areas-form',
	'type'=>'horizontal',
	'enableAjaxValidation'=>false,
)); ?>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'title',array('class'=>'span5','maxlength'=>128)); ?>

	<?php echo $form->textFieldRow($model,'title_en',array('class'=>'span5','maxlength'=>128)); ?>

	<?php echo $form->textFieldRow($model,'title_jp',array('class'=>'span5','maxlength'=>128)); ?>

	<?php echo $form->textFieldRow($model,'area',array('class'=>'span5'));?>
	
	<div class="control-group ">
		<?php echo $form->labelEx($model,'map_path',array('class'=>'control-label')); ?>
		<div class="controls">		
				<?php //echo $form->textFieldRow($model,'ban_do_hanh_chinh',array('class'=>'span5','maxlength'=>400)); 
					$this->widget('ext.elFinder.ServerFileInput', array(
						'model' => $model,
						'attribute' => 'map_path',
						'connectorRoute' => 'elFinder/connector',
						//'connectorRoute' => 'elFinder/attach/1',
						)
				);
				?>	
		</div>	
	</div>
	
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

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'type' => 'primary',
			'icon' => 'arrow-left white',
			'label' => 'Danh sách khu chức năng',
			'url' => array('/investors/investFunctionalAreas/admin'),
		));
		?>
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Thêm mới' : 'Lưu thông tin',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
