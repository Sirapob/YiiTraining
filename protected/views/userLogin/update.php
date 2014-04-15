<?php
/* @var $this UserLoginController */
/* @var $model UserLogin */

$this->breadcrumbs=array(
	'User Logins'=>array('index'),
	$model->id_user=>array('view','id'=>$model->id_user),
	'Update',
);

$this->menu=array(
	array('label'=>'List UserLogin', 'url'=>array('index')),
	array('label'=>'Create UserLogin', 'url'=>array('create')),
	array('label'=>'View UserLogin', 'url'=>array('view', 'id'=>$model->id_user)),
	array('label'=>'Manage UserLogin', 'url'=>array('admin')),
);
?>

<h1>Update UserLogin <?php echo $model->id_user; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>