<?php /* Smarty version Smarty-3.1.7, created on 2021-07-21 15:37:57
         compiled from "D:/VR/VR0002/template\default\member\ring_around.lbi" */ ?>
<?php /*%%SmartyHeaderCode:2096860f7ced5c38591-70322173%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3c209978145e11e5247fbf13eb6d43ef2e9c6cd2' => 
    array (
      0 => 'D:/VR/VR0002/template\\default\\member\\ring_around.lbi',
      1 => 1530676515,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2096860f7ced5c38591-70322173',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'act' => 0,
    '_lang' => 0,
    'up_url' => 0,
    'total' => 0,
    'host' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_60f7ced5d496b',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60f7ced5d496b')) {function content_60f7ced5d496b($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['act']->value=='doAdd'){?>
	<?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['_lang']->value['moban'])."/library/member_paths.lbi", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<link rel="stylesheet" href="/static/css/fileinput.min.css">
	<link rel="stylesheet" href="/static/css/chosen.min.css">
	<div class="container">
		
		<div class="update_div" style="min-height: 600px;margin-left: auto;margin-right: auto;">
			
			<ul class="nav nav-tabs">
			  <li class="active"><a href="###" data-target="#ring_around" data-toggle="tab">720环物</a></li>
			</ul>
			<div class="tab-content" style="background: #fff">
			  <div class="tab-pane fade active in" id="ring_around">
			     <div class="row" style="margin-top:20px">
			        <label for="rname" class="col-sm-2">项目名称</label>
			        <div class="col-md-6 col-sm-10">
			          <input type="text" class="form-control" id="rname" name="rname" placeholder="请输入长度30个字符以内的名称">
			        </div>
			      </div>
			       <div class="row" style="margin-top:20px">
			        <label for="link" class="col-sm-2">详情链接</label>
			        <div class="col-md-6">
			          <input name="link" id="link"  rows="5" class="form-control" placeholder="项目的详情链接，有则填写可以正常访问的URL，无则不填">
			        </div>
			      </div>
			      <div class="row" style="margin-top:20px">
			        <label for="vcover" class="col-sm-2">上传封面</label>
			        <div class="col-md-6">
					<input id="FImgUpload" name="file" type="file" multiple="" accept="image/jpeg,image/png" class="">
			        </div>
			      </div>
			      <div class="row" style="margin-top:20px">
			        <label for="vcover" class="col-sm-2">上传背景</label>
			        <div class="col-md-6">
					<input id="BImgUpload" name="file" type="file" multiple="" accept="image/jpeg,image/png" class="">
			        </div>
			      </div>
				  <div class="row" style="margin-top:20px">
			        <label for="vcover" class="col-sm-2">obj模型</label>
			        <div class="col-md-1">
			         <button class="btn" id="objupload" name="video">选择obj</button>
			        </div>
			        <div class="col-md-3">
			        	<span class="text-muted">有，且只有有一个obj模型</span>
			        </div>
			      </div>
			      <div class="row" style="margin-top:20px">
					<div class="col-md-8 col-md-offset-2 ">
		                <table class="table table-striped table-hover text-left" id="obj_up_table" style="margin-top:40px; display:none;">
		                    <thead>
		                      <tr>
		                        <th class="col-md-4">文件名</th>
		                        <th class="col-md-2">大小</th>
		                        <th class="col-md-6">进度</th>
		                      </tr>
		                    </thead>
		                    <tbody id="obj_UploadProgress">
		                    </tbody>
		                </table>
		            </div>
			      </div>
			      <div class="row" style="margin-top:20px">
			        <label for="vcover" class="col-sm-2">mtl材质</label>
			        <div class="col-md-1">
			         <button class="btn" id="mtlupload" name="audio">选择mtl</button>
			        </div>
			        <div class="col-md-3">
			        	<span class="text-muted">有，且只有有一个mtl材质</span>
			        </div>
			      </div>
			      <div class="row" style="margin-top:20px">
					<div class="col-md-8 col-md-offset-2 ">
		                <table class="table table-striped table-hover text-left" id="mtl_up_table" style="margin-top:40px; display:none;">
		                    <thead>
		                      <tr>
		                        <th class="col-md-4">文件名</th>
		                        <th class="col-md-2">大小</th>
		                        <th class="col-md-6">进度</th>
		                      </tr>
		                    </thead>
		                    <tbody id="mtl_UploadProgress">
		                    </tbody>
		                </table>
		            </div>
			      </div>
			      <div class="row" style="margin-top:20px">
			        <label for="vcover" class="col-sm-2">背景音乐<small class="text-muted"> (可选) </small></label>
			        <div class="col-md-1">
			         <button class="btn" id="audioupload" name="audio">选择音乐</button>
			        </div>
			        <div class="col-md-3">
			        	<span class="text-muted">ios下会出现有画面没声音的情况，请上传一个<span style="color: #c40000">mp3</span>或<span style="color: #c40000">m4a</span>格式音频文件</span>
			        </div>
			      </div>
			      <div class="row" style="margin-top:20px">
					<div class="col-md-8 col-md-offset-2 ">
		                <table class="table table-striped table-hover text-left" id="audio_up_table" style="margin-top:40px; display:none;">
		                    <thead>
		                      <tr>
		                        <th class="col-md-4">文件名</th>
		                        <th class="col-md-2">大小</th>
		                        <th class="col-md-6">进度</th>
		                      </tr>
		                    </thead>
		                    <tbody id="audio_UploadProgress">
		                    </tbody>
		                </table>
		            </div>
			      </div>
			      <div class="row" style="margin-top:20px">
			  	    	<div class="col-md-12">
			  	    		<input id="objImgUpload" name="file" type="file" multiple="" accept="image/jpeg,image/png" class="">
			  	    	</div>
			  	   </div> 
			      <div class="row" style="margin-top:20px">
			        <div class="col-md-12">
			          <button id="publish_ring" class="btn btn-primary btn-block">发布</button>
			        </div>
			      </div>
			  </div>
			</div>
		</div>
	</div>

	<!--上传成功弹框-->
	<div class="modal fade" id="myModal">
		<div class="modal-dialog">
		  <div class="modal-content">
		    <div class="modal-header">
		      <!-- <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">关闭</span></button> -->
		      <h4 class="modal-title">提示：</h4>
		    </div>
		    <div class="modal-body">
		      <p class="text-muted"><img src="/static/images/loading.gif" alt="">上传完成，大概需要2~5分钟，请等待后台处理...</p>
		    </div>
		    <div class="modal-footer">
		      <button type="button" class="btn btn-primary"  style="display:none" onclick="javascript:window.location.href='/member/project'">确定</button>
		    </div>
		  </div>
		</div>
	</div>
	<script>
		var up_url = "<?php echo $_smarty_tpl->tpl_vars['up_url']->value;?>
";
		var qn_video_token;
		var ringParams={};
		ringParams.obj = new Array();
		ringParams.mtl = new Array();
		var remainTime = Date.parse(new Date());
		// console.log(remainTime);
	</script>
	<script language="JavaScript" type="text/javascript" src="/static/js/fileinput-v4.34.js"></script>
	<script language="JavaScript" type="text/javascript" src="/static/js/fileinput_locale_zh.js"></script>
	<script language="JavaScript" type="text/javascript" src="/static/js/chosen.js"></script>
	<script language="JavaScript" type="text/javascript" src="/static/js/plupload/moxie.js"></script>
	<script language="JavaScript" type="text/javascript" src="/static/js/plupload/plupload.dev.js"></script>
	<script language="JavaScript" type="text/javascript" src="/static/js/kr/ring_around.js"></script>
	
	<script>
		var obj_key="";
		function doRingCommint(){
			console.log(ringParams);
			// console.log(JSON.stringify(ringParams));
			var obj = alert_notice("等待执行...","success",'top',0);
	        	$.post("/member/ring_around",{
					"act":"doAdd",
					"ringParams":ringParams,
					},function(result){
						obj.hide();
						result = eval("("+result+")");
						if (result.flag) {
							alert_notice("发布成功","success");
							window.location.href ="/member/ring_around";
						}else{
							alert_notice(result.msg);
						}
			})
		}
		//obj文件上传
		function set_obj_upload_param(obj,up,filename,ret,url){
		    if (ret == false){
		        obj_token ={};
		    	$.ajax({
		    		url:"/get_token.php",
		    		data:{"act":'ring_around','remainTime':remainTime},
		    		async: false,
		    		success:function(result){
		    		 	result = eval("("+result+")");
		    		 	obj_token.prefix= result.prefix;
		    		 	obj_token.type=result.type;
		    		 	if (result.type=="1") {
		    		 		//七牛
		                	obj_token.token=result.token;
		    		 	}
		    		 	else if (result.type=="2") {
		    		 		//OSS
		    		 		obj_token.policy = result.policy;
		    		 		obj_token.OSSAccessKeyId = result.accessid;
		    		 		obj_token.host = result.host;
		    		 		obj_token.signature = result.signature;
				 		}
				 		else if(result.type=="0"){
				 			//本地
				 		}
		    		}
		    	})
		    }else{
		        obj_key = obj_token.prefix+filename;
		        var new_multipart_params={
					'key' : obj_key,
		            'prefix':obj_token.prefix,
		            'success_action_status':'200' //让服务端返回200,不然，默认会返回204
		        };

		        if (obj_token.type=="1") {
		        	//七牛
		        	new_multipart_params.token=obj_token.token;
		        }
		        else if (obj_token.type=="2") {
		        	//OSS
		            new_multipart_params.policy= obj_token.policy;
		            new_multipart_params.OSSAccessKeyId=obj_token.OSSAccessKeyId;
		            new_multipart_params.host= obj_token.host;
		            new_multipart_params.signature=obj_token.signature
		        }
		        else if (obj_token.type=="0") {
		        	//本地
		        }

			    up.setOption({
			        'url': url,
			        'multipart_params': new_multipart_params
			    });
			}
		}
		var obj_uploader = new plupload.Uploader({
			    runtimes : 'html5,flash,silverlight,html4',
			    browse_button : 'objupload',
			    multi_selection: false,
			    max_file_count:1,
			    flash_swf_url: '/static/js/plupload/Moxie.swf',
			    silverlight_xap_url : '/static/js/plupload/Moxie.xap',
			    url : up_url,
			    act : 'ring_around',
			    filters: {
		            mime_types : [ //只允许上传图片
		            { title : "", extensions : "obj" },
		            ],
		            max_file_size : '10M', //
		            prevent_duplicates : true //不允许选取重复文件
		        },
			    init: {
			        PostInit: function(up) {
			        	set_obj_upload_param(obj_uploader, up, '', false, up_url);
			        },
			        FilesAdded: function(up, files) {
			        	if (files.length>1) {
			        		alert_notice("最多上传一个obj文件");
			        		return false;
			        	}
						var file= files[0];
						$("#obj_UploadProgress").append('<tr>'+
		                        '<th class="col-md-4">'+file.name+'</th>'+
		                        '<th class="col-md-2">'+(file.size/1024).toFixed(1)+' KB</th>'+
		                        '<th class="col-md-6"><div class="progress progress-striped" id="'+file.id+'"><div class="progress-bar progress-bar-success" style="width: 0%"></div><span class="text-muted" style="font-size:11px;font-weight:normal;">点击下方发布按钮开始上传</span></div></th>'+
		                      	'</tr>');
						$("#obj_up_table").show();
			            return false;
			        },
			        BeforeUpload: function(up, file) {
			            $("#objoupload").css('pointer-events','none');
			            console.log(file);
			            set_obj_upload_param(obj_uploader, up, file.name, true, up_url);
			            console.log(file);
			        },

			        UploadProgress: function(up, file) {
			            var d = document.getElementById(file.id);
			            d.getElementsByTagName('span')[0].innerHTML = '  ' + file.percent + "%";
			            var progBar = d.getElementsByTagName('div')[0];
			            progBar.style.width= file.percent+'%';
			            progBar.setAttribute('aria-valuenow', file.percent);
			        },
			        FileUploaded: function(up, file, info) {
			        	if (info.status == 200 )
			            {
			            	ringParams.obj = obj_key; 
			            	mtl_uploader.start();
			            }else{
			            	alert_notice('上传失败');
			            }
			        },
			        Error: function(up, err) {
			            if (err.code == -600) {
			                alert("选择的文件太大了,不能超过10M");
			            }
			            else if (err.code == -601) {
			                 alert("只能上传mp3或m4a格式的文件");
			            }
			            else if (err.code == -602) {
			                 alert("这个文件已经上传过一遍了");
			            }
			            else
			            {
			                alert("上传异常");
			            }
			        }
			    }
			 });
			 obj_uploader.init();

			 //mtl文件上传
			function set_mtl_upload_param(obj,up,filename,ret,url){
			    if (ret == false){
			        mtl_token ={};
			    	$.ajax({
			    		url:"/get_token.php",
			    		data:{"act":'ring_around','remainTime':remainTime},
			    		async: false,
			    		success:function(result){
			    		 	result = eval("("+result+")");
			    		 	mtl_token.prefix= result.prefix;
			    		 	mtl_token.type=result.type;
			    		 	if (result.type=="1") {
			    		 		//七牛
			                	mtl_token.token=result.token;
			    		 	}
			    		 	else if (result.type=="2") {
			    		 		//OSS
			    		 		mtl_token.policy = result.policy;
			    		 		mtl_token.OSSAccessKeyId = result.accessid;
			    		 		mtl_token.host = result.host;
			    		 		mtl_token.signature = result.signature;
					 		}
					 		else if(result.type=="0"){
					 			//本地
					 		}
			    		}
			    	})
			    }else{
			        mtl_key = mtl_token.prefix+filename;
			        var new_multipart_params={
						'key' : mtl_key,
			            'prefix':mtl_token.prefix,
			            'success_action_status':'200' //让服务端返回200,不然，默认会返回204
			        };
			        if (mtl_token.type=="1") {
			        	//七牛
			        	new_multipart_params.token=mtl_token.token;
			        }
			        else if (mtl_token.type=="2") {
			        	//OSS
			            new_multipart_params.policy= mtl_token.policy;
			            new_multipart_params.OSSAccessKeyId=mtl_token.OSSAccessKeyId;
			            new_multipart_params.host= mtl_token.host;
			            new_multipart_params.signature=mtl_token.signature
			        }
			        else if (mtl_token.type=="0") {
			        	//本地
			        }

				    up.setOption({
				        'url': url,
				        'multipart_params': new_multipart_params
				    });
				}
			}
			var mtl_uploader = new plupload.Uploader({
				    runtimes : 'html5,flash,silverlight,html4',
				    browse_button : 'mtlupload',
				    multi_selection: false,
				    max_file_count:1,
				    flash_swf_url: '/static/js/plupload/Moxie.swf',
				    silverlight_xap_url : '/static/js/plupload/Moxie.xap',
				    url : up_url,
				    filters: {
			            mime_types : [ //只允许上传图片
			            { title : "", extensions : "mtl" },
			            ],
			            max_file_size : '10M', //
			            prevent_duplicates : true //不允许选取重复文件
			        },
				    init: {
				        PostInit: function(up) {
				        	set_mtl_upload_param(obj_uploader, up, '', false, up_url);
				        },
				        FilesAdded: function(up, files) {
				        	if (files.length>1) {
				        		alert_notice("最多上传一个mtl文件");
				        		return false;
				        	}
							var file= files[0];
							$("#mtl_UploadProgress").append('<tr>'+
			                        '<th class="col-md-4">'+file.name+'</th>'+
			                        '<th class="col-md-2">'+(file.size/1024).toFixed(1)+' KB</th>'+
			                        '<th class="col-md-6"><div class="progress progress-striped" id="'+file.id+'"><div class="progress-bar progress-bar-success" style="width: 0%"></div><span class="text-muted" style="font-size:11px;font-weight:normal;">点击下方发布按钮开始上传</span></div></th>'+
			                      	'</tr>');
							$("#mtl_up_table").show();
				            return false;
				        },
				        BeforeUpload: function(up, file) {
				            $("#mtloupload").css('pointer-events','none');
				            set_mtl_upload_param(obj_uploader, up, file.name, true, up_url);
				        },

				        UploadProgress: function(up, file) {
				            var d = document.getElementById(file.id);
				            d.getElementsByTagName('span')[0].innerHTML = '  ' + file.percent + "%";
				            var progBar = d.getElementsByTagName('div')[0];
				            progBar.style.width= file.percent+'%';
				            progBar.setAttribute('aria-valuenow', file.percent);
				        },
				        FileUploaded: function(up, file, info) {
				        	if (info.status == 200 )
				            {
				            	ringParams.mtl = mtl_key; 
				            	if(audio_uploader.files.length<=0){
									$("#BImgUpload").fileinput("upload");
				            	}else{
				            		audio_uploader.start();
				            	}
				            }else{
				            	alert_notice('上传失败');
				            }
				        },
				        Error: function(up, err) {
				            if (err.code == -600) {
				                alert("选择的文件太大了,不能超过10M");
				            }
				            else if (err.code == -601) {
				                 alert("只能上传mp3或m4a格式的文件");
				            }
				            else if (err.code == -602) {
				                 alert("这个文件已经上传过一遍了");
				            }
				            else
				            {
				                alert("上传异常");
				            }
				        }
				    }
				 });
				 mtl_uploader.init();	
		var obj_key="";
		function doRingCommint(){
			console.log(ringParams);
			// console.log(JSON.stringify(ringParams));
			var obj = alert_notice("等待执行...","success",'top',0);
	        	$.post("/member/ring_around",{
					"act":"doAdd",
					"ringParams":ringParams,
					},function(result){
						obj.hide();
						result = eval("("+result+")");
						if (result.flag) {
							alert_notice("发布成功","success");
							window.location.href ="/member/ring_around";
						}else{
							alert_notice(result.msg);
						}
			})
		}
		//音频文件上传
		function set_audio_upload_param(obj,up,filename,ret,url){
		    if (ret == false){
		        audio_token ={};
		    	$.ajax({
		    		url:"/get_token.php",
		    		data:{"act":'ring_around','remainTime':remainTime},
		    		async: false,
		    		success:function(result){
		    		 	result = eval("("+result+")");
		    		 	audio_token.prefix= result.prefix;
		    		 	audio_token.type=result.type;
		    		 	if (result.type=="1") {
		    		 		//七牛
		                	audio_token.token=result.token;
		    		 	}
		    		 	else if (result.type=="2") {
		    		 		//OSS
		    		 		audio_token.policy = result.policy;
		    		 		audio_token.OSSAccessKeyId = result.accessid;
		    		 		audio_token.host = result.host;
		    		 		audio_token.signature = result.signature;
				 		}
				 		else if(result.type=="0"){
				 			//本地
				 		}
		    		}
		    	})
		    }else{
		        audio_key = audio_token.prefix+filename;
		        var new_multipart_params={
					'key' : audio_key,
		            'prefix':audio_token.prefix,
		            'success_action_status':'200' //让服务端返回200,不然，默认会返回204
		        };

	         if (audio_token.type=="1") {
		        	//七牛
		        	new_multipart_params.token=audio_token.token;
		        }
		        else if (audio_token.type=="2") {
		        	//OSS
		            new_multipart_params.policy= audio_token.policy;
		            new_multipart_params.OSSAccessKeyId=audio_token.OSSAccessKeyId;
		            new_multipart_params.host= audio_token.host;
		            new_multipart_params.signature=audio_token.signature
		        }
		        else if (audio_token.type=="0") {
		        	//本地
		        }


			    up.setOption({
			        'url': url,
			        'multipart_params': new_multipart_params
			    });
			}
		}
		var audio_uploader = new plupload.Uploader({
			    runtimes : 'html5,flash,silverlight,html4',
			    browse_button : 'audioupload',
			    multi_selection: false,
			    max_file_count:1,
			    flash_swf_url: '/static/js/plupload/Moxie.swf',
			    silverlight_xap_url : '/static/js/plupload/Moxie.xap',
			    url : up_url,
			    filters: {
		            mime_types : [ //只允许上传图片
		            { title : "audio files", extensions : "m4a,mp3" },
		            ],
		            max_file_size : '10M', //
		            prevent_duplicates : true //不允许选取重复文件
		        },
			    init: {
			        PostInit: function(up) {
			        	set_audio_upload_param(audio_uploader, up, '', false, up_url);
			        },
			        FilesAdded: function(up, files) {
			        	if (files.length>1) {
			        		alert_notice("最多上传一个音频");
			        		return false;
			        	}
						var file= files[0];
						$("#audio_UploadProgress").append('<tr>'+
		                        '<th class="col-md-4">'+file.name+'</th>'+
		                        '<th class="col-md-2">'+(file.size/1024).toFixed(1)+' KB</th>'+
		                        '<th class="col-md-6"><div class="progress progress-striped" id="'+file.id+'"><div class="progress-bar progress-bar-success" style="width: 0%"></div><span class="text-muted" style="font-size:11px;font-weight:normal;">点击下方发布按钮开始上传</span></div></th>'+
		                      	'</tr>');
						$("#audio_up_table").show();
			            return false;
			        },
			        BeforeUpload: function(up, file) {
			            $("#audioupload").css('pointer-events','none');
			            set_audio_upload_param(audio_uploader, up, file.name, true, up_url);
			        },

			        UploadProgress: function(up, file) {
			            var d = document.getElementById(file.id);
			            d.getElementsByTagName('span')[0].innerHTML = '  ' + file.percent + "%";
			            var progBar = d.getElementsByTagName('div')[0];
			            progBar.style.width= file.percent+'%';
			            progBar.setAttribute('aria-valuenow', file.percent);
			        },
			        FileUploaded: function(up, file, info) {
			        	if (info.status == 200 )
			            {
			            	ringParams.audio = audio_key; 
			            	$("#BImgUpload").fileinput("upload");
			            }else{
			            	alert_notice('上传失败');
			            }
			        },
			        Error: function(up, err) {
			            if (err.code == -600) {
			                alert("选择的文件太大了,不能超过10M");
			            }
			            else if (err.code == -601) {
			                 alert("只能上传mp3或m4a格式的文件");
			            }
			            else if (err.code == -602) {
			                 alert("这个文件已经上传过一遍了");
			            }
			            else
			            {
			                alert("上传异常");
			            }
			        }
			    }
			 });
			 audio_uploader.init();		
	</script>
	


<?php }else{ ?>
	<?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['_lang']->value['moban'])."/library/member_paths.lbi", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<div class="container" style="margin-bottom: 20px;">
		<div class="main_wrap">
			<div class="row">
				<div class="col-md-3">
					共 <strong style="font-size:18px;" id="total"><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
</strong> 个作品
					<input type="submit" class="btn btn-primary" style="margin-left: 10px" onclick="ring_around()" value="上传">
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
					<input type="text" id="rname" class="form-control"  placeholder="作品名">
				</div>
				<div class="col-md-1">
					<button class="btn btn-info" onclick="list_obj(1)">搜索</button>
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
	</div>
	<script>
	var host = "<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
";
	function ring_around(){
		window.location.href="/member/ring_around?act=doAdd";
	}
	var pageSize = 10;
	$(function(){
		list_obj(1,true);
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
	})
	function list_obj(currentPage,reset){
		var obj = alert_notice("页面加载中...",'success');
		var rname , time_s,time_e;
		if(!reset){
			rname = $.trim($("#rname").val());
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
	 		$("#rname").val("");
	 		$("#time_s").val("");
	 		$("#time_e").val("");
	   }
	   $("#list_wrap_content").html("");
	   $.post("/member/ring_around",{
	   		"act":"list",
	   		"pageSize":pageSize,
	   		"page":currentPage,
	   		"rname":rname,
	   		"time_s":time_s,
	   		"time_e":time_e
	   },function(res){
	   		var res = eval("("+res+")");
	   		$('#total').text(res.itemCount);
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
				    		'<img src="'+o.img_path+'" width="60" height="60" class="img-rounded" >'+
				    	'</div>'+
				    	'<div class="pull-left works_intro" >'+
				    		'<a href="" class="works_name" target="_blank">'+o.rname+'</a>&nbsp;&nbsp;&nbsp;&nbsp;'+
				    		'<a href="'+host+'ring_around/index.html?id='+o.id+'" class="works_preview" target="_blank">预览</a>'+
				    		'<div class="text-muted">'+
				    			'<span>'+o.createtime+'</span>'+
				    			'&nbsp;&nbsp;'+
				    		'</div>'+
				    	'</div>'+
				    	'<div class="pull-right works_edit">'+
				    		'<span><a href="/edit/ring_around?act=edit&rid='+o.id+'">编辑</a></span>'+
				    		'<span><a onclick="obj_del('+o.id+')">删除</a></span>'+
				    	'</div>'+
				   ' </div>'+
				 ' </div>'+
				'</div>';
		   		}
	   			var pg = new Page('list_obj',res.pageCount,res.currentPage);
		   		$("#pager_wrap").html(pg.printHtml());
	  	 	}
	   		$("#list_wrap_content").html(h);
	   		pageSize = res.pageSize;
	   		obj.hide();
	   })
	}
	function obj_del(id){
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
					$.post("/member/ring_around",{
						'act':'delete',
						'id':id
					},function(result){
						result = eval("("+result+")");
						if (result.status=='1') {
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

	</script>
<?php }?>
<?php }} ?>