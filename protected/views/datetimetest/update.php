<?php
/* @var $this DatetimetestController */
/* @var $model Datetimetest */

$this->breadcrumbs=array(
	'Datetimetests'=>array('index'),
	$model->datetime_id=>array('view','id'=>$model->datetime_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Datetimetest', 'url'=>array('index')),
	array('label'=>'Create Datetimetest', 'url'=>array('create')),
	array('label'=>'View Datetimetest', 'url'=>array('view', 'id'=>$model->datetime_id)),
	array('label'=>'Manage Datetimetest', 'url'=>array('admin')),
);
?>

<h1>Update Datetimetest <?php echo $model->datetime_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>