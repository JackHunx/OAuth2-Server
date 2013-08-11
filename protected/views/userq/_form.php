<?php
/* @var $this UserqController */
/* @var $model User */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'type_id'); ?>
		<?php echo $form->textField($model,'type_id'); ?>
		<?php echo $form->error($model,'type_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'order'); ?>
		<?php echo $form->textField($model,'order'); ?>
		<?php echo $form->error($model,'order'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'purview'); ?>
		<?php echo $form->textField($model,'purview',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'purview'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'paypassword'); ?>
		<?php echo $form->textField($model,'paypassword',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'paypassword'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'islock'); ?>
		<?php echo $form->textField($model,'islock'); ?>
		<?php echo $form->error($model,'islock'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'invite_userid'); ?>
		<?php echo $form->textField($model,'invite_userid'); ?>
		<?php echo $form->error($model,'invite_userid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'invite_money'); ?>
		<?php echo $form->textField($model,'invite_money',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'invite_money'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'real_status'); ?>
		<?php echo $form->textField($model,'real_status'); ?>
		<?php echo $form->error($model,'real_status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'card_type'); ?>
		<?php echo $form->textField($model,'card_type',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'card_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'card_id'); ?>
		<?php echo $form->textField($model,'card_id',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'card_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'card_pic1'); ?>
		<?php echo $form->textField($model,'card_pic1',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'card_pic1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'card_pic2'); ?>
		<?php echo $form->textField($model,'card_pic2',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'card_pic2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nation'); ?>
		<?php echo $form->textField($model,'nation',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'nation'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'realname'); ?>
		<?php echo $form->textField($model,'realname',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'realname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'integral'); ?>
		<?php echo $form->textField($model,'integral',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'integral'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->textField($model,'status'); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'avatar_status'); ?>
		<?php echo $form->textField($model,'avatar_status'); ?>
		<?php echo $form->error($model,'avatar_status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email_status'); ?>
		<?php echo $form->textField($model,'email_status'); ?>
		<?php echo $form->error($model,'email_status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'phone_status'); ?>
		<?php echo $form->textField($model,'phone_status'); ?>
		<?php echo $form->error($model,'phone_status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'video_status'); ?>
		<?php echo $form->textField($model,'video_status'); ?>
		<?php echo $form->error($model,'video_status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'scene_status'); ?>
		<?php echo $form->textField($model,'scene_status'); ?>
		<?php echo $form->error($model,'scene_status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sex'); ?>
		<?php echo $form->textField($model,'sex',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'sex'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'litpic'); ?>
		<?php echo $form->textField($model,'litpic',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'litpic'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tel'); ?>
		<?php echo $form->textField($model,'tel',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'tel'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'phone'); ?>
		<?php echo $form->textField($model,'phone',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'phone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'qq'); ?>
		<?php echo $form->textField($model,'qq',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'qq'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'wangwang'); ?>
		<?php echo $form->textField($model,'wangwang',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'wangwang'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'question'); ?>
		<?php echo $form->textField($model,'question',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'question'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'answer'); ?>
		<?php echo $form->textField($model,'answer',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'answer'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'birthday'); ?>
		<?php echo $form->textField($model,'birthday',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'birthday'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'province'); ?>
		<?php echo $form->textField($model,'province',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'province'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'city'); ?>
		<?php echo $form->textField($model,'city',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'city'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'area'); ?>
		<?php echo $form->textField($model,'area',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'area'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'address'); ?>
		<?php echo $form->textField($model,'address',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'address'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'remind'); ?>
		<?php echo $form->textArea($model,'remind',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'remind'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'privacy'); ?>
		<?php echo $form->textArea($model,'privacy',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'privacy'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'logintime'); ?>
		<?php echo $form->textField($model,'logintime'); ?>
		<?php echo $form->error($model,'logintime'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'addtime'); ?>
		<?php echo $form->textField($model,'addtime',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'addtime'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'addip'); ?>
		<?php echo $form->textField($model,'addip',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'addip'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'uptime'); ?>
		<?php echo $form->textField($model,'uptime',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'uptime'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'upip'); ?>
		<?php echo $form->textField($model,'upip',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'upip'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lasttime'); ?>
		<?php echo $form->textField($model,'lasttime',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'lasttime'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lastip'); ?>
		<?php echo $form->textField($model,'lastip',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'lastip'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->