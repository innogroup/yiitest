<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<?php echo $form->textFieldRow($model,'id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'title',array('class'=>'span5','maxlength'=>128)); ?>

	<?php echo $form->textFieldRow($model,'title_en',array('class'=>'span5','maxlength'=>128)); ?>

	<?php echo $form->textFieldRow($model,'title_jp',array('class'=>'span5','maxlength'=>128)); ?>

	<?php echo $form->textFieldRow($model,'area',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'map_path',array('class'=>'span5','maxlength'=>128)); ?>

	<?php echo $form->textFieldRow($model,'description',array('class'=>'span5','maxlength'=>4000)); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
