<?php /* Smarty version Smarty-3.1.7, created on 2018-07-11 11:37:15
         compiled from "F:/0766city/vradmin/template\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:155085b457a42d985d4-78693462%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '659256d7a056ccb116b27e6ece161dde8bcc3d95' => 
    array (
      0 => 'F:/0766city/vradmin/template\\index.tpl',
      1 => 1531280231,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '155085b457a42d985d4-78693462',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5b457a42e4baa',
  'variables' => 
  array (
    '_lang' => 0,
    'title' => 0,
    'module' => 0,
    'admin' => 0,
    'nav' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b457a42e4baa')) {function content_5b457a42e4baa($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="robots" content="noarchive">
<link href="/<?php echo $_smarty_tpl->tpl_vars['_lang']->value['admin_path'];?>
/template/css/public.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="/<?php echo $_smarty_tpl->tpl_vars['_lang']->value['admin_path'];?>
/template/js/jquery.min.js"></script>
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['_lang']->value['title'];?>
</title>
</head>
<body>

<div id="dcWrap">

<?php if ($_smarty_tpl->tpl_vars['module']->value=='login'){?>
   <?php echo $_smarty_tpl->getSubTemplate ("lib/login.lbi", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }else{ ?>
 <div id="dcHead">
 <div id="head">
  <div class="logo"><a href="/<?php echo $_smarty_tpl->tpl_vars['_lang']->value['admin_path'];?>
/"><?php echo $_smarty_tpl->tpl_vars['_lang']->value['title'];?>
</a></div>
  <div class="nav">
   <ul>
    <li class="M"><a href="JavaScript:void(0);" class="topAdd">??????</a>
     <div class="drop mTopad"><a href="/<?php echo $_smarty_tpl->tpl_vars['_lang']->value['admin_path'];?>
/?m=user&act=profile">??????</a> <a href="/<?php echo $_smarty_tpl->tpl_vars['_lang']->value['admin_path'];?>
/?m=tag&act=profile">??????</a></div>
    </li>
    <li><a href="/" target="_blank">????????????</a></li>
    <li><a onclick="clear_cache(this)" href="javascript:;">????????????</a></li>
     <li><a  href="https://dwz.cn/D3Gi47vE" target="_blank">????????????</a></li>

   </ul>
  
   <ul class="navRight">
    <li class="M noLeft"><a href="JavaScript:void(0);">?????????<?php echo $_smarty_tpl->tpl_vars['admin']->value['admin_name'];?>
</a>
     <div class="drop mUser">
      <a href="/<?php echo $_smarty_tpl->tpl_vars['_lang']->value['admin_path'];?>
/?m=passwd">??????????????????</a>
     </div>
    </li>
    <li class="noRight"><a href="/<?php echo $_smarty_tpl->tpl_vars['_lang']->value['admin_path'];?>
/?m=logout">??????</a></li>
   </ul>
  </div>
 </div>
</div>
<!-- Head ?????? --> 
<div id="dcLeft">
 <div id="menu">
 <ul class="top">
  <li><a href="/<?php echo $_smarty_tpl->tpl_vars['_lang']->value['admin_path'];?>
/"><i class="home"></i><em>????????????</em></a></li>
 </ul>
 <ul>
  <li <?php if ($_smarty_tpl->tpl_vars['module']->value=='system'){?>class="cur"<?php }?>><a href="/<?php echo $_smarty_tpl->tpl_vars['_lang']->value['admin_path'];?>
/?m=system"><i class="system"></i><em>????????????</em></a></li>
  <li <?php if ($_smarty_tpl->tpl_vars['module']->value=='plugin'){?>class="cur"<?php }?>><a href="/<?php echo $_smarty_tpl->tpl_vars['_lang']->value['admin_path'];?>
/?m=plugin"><i class="case"></i><em>????????????</em></a></li>
  <li <?php if ($_smarty_tpl->tpl_vars['module']->value=='theme'){?>class="cur"<?php }?>><a href="/<?php echo $_smarty_tpl->tpl_vars['_lang']->value['admin_path'];?>
/?m=theme"><i class="theme"></i><em>????????????</em></a></li>
 </ul>
 <ul>
  <li <?php if ($_smarty_tpl->tpl_vars['module']->value=='slide'||$_smarty_tpl->tpl_vars['module']->value=='ad'){?>class="cur"<?php }?>><a href="/<?php echo $_smarty_tpl->tpl_vars['_lang']->value['admin_path'];?>
/?m=slide"><i class="show"></i><em>????????????</em></a></li>  
  <li <?php if ($_smarty_tpl->tpl_vars['module']->value=='material'){?>class="cur"<?php }?>><a href="/<?php echo $_smarty_tpl->tpl_vars['_lang']->value['admin_path'];?>
/?m=material"><i class="link"></i><em>????????????</em></a></li>
 </ul>
 <ul>
  <li <?php if ($_smarty_tpl->tpl_vars['module']->value=='user'){?>class="cur"<?php }?>><a href="/<?php echo $_smarty_tpl->tpl_vars['_lang']->value['admin_path'];?>
/?m=user"><i class="user"></i><em>????????????</em></a></li>
  <li <?php if ($_smarty_tpl->tpl_vars['module']->value=='level'){?>class="cur"<?php }?>><a href="/<?php echo $_smarty_tpl->tpl_vars['_lang']->value['admin_path'];?>
/?m=level"><i class="nav"></i><em>????????????</em></a></li>
 </ul>
 <ul> 
  <li <?php if ($_smarty_tpl->tpl_vars['module']->value=='tag'){?>class="cur"<?php }?>><a href="/<?php echo $_smarty_tpl->tpl_vars['_lang']->value['admin_path'];?>
/?m=tag"><i class="page"></i><em>????????????</em></a></li>
  <li <?php if ($_smarty_tpl->tpl_vars['module']->value=='pic'){?>class="cur"<?php }?>><a href="/<?php echo $_smarty_tpl->tpl_vars['_lang']->value['admin_path'];?>
/?m=pic"><i class="productCat"></i><em>????????????</em></a></li>
  <li <?php if ($_smarty_tpl->tpl_vars['module']->value=='video'){?>class="cur"<?php }?>><a href="/<?php echo $_smarty_tpl->tpl_vars['_lang']->value['admin_path'];?>
/?m=video"><i class="product"></i><em>????????????</em></a></li>
  <li <?php if ($_smarty_tpl->tpl_vars['module']->value=='reward'){?>class="cur"<?php }?>><a href="/<?php echo $_smarty_tpl->tpl_vars['_lang']->value['admin_path'];?>
/?m=reward"><i class="order"></i><em>????????????</em></a></li>
 </ul>
 <ul> 
  <li <?php if ($_smarty_tpl->tpl_vars['module']->value=='articlecat'){?>class="cur"<?php }?>><a href="/<?php echo $_smarty_tpl->tpl_vars['_lang']->value['admin_path'];?>
/?m=articlecat"><i class="articleCat"></i><em>????????????</em></a></li>
  <li <?php if ($_smarty_tpl->tpl_vars['module']->value=='article'){?>class="cur"<?php }?>><a href="/<?php echo $_smarty_tpl->tpl_vars['_lang']->value['admin_path'];?>
/?m=article"><i class="article"></i><em>????????????</em></a></li>
 </ul>
 <ul class="bot">
  <li <?php if ($_smarty_tpl->tpl_vars['module']->value=='region'){?>class="cur"<?php }?>><a href="/<?php echo $_smarty_tpl->tpl_vars['_lang']->value['admin_path'];?>
/?m=region"><i class="plugin"></i><em>????????????</em></a></li>
 </ul>
 </div>
</div>
<div id="dcMain">
   <!-- ???????????? -->
<div id="urHere"><?php echo $_smarty_tpl->tpl_vars['_lang']->value['title'];?>
 ????????????<?php if (!empty($_smarty_tpl->tpl_vars['nav']->value)){?><b>></b><strong><?php echo $_smarty_tpl->tpl_vars['nav']->value;?>
</strong><?php }?> </div>   
<div <?php if ($_smarty_tpl->tpl_vars['module']->value=='slide'||$_smarty_tpl->tpl_vars['module']->value=='ad'||$_smarty_tpl->tpl_vars['module']->value=='material'||$_smarty_tpl->tpl_vars['module']->value=='voice'){?>id="mobileBox"<?php }?>>
	<?php if ($_smarty_tpl->tpl_vars['module']->value=='slide'||$_smarty_tpl->tpl_vars['module']->value=='ad'){?>
		<div id="mMenu">
			<h3>????????????</h3>
			<ul>
			 <li><a <?php if ($_smarty_tpl->tpl_vars['module']->value=='slide'){?>class="cur"<?php }?> href="/<?php echo $_smarty_tpl->tpl_vars['_lang']->value['admin_path'];?>
/?m=slide">???????????????</a></li>
			 <li><a <?php if ($_smarty_tpl->tpl_vars['module']->value=='ad'){?>class="cur"<?php }?> href="/<?php echo $_smarty_tpl->tpl_vars['_lang']->value['admin_path'];?>
/?m=ad">????????????</a></li>
			</ul>
		</div>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['module']->value=='material'||$_smarty_tpl->tpl_vars['module']->value=='voice'){?>
		<div id="mMenu">
			<h3>????????????</h3>
			<ul>
			 <li><a <?php if ($_smarty_tpl->tpl_vars['module']->value=='material'){?>class="cur"<?php }?> href="/<?php echo $_smarty_tpl->tpl_vars['_lang']->value['admin_path'];?>
/?m=material">????????????</a></li>
  			 <li><a <?php if ($_smarty_tpl->tpl_vars['module']->value=='voice'){?>class="cur"<?php }?> href="/<?php echo $_smarty_tpl->tpl_vars['_lang']->value['admin_path'];?>
/?m=voice">????????????</a></li>
			</ul>
		</div>
	<?php }?>
	<div id="mMain">
		<div class="mainBox">
		    <?php echo $_smarty_tpl->getSubTemplate ("lib/".($_smarty_tpl->tpl_vars['module']->value).".lbi", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		</div>
	</div>
</div>
</div>
<?php }?>
<div class="clear"></div>
<div id="dcFooter">
 <div id="footer">
  <div class="line"></div>
  <ul>
   Copyright&copy;2015???<?php echo $_smarty_tpl->tpl_vars['_lang']->value['title'];?>

  </ul>
 </div>
</div><!-- Footer ?????? -->
<div class="clear"></div> 
</div>

<script type="text/javascript" src="/<?php echo $_smarty_tpl->tpl_vars['_lang']->value['admin_path'];?>
/template/js/global.js"></script>
<script type="text/javascript" src="/<?php echo $_smarty_tpl->tpl_vars['_lang']->value['admin_path'];?>
/template/js/jquery.tab.js"></script>
<script type="text/javascript" src="/<?php echo $_smarty_tpl->tpl_vars['_lang']->value['admin_path'];?>
/template/js/common.js"></script>
<script type="text/javascript" src="/static/js/jquery.form.js"></script>
<script type="text/javascript" src="/<?php echo $_smarty_tpl->tpl_vars['_lang']->value['admin_path'];?>
/template/js/jquery.form.submit.js"></script>
<script type="text/javascript" src="/<?php echo $_smarty_tpl->tpl_vars['_lang']->value['admin_path'];?>
/template/js/calendar.js"></script>
<script>
function clear_cache(ele) {
    if(confirm("?????????????????????/temp/krpano???????????????????????????????????????????????????????????????ftp???????????????")){
        $(ele).css({
		            "background-image":"url(/static/images/tm_loading.gif)",
					"background-position":"left center ",
					"background-repeat":"no-repeat",
					"background-size":"15px",
					"padding-left":"20px",
				  });
		$.get('/<?php echo $_smarty_tpl->tpl_vars['_lang']->value['admin_path'];?>
/?m=clear_cache',{
        },function(res){
          if (res.status==1) {
            $(ele).css({
			            "background-image":"none",
						"padding-left":"15px",
					  });
          }
        },'json');
    }
}
</script>
</body>
</html><?php }} ?>