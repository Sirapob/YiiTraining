<?php
/* @var $this DatetimetestController */
/* @var $data Datetimetest */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('datetime_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->datetime_id), array('view', 'id'=>$data->datetime_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('datetime1')); ?>:</b>
	<?php echo CHtml::encode($data->datetime1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('datetime2')); ?>:</b>
	<?php echo CHtml::encode($data->datetime2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('datetime3')); ?>:</b>
	<?php echo CHtml::encode($data->datetime3); ?>
	<br />


</div>