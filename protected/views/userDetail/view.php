<?php
/* @var $this UserDetailController */
/* @var $model UserDetail */

$this->breadcrumbs=array(
	'User Details'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List UserDetail', 'url'=>array('index')),
	array('label'=>'Create UserDetail', 'url'=>array('create')),
	array('label'=>'Update UserDetail', 'url'=>array('update', 'id'=>$model->id_user)),
	array('label'=>'Delete UserDetail', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_user),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage UserDetail', 'url'=>array('admin')),
);
?>

<h1>View UserDetail #<?php echo $model->id_user; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_user',
		'name',
		'gender',
		'address',
		'province',
		'zipcode',
		'type_user',
	),
)); ?>
