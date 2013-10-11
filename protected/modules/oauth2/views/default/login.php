<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>系统默认登录验证</title>
<link href="<?php echo Yii::app()->baseUrl;?>/style/default/css/login.css" rel="stylesheet" rev="stylesheet" type="text/css" media="all" />
<link href="<?php echo Yii::app()->baseUrl;?>/widget/facebox/src/facebox.css" rel="stylesheet" rev="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="<?php echo Yii::app()->baseUrl;?>/style/default/js/jquery1.42.min.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->baseUrl;?>/style/default/js/jquery.SuperSlide.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->baseUrl;?>/style/default/js/Validform_v5.3.2_min.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->baseUrl;?>/widget/facebox/src/facebox.js"></script>
<script>
$(function(){

$('a[rel*=facebox]').facebox({
    loadingImage:'<?php echo Yii::app()->baseUrl.'/widget/facebox/src/loading.gif'?>',
   closeImage:'<?php echo Yii::app()->baseUrl.'/widget/facebox/src/closelabel.png';?>'
});
$(".i-text").focus(function(){
$(this).addClass('h-light');
});

$(".i-text").focusout(function(){
$(this).removeClass('h-light');
});

$("#username").focus(function(){
 var username = $(this).val();
 if(username=='输入账号'){
 $(this).val('');
 }
});

$("#username").focusout(function(){
 var username = $(this).val();
 if(username==''){
 $(this).val('输入账号');
 }
});


$("#password").focus(function(){
 var username = $(this).val();
 if(username=='输入密码'){
 $(this).val('');
 }
});


$("#yzm").focus(function(){
 var username = $(this).val();
 if(username=='输入验证码'){
 $(this).val('');
 }
});

$("#yzm").focusout(function(){
 var username = $(this).val();
 if(username==''){
 $(this).val('输入验证码');
 }
});



$(".registerform").Validform({
	tiptype:function(msg,o,cssctl){
		var objtip=$(".error-box");
		cssctl(objtip,o.type);
		objtip.text(msg);
	},
    ajaxPost:true,
	callback:function(data){
		if(data.status=="y" && data.user_id!=null)
		{
		//alert(data.status);
		window.location.href=data.returnUrl;
		}
	}
});

});




</script>


</head>

<body>

<div class="header">
  <h1 class="headerLogo"><a title="后台管理系统" target="_blank" href=""><img alt="logo" src="<?php echo Yii::app()->baseUrl?>/style/default/images/logo.gif"></a></h1><!--
	<div class="headerNav">
		<a target="_blank" href="http://www.17sucai.com/">华软官网</a>
		<a target="_blank" href="http://www.17sucai.com/">关于华软</a>
		<a target="_blank" href="http://www.17sucai.com/">开发团队</a>
		<a target="_blank" href="http://www.17sucai.com/">意见反馈</a>
		<a target="_blank" href="http://www.17sucai.com/">帮助</a>	
	</div>
	-->
</div>

<div class="banner">

<div class="login-aside">
  <div id="o-box-up"></div>
  <div id="o-box-down"  style="table-layout:fixed;">
   <div class="error-box"></div>
   
   <form class="registerform" action="#" method="post" name="LoginForm">
   <div class="fm-item">
	   <label for="logonId" class="form-label">登陆用户名：</label>
	   <input type="text" name="LoginForm[username]" placeholder="输入账号" maxlength="100" id="username" class="i-text" ajaxUrl="<?php echo Yii::app()->createUrl('checkValue/isRegister');?>" nullmsg="请输入账号！"  datatype="s4-18" errormsg="用户名至少4个字符,最多18个字符！"  >    
       <div class="ui-form-explain"></div>
  </div>
  
  <div class="fm-item">
	   <label for="logonId" class="form-label">登陆密码：<a href="#" class="forgotpassword">忘记登录密码？</a></label>
	   <input type="password" name="LoginForm[password]" value="" maxlength="100" id="password" class="i-text" datatype="*5-16" nullmsg="请输入密码！" errormsg="密码范围在5~16位之间！" placeholder="输入密码">    
       <div class="ui-form-explain"></div>
  </div>
  <!--
  <div class="fm-item pos-r">
	   <label for="logonId" class="form-label">验证码</label>
	   <input type="text" value="输入验证码" maxlength="100" id="yzm" class="i-text yzm" nullmsg="请输入验证码！" >    
       <div class="ui-form-explain"><img src="images/yzm.jpg" class="yzm-img" /></div>
  </div>
  -->
  <div class="fm-item">
	   <label for="logonId" class="form-label"></label>
	   <input type="submit" value="" tabindex="4" id="send-btn" class="btn-login"> 
       <div class="ui-form-explain"></div>
  </div>
  
  </form>
	
		<ul class="entries">
		<li class="other-login"><a href="" rel="facebox">其他方式登录</a></li>
		<li class="register"><a href="<?php echo Yii::app()->createUrl('oauth2/authorize/regist',$_GET,'&');?>">免费注册</a></li>
		</ul>
  
	
  </div>

</div>

	<div class="bd">
		<ul>
			<li style="background:url(<?php echo Yii::app()->baseUrl;?>/style/default/themes/theme-pic1.jpg) #CCE1F3 center 0 no-repeat;"></li>
			<li style="background:url(<?php echo Yii::app()->baseUrl;?>/style/default/themes/theme-pic2.jpg) #BCE0FF center 0 no-repeat;"></li>
		</ul>
	</div>

	<div class="hd"><ul></ul></div>

</div>
<script type="text/javascript">jQuery(".banner").slide({ titCell:".hd ul", mainCell:".bd ul", effect:"fold",  autoPlay:true, autoPage:true, trigger:"click" });</script>


<div class="banner-shadow"></div>

<div class="footer">
 <p>Powered By Jack Hunx Copyright 2013-2014,All Rights Reserved</p>
</div>



</body>
</html>
