<?php
/* @var $this DatetimetestController */
/* @var $model Datetimetest */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'datetime_id'); ?>
		<?php echo $form->textField($model,'datetime_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'datetime1'); ?>
		<?php echo $form->textField($model,'datetime1'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'datetime2'); ?>
		<?php echo $form->textField($model,'datetime2'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'datetime3'); ?>
		<?php echo $form->textField($model,'datetime3'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->