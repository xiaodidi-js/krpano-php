<?php /* Smarty version Smarty-3.1.7, created on 2021-07-03 09:20:06
         compiled from "D:/VR/VR0002/template\default\passport\register.lbi" */ ?>
<?php /*%%SmartyHeaderCode:423760dfbb4642cb66-89992467%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8dad89e08f83f5006bf9aeaef0064dbbf938d68d' => 
    array (
      0 => 'D:/VR/VR0002/template\\default\\passport\\register.lbi',
      1 => 1530676515,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '423760dfbb4642cb66-89992467',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_lang' => 0,
    'redirectUrl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_60dfbb464f435',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60dfbb464f435')) {function content_60dfbb464f435($_smarty_tpl) {?><div class="container">
	
	<div class="passport_container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<a href="/"><img src="/static/images/logo.png" alt="<?php echo $_smarty_tpl->tpl_vars['_lang']->value['title'];?>
"></a>
			</div>
		</div>
		<div class="row top15">
			<h3>与世界分享你的全景</h3>
		</div>
		<div class="row top15">
			<div class="col-md-3 col-md-offset-3"><strong><a href="#">注册</a></strong></div> <div class="col-md-3"><strong><a href="/passport/login">登录</a></strong></div>
		</div>
		<div class="row ">
			<div class="col-md-12 top15">
			<form id="reg_form" action="/passport/register" method="post">
				<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['redirectUrl']->value;?>
" name="redirectUrl">
				<div class="input-group top15">
				  <span class="input-group-addon"><i class="icon icon-user"></i></span>
				  <input type="text" id="nickname" name="nickname" class="form-control" placeholder="昵称" width="200">
				</div>
				<div class="input-group top15">
				 <span class="input-group-addon">验证码</span>
				  <input type="text" id="pic_captcha" class="form-control" width="200">
				  <span class="input-group-addon" style="width:60px;padding:0;border:0"><img id="captcha_img" src="/captcha.php?act=reg" alt="点击图片，切换验证码" style="width:100%;height:32px;cursor:pointer"></span>
				</div>
				<div class="input-group top15">
				  <span class="input-group-addon"><i class="icon icon-tablet"></i></span>
				  <input type="text" id="phone" name="phone" class="form-control" placeholder="手机号" width="200">
				  <span class="input-group-btn">
				      <button class="btn btn-info" type="button" id="send_btn">获取验证码</button>
				   </span>
				</div>
				<div class="input-group top15">
				 <span class="input-group-addon">手机验证码</span>
				  <input type="text" id="sms_captcha" name="sms_captcha" class="form-control">
				</div>
				<div class="input-group top15">
				  <span class="input-group-addon"><i class="icon icon-key"></i></span>
				  <input type="password" id="password" name="password" class="form-control" placeholder="密码" width="200">
				</div>
				<div class="input-group top15">
				  <span class="input-group-addon"><i class="icon icon-key"></i></span>
				  <input type="password" id="confirm_password" class="form-control" placeholder="确认密码" width="200">
				</div>

				<button class="btn btn-block btn-primary top15" type="button" id="reg_btn">立即注册</button>
				</form>
			</div>
		</div>
	</div>

</div>
<script src="/static/js/sendsms.js"></script>
<script>
	$("#reg_btn").click(function(){
		$(".input-group").removeClass('has-error');
		$param = {};
		$param.nickname = $.trim($("#nickname").val());
		if ($param.nickname==""||$param.nickname.length>20) {
			showerr("用户名长度在1到20位之间",$("#nickname"));
			return false;
		}
		$param.phone = $.trim($("#phone").val());
		if ($param.phone.length!=11) {
			showerr("请输入正确的手机号",$("#phone"));
			return false;
		}
		$param.sms_captcha = $.trim($("#sms_captcha").val());
		if ($param.sms_captcha.length=="") {
			showerr("请输入正确的短信验证码",$("#sms_captcha"));
			return false;
		}

		$param.password = $.trim($("#password").val());
		if ($param.password.length<6||$param.password.length>20) {
			showerr("请输入6到20位的密码",$("#password"));
			return false;
		}
		var confirm_password = $.trim($("#confirm_password").val());
		if (confirm_password!=$param.password) {
			showerr("两次输入的密码不一致",$("#confirm_password"));
			return false;
		}
		var sms_captcha = $.trim($("#sms_captcha").val());
		if (sms_captcha.length=="") {
			showerr("请输入正确的验证码",$("#sms_captcha"));
			return true;
		};
		ajaxFormSubmit("reg_form","reg_btn");
	});
	$("#captcha_img").click(function(){
		$(this).attr('src','/captcha.php?act=reg&v'+(new Date().getTime()));
	});
	$("#send_btn").click(function(){
		$(".input-group").removeClass('has-error');
		var pic_captcha = $.trim($("#pic_captcha").val());
		if (pic_captcha=="") {
			showerr("请输入正确图形验证码",$("#pic_captcha"));
			return false;
		}
		var phone = $.trim($("#phone").val());
		if (phone.length!=11) {
			showerr("请输入正确的手机号",$("#phone"));
			return false;
		}
		sendSms("reg",phone,pic_captcha);
	})
</script><?php }} ?>