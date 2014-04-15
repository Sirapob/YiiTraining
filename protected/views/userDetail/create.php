<?php
/* @var $this UserDetailController */
/* @var $model UserDetail */

$this->breadcrumbs=array(
	'User Details'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List UserDetail', 'url'=>array('index')),
	array('label'=>'Manage UserDetail', 'url'=>array('admin')),
);
?>

<h1>Create UserDetail</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>