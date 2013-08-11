<?php
/* @var $this UserqController */
/* @var $data User */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->user_id), array('view', 'id'=>$data->user_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('type_id')); ?>:</b>
	<?php echo CHtml::encode($data->type_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('order')); ?>:</b>
	<?php echo CHtml::encode($data->order); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('purview')); ?>:</b>
	<?php echo CHtml::encode($data->purview); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('username')); ?>:</b>
	<?php echo CHtml::encode($data->username); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('password')); ?>:</b>
	<?php echo CHtml::encode($data->password); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('paypassword')); ?>:</b>
	<?php echo CHtml::encode($data->paypassword); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('islock')); ?>:</b>
	<?php echo CHtml::encode($data->islock); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('invite_userid')); ?>:</b>
	<?php echo CHtml::encode($data->invite_userid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('invite_money')); ?>:</b>
	<?php echo CHtml::encode($data->invite_money); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('real_status')); ?>:</b>
	<?php echo CHtml::encode($data->real_status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('card_type')); ?>:</b>
	<?php echo CHtml::encode($data->card_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('card_id')); ?>:</b>
	<?php echo CHtml::encode($data->card_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('card_pic1')); ?>:</b>
	<?php echo CHtml::encode($data->card_pic1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('card_pic2')); ?>:</b>
	<?php echo CHtml::encode($data->card_pic2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nation')); ?>:</b>
	<?php echo CHtml::encode($data->nation); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('realname')); ?>:</b>
	<?php echo CHtml::encode($data->realname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('integral')); ?>:</b>
	<?php echo CHtml::encode($data->integral); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('avatar_status')); ?>:</b>
	<?php echo CHtml::encode($data->avatar_status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email_status')); ?>:</b>
	<?php echo CHtml::encode($data->email_status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('phone_status')); ?>:</b>
	<?php echo CHtml::encode($data->phone_status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('video_status')); ?>:</b>
	<?php echo CHtml::encode($data->video_status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('scene_status')); ?>:</b>
	<?php echo CHtml::encode($data->scene_status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sex')); ?>:</b>
	<?php echo CHtml::encode($data->sex); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('litpic')); ?>:</b>
	<?php echo CHtml::encode($data->litpic); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tel')); ?>:</b>
	<?php echo CHtml::encode($data->tel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('phone')); ?>:</b>
	<?php echo CHtml::encode($data->phone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('qq')); ?>:</b>
	<?php echo CHtml::encode($data->qq); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('wangwang')); ?>:</b>
	<?php echo CHtml::encode($data->wangwang); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('question')); ?>:</b>
	<?php echo CHtml::encode($data->question); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('answer')); ?>:</b>
	<?php echo CHtml::encode($data->answer); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('birthday')); ?>:</b>
	<?php echo CHtml::encode($data->birthday); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('province')); ?>:</b>
	<?php echo CHtml::encode($data->province); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('city')); ?>:</b>
	<?php echo CHtml::encode($data->city); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('area')); ?>:</b>
	<?php echo CHtml::encode($data->area); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('address')); ?>:</b>
	<?php echo CHtml::encode($data->address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('remind')); ?>:</b>
	<?php echo CHtml::encode($data->remind); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('privacy')); ?>:</b>
	<?php echo CHtml::encode($data->privacy); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('logintime')); ?>:</b>
	<?php echo CHtml::encode($data->logintime); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('addtime')); ?>:</b>
	<?php echo CHtml::encode($data->addtime); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('addip')); ?>:</b>
	<?php echo CHtml::encode($data->addip); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('uptime')); ?>:</b>
	<?php echo CHtml::encode($data->uptime); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('upip')); ?>:</b>
	<?php echo CHtml::encode($data->upip); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lasttime')); ?>:</b>
	<?php echo CHtml::encode($data->lasttime); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lastip')); ?>:</b>
	<?php echo CHtml::encode($data->lastip); ?>
	<br />

	*/ ?>

</div>