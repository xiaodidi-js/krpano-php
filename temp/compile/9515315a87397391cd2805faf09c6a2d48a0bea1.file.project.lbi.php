<?php /* Smarty version Smarty-3.1.7, created on 2022-01-22 11:28:13
         compiled from "D:/VR/VR0001/template\default\member\project.lbi" */ ?>
<?php /*%%SmartyHeaderCode:1490861eb79cd3e5417-07811165%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9515315a87397391cd2805faf09c6a2d48a0bea1' => 
    array (
      0 => 'D:/VR/VR0001/template\\default\\member\\project.lbi',
      1 => 1530676515,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1490861eb79cd3e5417-07811165',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_lang' => 0,
    'act' => 0,
    'total' => 0,
    'atlas' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_61eb79cd45ac7',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61eb79cd45ac7')) {function content_61eb79cd45ac7($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['_lang']->value['moban'])."/library/member_paths.lbi", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="container" style="margin-bottom: 20px;">
<?php if ($_smarty_tpl->tpl_vars['act']->value=='list'){?>
<style>
	.table td{
		line-height: 40px;
	}
</style>
<div class="main_wrap" id="pic_wrap">	
	<div class="row">
		<div class="col-md-3">
			共 <strong style="font-size:18px;"><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
</strong> 个作品
		</div>
		<div class="col-md-3">
	      <div class="input-group date form-date" data-date="" data-date-format="dd MM yyyy"  data-link-format="yyyy-mm-dd">
	        <input class="form-control" size="16" id="time_s"  type="text" value="" readonly="" placeholder="开始时间" >
	        <span class="input-group-addon"><span class="icon-remove"></span></span>
	        <span class="input-group-addon"><span class="icon-calendar"></span></span>
	      </div>
		</div>
		<div class="col-md-3">
			 <div class="input-group date form-date" data-date="" data-date-format="dd MM yyyy"  data-link-format="yyyy-mm-dd">
		        <input class="form-control" size="16" id="time_e"  type="text" value="" readonly="" placeholder="结束时间" >
		        <span class="input-group-addon"><span class="icon-remove"></span></span>
		        <span class="input-group-addon"><span class="icon-calendar"></span></span>
			</div>
		</div>
		<div class="col-md-2">
			<input type="text" id="name" class="form-control"  placeholder="作品名">
		</div>
		<div class="col-md-1">
			<button class="btn btn-info" onclick="list(1)">搜索</button>
		</div>
	</div>
	<div class="row">
		<div class="col-md-3">
			<nav class="menu" data-toggle="menu" style="width: 200px">
			  <button class="btn btn-primary" data-toggle="modal" data-target="#atlas_modal"><i class="icon-plus-sign"></i> 新建图册 </button>
			  
			  <ul class="nav nav-primary" id="atlas_nav">
			  <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['atlas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
			  	<?php if ($_smarty_tpl->tpl_vars['v']->value['atlas_type']==0){?>
			    	<li class="atlas_active" data-atlasid="<?php echo $_smarty_tpl->tpl_vars['v']->value['pk_atlas_main'];?>
"><a href="javascript:;"> 
			    	<span class="altlas_name"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
 (<?php echo $_smarty_tpl->tpl_vars['v']->value['num'];?>
)</span></a></li>
			    	<?php }else{ ?>
			    	<li data-atlasid="<?php echo $_smarty_tpl->tpl_vars['v']->value['pk_atlas_main'];?>
">
			    		<a href="javascript:;" style="padding-right:2px" >
			    		  <span class="altlas_name" <?php if (mb_strlen($_smarty_tpl->tpl_vars['v']->value['name'])>10){?>title="<?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
 (<?php echo $_smarty_tpl->tpl_vars['v']->value['num'];?>
)"<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
 (<?php echo $_smarty_tpl->tpl_vars['v']->value['num'];?>
)</span>
			    		   <span class="pull-right">
			    			<i class="icon-edit" onclick="atlas_edit('<?php echo $_smarty_tpl->tpl_vars['v']->value['pk_atlas_main'];?>
','<?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
')"></i>&nbsp; <i class="icon-trash" onclick="atlas_del('<?php echo $_smarty_tpl->tpl_vars['v']->value['pk_atlas_main'];?>
')"></i>
			    		  </span>
			    	</a>
			    	</li>
			    <?php }?>
			  <?php } ?>
			  </ul>
			</nav>
		</div>
		<div class="col-md-9">
	     <div class="row" style="margin-top:20px;">
	     	<div class="col-md-2">
	     		<div class="checkbox">
	     		  <label>
	     		    <input type="checkbox" onclick="setCheck(this,'project_checkbox')">全选
	     		  </label>
	     		</div>
	     	</div>
	     	<div class="col-md-3" style="margin-left: -75px;">
	     		<select class="form-control" id="atlas_select">
	     		  <option value="0">移动到其他图册</option>
	     		  <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['atlas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
	     		  <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['pk_atlas_main'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</option>
	     		  <?php } ?>
	     		</select>
	     	</div>
	     </div>
	     <div class="list_wrap">
	     	<div id="list_wrap_content"></div>
	     	<div id="pager_wrap"></div>
		 </div>
		</div>
	</div>
</div>
<!--评论框-->
<div class="main_wrap" id="comment_wrap" style="display:none">
		<div class="row">
			<div class="col-md-1">
				<strong style="font-size:18px;cursor:pointer;" class="text-primary" onclick="hidecomment()"><i class="icon-reply"></i>&nbsp;返回</strong>
			</div>
			<div class="col-md-3">
				共 <strong style="font-size:18px;"  id="comment_count"></strong> 条评论
			</div>
			<div class="col-md-2 col-md-offset-5">
				<input type="text" id="content" class="form-control"  placeholder="内容">
			</div>
			<div class="col-md-1 ">
				<button class="btn btn-info" onclick="list_comments(1,false)">搜索</button>
			</div>
		</div>
		<div class="row" style="margin-top:30px;">
			<div class="col-md-12">
				<table class="table table-hover">
				  <thead>
				    <tr>
					  <th>#</th>
				      <th >头像</th>
				      <th>昵称</th>
				      <th>内容</th>
				      <th>评论时间</th>
				      <th>性别</th> 
				      <th>省份</th>
				      <th>城市</th>
				      <th>操作</th>
				    </tr>
				  </thead>
				  <tbody>
				  </tbody>
				</table>
			</div>
		</div>
		<div id="comment_pager_wrap" style="text-align:center"></div>
</div>
<!--评论框end-->

<!--新建图册弹框-->
<div class="modal fade" id="atlas_modal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">关闭</span></button>
        <h4 class="modal-title">新增图册</h4>
      </div>
      <div class="modal-body">
      	<input type="hidden" id="atlas_id" value="0">
        <input class="form-control form-focus" autofocus type="text" placeholder="请输入名称" id="atlas_name">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id="atlas_save">保存</button>
      </div>
    </div>
  </div>
</div>



<script>

	$(function(){
		list(1,true);
	})

</script>
<?php }elseif($_smarty_tpl->tpl_vars['act']->value=='videos'){?>
<div class="main_wrap">
	<div class="row">
		<div class="col-md-3">
			共 <strong style="font-size:18px;"><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
</strong> 个作品
		</div>
		<div class="col-md-3">
	      <div class="input-group date form-date" data-date="" data-date-format="dd MM yyyy"  data-link-format="yyyy-mm-dd">
	        <input class="form-control" size="16" id="time_s"  type="text" value="" readonly="" placeholder="开始时间" >
	        <span class="input-group-addon"><span class="icon-remove"></span></span>
	        <span class="input-group-addon"><span class="icon-calendar"></span></span>
	      </div>
		</div>
		<div class="col-md-3">
			 <div class="input-group date form-date" data-date="" data-date-format="dd MM yyyy"  data-link-format="yyyy-mm-dd">
		        <input class="form-control" size="16" id="time_e"  type="text" value="" readonly="" placeholder="结束时间" >
		        <span class="input-group-addon"><span class="icon-remove"></span></span>
		        <span class="input-group-addon"><span class="icon-calendar"></span></span>
			</div>
		</div>
		<div class="col-md-2">
			<input type="text" id="vname" class="form-control"  placeholder="作品名">
		</div>
		<div class="col-md-1">
			<button class="btn btn-info" onclick="list_videos(1)">搜索</button>
		</div>
	</div>
	<div class="row" style="margin-top:30px;">
		<div class="col-md-12">
			 <div class="list_wrap">
		     	<div id="list_wrap_content"></div>
		     	<div id="pager_wrap"></div>
			</div>
		</div>
	</div>
</div>
<script>
	$(function(){
		list_videos(1);
	})
</script>

<?php }?>
<!--分享框-->
<div class="modal fade" id="fx_modal">
  <div class="modal-dialog">
    <div class="modal-content">
    	<div class="modal-header">
    	       <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">关闭</span></button>
    	       <h4 class="modal-title">手机扫描二维码分享给朋友：</h4>
    	   </div>
    	     <div class="modal-body" style="text-align:center">
    	     	<img id="fx_img" src="" width="200" height="200">
    	     	<div class="row" style="margin-top: 15px">
    	     	    <label class="col-md-2 control-label">作品地址</label>
    	     	    <div class="col-md-10">
    	     	        <input type="text" class="form-control" id="workslocation" name="videoname" value="">
    	     	    </div>
    	     	    
    	     	</div>
    	     	<div class="row" style="margin-top: 15px">
    	     	    <label class="col-md-2 control-label">嵌入到网站</label>

    	     	    <div class="col-md-10">
    	     	        <input type="text" class="form-control" id="web_site" name="web_site"  frameborder="no" border="0" >
    	     	    </div>
    	     	</div>
    	     	 <div class="row" style="margin-top: 15px">
    	     	    <label class="col-md-2 control-label">嵌入到论坛</label>

    	     	    <div class="col-md-10">
    	     	        <input type="text" class="form-control" id="forum" name="forum"  frameborder="no" border="0" >
    	     	    </div>
    	     	</div>
    	     </div>
    </div>
  </div>
</div>

</div>


<script src="/static/js/jquery.zclip.min.js"></script>
<script>
var cdn_host = "<?php echo $_smarty_tpl->tpl_vars['_lang']->value['cdn_host'];?>
";
var host =  "<?php echo $_smarty_tpl->tpl_vars['_lang']->value['host'];?>
";
var pageSize = 10;
var comment_c_pid;

$(function(){

	$(".form-date").datetimepicker({	
	    language:  "zh-CN",
	    weekStart: 1,
	    todayBtn:  1,
	    autoclose: 1,
	    todayHighlight: 1,
	    startView: 2,
	    minView: 2,
	    forceParse: 0,
	    format: "yyyy-mm-dd"
	});
	$("#atlas_nav .altlas_name").click(function(){
		var $li = $(this).parents('li');
		if(!$li.hasClass("atlas_active")){
			$li.siblings().removeClass("atlas_active");
			$li.addClass("atlas_active");
		}
		list(1,true);
	})

	$("#atlas_save").click(function(){
		$(this).attr("disabled", true);
		var name = $.trim($("#atlas_name").val());
		if(name.length<=0||name.length>200){
			alert_notice("请输入0到200长度的名称！");
			return false;
		}
		$.post("/member/project",{
			'act':'atlas_update',
			'name':name,
			'atlas_id':$("#atlas_id").val()
		},function(result){
			result = eval("("+result+")");
			if (result.flag) {
				alert_notice("操作成功","success");
				setTimeout(function(){
					window.location.reload();
				},1000);
			}else{
				alert_notice(result.msg);
				$("#atlas_modal").modal('hide');
			}
		})
		$("#atlas_save").removeAttr('disabled');

	});
	$("#atlas_select").change(function(){
		var atlas_id = $(this).val();
		if (atlas_id<=0) {
			return false;
		}
		var pids =new Array;
		$("input[name='project_checkbox']").each(function(){
			if($(this).is(':checked')){
				pids.push($(this).data("pid"));
			}
		});
		if(pids.length==0){
			alert_notice("请先勾选要移动的项目");
			return false;
		}
		$.post("/member/project",{
			"act":"move_project",
			"atlas_id":atlas_id,
			"pids":JSON.stringify(pids)
		},function(result){
			result = eval("("+result+")");
			if (result.flag) {
				alert_notice("操作成功","success");
				window.location.reload();
			}else{
				alert_notice(result.msg);
			}			
		})
	});
});
function list(currentPage,reset){
	var obj = alert_notice("页面加载中...",'success');
	var atlas_id = $("#atlas_nav .atlas_active").data("atlasid");
	var name , time_s,time_e;
	if(!reset){
		name = $.trim($("#name").val());
		time_s = $("#time_s").val();
		time_e = $("#time_e").val();
		if(time_s!=""&&time_e==""){
			alert_notice("请选择结束时间");
			return false;
		}
		if(time_s==""&&time_e!=""){
			alert_notice("请选择开始时间");
			return false;
		}
   }else{
 		$("#name").val("");
 		$("#time_s").val("");
 		$("#time_e").val("");
   }
   $("#list_wrap_content").html("");
   $.post("/member/project",{
   		"act":"list_data",
   		"pageSize":pageSize,
   		"page":currentPage,
   		"name":name,
   		"atlas":atlas_id,
   		"time_s":time_s,
   		"time_e":time_e
   },function(res){
   		var res = eval("("+res+")");
   		var h = "",data = res.list;
   		if (data.length==0) {
   			h='<span style="width:100px;text-align:center;margin-left:40%;margin-top:50px;font-size:16px;display:inline-block">没有结果!</span>';
			$("#pager_wrap").html("");
   		}else{
	   		for (var i = 0; i <data.length; i++) {
	   			var o = data[i];
	   			h+='<div class="items">'+
			  '<div class="item">'+
			    '<div class="item-content">'+
			    	'<div class=pull-left><input type="checkbox" style="margin:20px 10px 0 0" name="project_checkbox" data-pid="'+o.pk_works_main+'"></div>'+
			    	'<div class="pull-left">'+
			    		'<img src="'+o.thumb_path+'" width="60" height="60" class="img-rounded" >'+
			    	'</div>'+
			    	'<div class="pull-left works_intro" >'+
			    		'<a href="/tour/'+o.view_uuid+'" class="works_name" target="_blank">'+o.name+'</a>'+
			    		'<a href="/tour/'+o.view_uuid+'" class="works_preview" target="_blank">预览</a>'+
			    		'<div class="text-muted">'+
			    			'<span>'+o.create_time+'</span>'+
			    			'&nbsp;&nbsp;'+
			    			'<span><i class="icon icon-thumbs-o-up"></i>&nbsp;'+o.praised_num+'</span>&nbsp;&nbsp;'+
			    			'<span><i class="icon icon-eye-open"></i>&nbsp;'+o.browsing_num+'</span>'+
			    		'</div>'+
			    	'</div>'+
			    	'<div class="pull-right works_edit">'+
			    		'<span><a onclick="fenxiang(\''+o.view_uuid+'\')">分享</a></span>'+
			    		'<span><a onclick="showcomment('+o.pk_works_main+')">说一说</a></span>'+
			    		'<span><a href="/edit/pic?pid='+o.pk_works_main+'">编辑</a></span>'+
			    		'<span><a onclick="works_del('+o.pk_works_main+')">删除</a></span>'+
			    	'</div>'+
			   ' </div>'+
			 ' </div>'+
			'</div>';
	   		}
   			var pg = new Page('list',res.pageCount,res.currentPage);
	   		$("#pager_wrap").html(pg.printHtml());
  	 	}
   		$("#list_wrap_content").html(h);
   		pageSize = res.pageSize;
   		obj.hide();
   })
}

function list_comments(currentPage,reset){
	var obj = alert_notice("评论加载中...",'success');
	var content;
	if (!reset) {
		content = $("#content").val();
	}else{
		$("#content").val("");
	}
	$.post("/member/comment",{
		"act":"list",
		"pageSize":pageSize,
   		"currentPage":currentPage,
   		"pid":comment_c_pid,
   		"content":content
	},function(res){
		var res = eval("("+res+")");
   		var h = "",data = res.list;
   		$("#comment_count").html(res.total);
   		if (data.length==0) {
   			//TODO
   		}else{
   			for(var i=0 ; i<data.length;i++){
   				var o = data[i];
				h+='<tr>'+
					'<td><input type="checkbox" name="comment_checkbox"></td>'+
					'<td><img src="'+o.head_img+'" width="40"></td>'+
					'<td>'+o.nickname+'</td>'+
					'<td>'+o.content+'</td>'+
					'<td>'+o.add_time+'</td>'+
					'<td>'+o.sex+'</td>'+
					'<td>'+o.province+'</td>'+
					'<td>'+o.city+'</td>'+
					'<td><span class="text-danger" style="cursor:pointer" onclick="comment_del_one('+o.id+')"><i class="icon-trash"></i></span></td>'+
					'</tr>';
   			}
   			var pg = new Page('list_comments',res.pageCount,res.currentPage);
	   		$("#comment_pager_wrap").html(pg.printHtml());
   		}
   		$("#comment_wrap table tbody").html(h);
   		pageSize = res.pageSize;
   		obj.hide();
	})
}
function showcomment(pid){
	comment_c_pid = pid;
	list_comments(1,true);
	$("#pic_wrap").hide();
	$("#comment_wrap").show();
}
function hidecomment(){
	$("#pic_wrap").show();
	$("#comment_wrap").hide();
}
function list_videos(currentPage,reset){
	var obj = alert_notice("页面加载中...",'success');
	var vname , time_s,time_e;
	if(!reset){
		vname = $.trim($("#vname").val());
		time_s = $("#time_s").val();
		time_e = $("#time_e").val();
		if(time_s!=""&&time_e==""){
			alert_notice("请选择结束时间");
			return false;
		}
		if(time_s==""&&time_e!=""){
			alert_notice("请选择开始时间");
			return false;
		}
   }else{
 		$("#vname").val("");
 		$("#time_s").val("");
 		$("#time_e").val("");
   }
   $("#list_wrap_content").html("");
   $.post("/member/project",{
   		"act":"list_videos",
   		"pageSize":pageSize,
   		"page":currentPage,
   		"vname":vname,
   		"time_s":time_s,
   		"time_e":time_e
   },function(res){
   		var res = eval("("+res+")");
   		var h = "",data = res.list;
   		if (data.length==0) {
   			h='<span style="width:100px;text-align:center;margin-left:40%;margin-top:50px;font-size:16px;display:inline-block">没有结果!</span>';
			$("#pager_wrap").html("");
   		}else{
	   		for (var i = 0; i <data.length; i++) {
	   			var o = data[i];
	   			h+='<div class="items">'+
			  '<div class="item">'+
			    '<div class="item-content">'+
			    	'<div class=pull-left><input type="checkbox" style="margin:20px 10px 0 0" name="project_checkbox" data-pid="'+o.id+'"></div>'+
			    	'<div class="pull-left">'+
			    		'<img src="'+(o.thumb_path?o.thumb_path:"/static/images/play.png")+'" width="60" height="60" class="img-rounded" >'+
			    	'</div>'+
			    	'<div class="pull-left works_intro" >'+
			    		'<a href="'+cdn_host+'video/play.html?vid='+o.id+'" class="works_name" target="_blank">'+o.vname+'</a>&nbsp;&nbsp;&nbsp;&nbsp;'+
			    		(o.state==0?'<span class="text-warning">等待编辑</span>':
			    			(o.flag_publish==0?'<span class="text-danger">未发布</span>':'<span class="text-success">已发布</span>'))+
			    		'<a href="'+cdn_host+'video/play.html?vid='+o.id+'" class="works_preview" target="_blank">预览</a>'+
			    		'<div class="text-muted">'+
			    			'<span>'+o.create_time+'</span>'+
			    			'&nbsp;&nbsp;'+
			    			'<span><i class="icon icon-thumbs-o-up"></i>&nbsp;'+o.praised_num+'</span>&nbsp;&nbsp;'+
			    			'<span><i class="icon icon-eye-open"></i>&nbsp;'+o.browsing_num+'</span>'+
			    		'</div>'+
			    	'</div>'+
			    	'<div class="pull-right works_edit">'+
			    		'<span>排序：<a id="sort_2_'+o.id+'" onclick="sort('+o.id+','+o.user_sort+',2)">'+o.user_sort+'</a></span>'+
			    	    '<span>是否推荐：<a id="recommend_2_'+o.id+'" onclick="tuijian('+o.id+',2)" data-recommend="'+o.user_recommend+'">'+(o.user_recommend==0?"<i class=\"icon-times\"></i>":"<i class=\"icon-check\" style=\"color:#c40000\"></i>")+'</a></span>'+
			    		'<span><a onclick="fenxiang(\''+o.id+'\',\''+(o.cdn_host ? o.cdn_host : host)+'\')">分享</a></span>'+
			    		'<span><a href="/edit/video?vid='+o.id+'">编辑</a></span>'+
			    		'<span><a onclick="video_del('+o.id+')">删除</a></span>'+
			    	'</div>'+
			   ' </div>'+
			 ' </div>'+
			'</div>';
	   		}
   			var pg = new Page('list_videos',res.pageCount,res.currentPage);
	   		$("#pager_wrap").html(pg.printHtml());
  	 	}
   		$("#list_wrap_content").html(h);
   		pageSize = res.pageSize;
   		obj.hide();
   })
}


function atlas_edit(atlas_id,name){
	$("#atlas_id").val(atlas_id);
	$("#atlas_name").val(name);
	$("#atlas_modal").modal('show');
}
function atlas_del(atlas_id){
	bootbox.confirm({
		message:"确定要删除一个分类吗?",
		buttons: {  
            confirm: {  
                label: '确认',  
                className: 'btn-primary'  
            },  
            cancel: {  
                label: '取消',  
                className: 'btn-default'  
            }  
    	},
    	title:"提示：",
    	callback:function(result) {
        	if(result){
    			alert_notice("等待执行...","success",'top',5000);
				$.post("/member/project",{
					'act':'atlas_del',
					'atlas_id':atlas_id
				},function(result){
					result = eval("("+result+")");
					if (result.flag) {
						alert_notice("操作成功","success");
						window.location.reload();
					}else{
						alert_notice(result.msg);
					}
			   })
        	}
		}
	});

}
function sort(id,value,type){
    bootbox.prompt({
      buttons: {
              confirm: {  
                  label: '确认',  
                  className: 'btn-primary'  
              },  
              cancel: {  
                  label: '取消',  
                  className: 'btn-default'  
              }  
          },
          value: value?value:"", 
          title:"排序默认为999,越小越靠前",
          callback:function(result) {
            if (result!=null) {
              result =  parseInt(result);
              if (result<1||result>999) {
                  alert_notice("请输入1到999之间的值");
                  return false;
              }else{
                  $.post("/member/project",{
                          "id":id,
                          "type":type,
                          "user_sort":result,
                          "edit":1,
                          'act':"edit_sort_recommend"
                  },function(res){
                     res = eval("("+res+")");
                     if (res.status==1) {
                        alert_notice("修改成功","success");
                       $("#sort_"+type+"_"+id).text(result);
                     }else{
                        alert_notice(res.msg);
                    }
                  })
            }
          }
       }
  })
}
function tuijian(id,type){
	$.post("/member/project",{
          "id":id,
          "type":type,
          "edit":2,
          'act':"edit_sort_recommend"
      },function(res){
         res = eval("("+res+")");
         if (res.status==1) {
            alert_notice("修改成功","success");
            var html = res.recommend==0?'<i class="icon-times"></i>':'<i class="icon-check" style="color:#c40000;"></i>';
           $("#recommend_"+type+"_"+id).html(html);
         }else{
            alert_notice(res.msg);
        }
      })
}
function comment_del_one(oid){
	var params = new Array();
	params.push(oid);
	do_comment_del(params);
}

function do_comment_del(params){
		bootbox.confirm({
		message:"确定要删除该评论吗?",
		buttons: {  
            confirm: {  
                label: '确认',  
                className: 'btn-primary'  
            },  
            cancel: {  
                label: '取消',  
                className: 'btn-default'  
            }  
    	},
    	title:"提示：",
    	callback:function(result) {
        	if(result){
    			alert_notice("等待执行...","success",'top',5000);
				$.post("/member/comment",{
					"act":"delete",
					"params":JSON.stringify(params)
				},function(result){
					result = eval("("+result+")");
					if (result.flag) {
						alert_notice("操作成功","success");
						list_comments(1);
					}else{
						alert_notice(result.msg);
					}	
				})
        	}
		}
	});
}
function works_del(pid){
	bootbox.confirm({
		message:"确定要删除该项目吗?",
		buttons: {  
            confirm: {  
                label: '确认',  
                className: 'btn-primary'  
            },  
            cancel: {  
                label: '取消',  
                className: 'btn-default'  
            }  
    	},
    	title:"提示：",
    	callback:function(result) {
        	if(result){
    			alert_notice("等待执行...","success",'top',5000);
				$.post("/member/project",{
					"act":"works_del",
					"pid":pid
				},function(result){
					result = eval("("+result+")");
					if (result.flag) {
						alert_notice("操作成功","success");
						window.location.reload();
					}else{
						alert_notice(result.msg);
					}	
				})
        	}
		}
	});
}
function video_del(vid){
	bootbox.confirm({
		message:"确定要删除该项目吗?",
		buttons: {  
            confirm: {  
                label: '确认',  
                className: 'btn-primary'  
            },  
            cancel: {  
                label: '取消',  
                className: 'btn-default'  
            }  
    	},
    	title:"提示：",
    	callback:function(result) {
        	if(result){
    			alert_notice("等待执行...","success",'top',5000);
				$.post("/member/project",{
					"act":"video_del",
					"vid":vid
				},function(result){
					result = eval("("+result+")");
					if (result.flag) {
						alert_notice("操作成功","success");
						window.location.reload();
					}
					else{
						alert_notice(result.msg);
					}
				})
        	}
		}
	});
}
function fenxiang(data_id,data_host){
	var text;
	var qrcode_src;
	if(data_host){
		text = data_host+"video/play.html?vid="+data_id;
		qrcode_src = "/qrcode.php?act=video&vid="+data_id;
	}
	else{
		text = host+"/tour/"+data_id;
		qrcode_src = "/qrcode.php?viewid="+data_id;
	}
	$("#fx_img").attr("src",qrcode_src);
	$("#fx_modal").modal("show");
	$("#workslocation").val(text);
	$("#web_site").val('<iframe src="' + text + '" frameborder="no" border="0" style="width: 1000px;height: 600px;" allowfullscreen="true"></iframe>');
	$("#forum").val('<iframe src="' + text + '" frameborder="no" border="0" style="width: 1000px;height: 600px;"></iframe>');
}

</script>
<?php }} ?>