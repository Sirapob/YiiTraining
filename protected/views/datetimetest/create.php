<?php
/* @var $this DatetimetestController */
/* @var $model Datetimetest */

$this->breadcrumbs=array(
	'Datetimetests'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Datetimetest', 'url'=>array('index')),
	array('label'=>'Manage Datetimetest', 'url'=>array('admin')),
);
?>

<h1>Create Datetimetest</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>