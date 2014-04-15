<?php
/* @var $this UserDetailController */
/* @var $model UserDetail */

$this->breadcrumbs=array(
	'User Details'=>array('index'),
	$model->name=>array('view','id'=>$model->id_user),
	'Update',
);

$this->menu=array(
	array('label'=>'List UserDetail', 'url'=>array('index')),
	array('label'=>'Create UserDetail', 'url'=>array('create')),
	array('label'=>'View UserDetail', 'url'=>array('view', 'id'=>$model->id_user)),
	array('label'=>'Manage UserDetail', 'url'=>array('admin')),
);
?>

<h1>Update UserDetail <?php echo $model->id_user; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>