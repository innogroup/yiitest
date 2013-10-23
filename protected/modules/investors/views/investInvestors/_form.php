<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'invest-investors-form',
	'type'=>'horizontal',
	'enableAjaxValidation'=>false,
)); ?>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'name',array('class'=>'span5','maxlength'=>128)); ?>

	<?php echo $form->textFieldRow($model,'name_en',array('class'=>'span5','maxlength'=>128)); ?>

	<?php echo $form->textFieldRow($model,'name_jp',array('class'=>'span5','maxlength'=>128)); ?>

	<?php $list = CHtml::listData(InvestFunctionalAreas::model()->findAll(array('order' => 'id')), 'id', 'title');
		  echo $form->dropDownListRow($model,'functional_area_id',$list); ?>	
	
	<?php $list = CHtml::listData(InvestNationals::model()->findAll(array('order' => 'id')), 'id', 'national');
		  echo $form->dropDownListRow($model,'national_id',$list); ?>	
		  
	<?php echo $form->textFieldRow($model,'area',array('class'=>'span5')); ?>

	<div class="control-group ">
		<?php echo $form->labelEx($model,'logo_path',array('class'=>'control-label')); ?>
		<div class="controls">		
				<?php //echo $form->textFieldRow($model,'ban_do_hanh_chinh',array('class'=>'span5','maxlength'=>400)); 
					$this->widget('ext.elFinder.ServerFileInput', array(
						'model' => $model,
						'attribute' => 'logo_path',
						'connectorRoute' => 'elFinder/connector',
						//'connectorRoute' => 'elFinder/attach/1',
						)
				);
				?>	
		</div>	
	</div>

	<?php echo $form->dropDownListRow($model,'actived',Lookup::items('HoatDong')); ?>	
	
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
			'label' => 'Danh sách nhà đầu tư',
			'url' => array('investInvestors/admin'),
		));
		?>
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Thêm mới' : 'Lưu thông tin',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
