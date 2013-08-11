<?php
/* @var $this UserqController */
/* @var $model User */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->user_id,
);

$this->menu=array(
	array('label'=>'List User', 'url'=>array('index')),
	array('label'=>'Create User', 'url'=>array('create')),
	array('label'=>'Update User', 'url'=>array('update', 'id'=>$model->user_id)),
	array('label'=>'Delete User', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->user_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage User', 'url'=>array('admin')),
);
?>

<h1>View User #<?php echo $model->user_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'user_id',
		'type_id',
		'order',
		'purview',
		'username',
		'password',
		'paypassword',
		'islock',
		'invite_userid',
		'invite_money',
		'real_status',
		'card_type',
		'card_id',
		'card_pic1',
		'card_pic2',
		'nation',
		'realname',
		'integral',
		'status',
		'avatar_status',
		'email_status',
		'phone_status',
		'video_status',
		'scene_status',
		'email',
		'sex',
		'litpic',
		'tel',
		'phone',
		'qq',
		'wangwang',
		'question',
		'answer',
		'birthday',
		'province',
		'city',
		'area',
		'address',
		'remind',
		'privacy',
		'logintime',
		'addtime',
		'addip',
		'uptime',
		'upip',
		'lasttime',
		'lastip',
	),
)); ?>
