<?php
/* @var $this DatetimetestController */
/* @var $model Datetimetest */

$this->breadcrumbs=array(
	'Datetimetests'=>array('index'),
	$model->datetime_id,
);

$this->menu=array(
	array('label'=>'List Datetimetest', 'url'=>array('index')),
	array('label'=>'Create Datetimetest', 'url'=>array('create')),
	array('label'=>'Update Datetimetest', 'url'=>array('update', 'id'=>$model->datetime_id)),
	array('label'=>'Delete Datetimetest', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->datetime_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Datetimetest', 'url'=>array('admin')),
);
?>

<h1>View Datetimetest #<?php echo $model->datetime_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'datetime_id',
		'datetime1',
		'datetime2',
		'datetime3',
	),
)); ?>
