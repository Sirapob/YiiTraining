<?php
/* @var $this DatetimetestController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Datetimetests',
);

$this->menu=array(
	array('label'=>'Create Datetimetest', 'url'=>array('create')),
	array('label'=>'Manage Datetimetest', 'url'=>array('admin')),
);
?>

<h1>Datetimetests</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
