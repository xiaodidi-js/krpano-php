<?php /* Smarty version Smarty-3.1.7, created on 2021-07-24 19:35:44
         compiled from "D:/VR/VR0002/template\edit\lib\pic.lbi" */ ?>
<?php /*%%SmartyHeaderCode:2013460dfbbb8c8bc80-52027979%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '91e6b9e16d5f6a1f25dd5d56a39c2928c6bd57c8' => 
    array (
      0 => 'D:/VR/VR0002/template\\edit\\lib\\pic.lbi',
      1 => 1627120342,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2013460dfbbb8c8bc80-52027979',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_60dfbbb8e1fbb',
  'variables' => 
  array (
    'up_url' => 0,
    '_lang' => 0,
    'plugins' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60dfbbb8e1fbb')) {function content_60dfbbb8e1fbb($_smarty_tpl) {?><script>
    var up_url = '<?php echo $_smarty_tpl->tpl_vars['up_url']->value;?>
';
    var global_storage ='<?php echo $_smarty_tpl->tpl_vars['_lang']->value['global_storage'];?>
';
</script>
<script language="JavaScript" type="text/javascript" src="/static/js/datetimepicker.js"></script>
<script language="JavaScript" type="text/javascript" src="/static/js/kr/main_edit.js?v=121801"></script>
<script language="JavaScript" type="text/javascript" src="/static/js/kr/polygonHotSpot.js?v=1.5"></script>
<script language="JavaScript" type="text/javascript" src="/static/js/kr/video_patch.js?v=103102"></script>
<script language="JavaScript" type="text/javascript" src="/static/js/jquery-ui.js"></script>
<script language="JavaScript" type="text/javascript" src="/tour/tour.js"></script>
 <script language="JavaScript" type="text/javascript" src="/static/js/bootstrap-slider.min.js"></script>
<script language="JavaScript" type="text/javascript" src="/static/js/jquery.qrcode-0.12.0.js"></script>
<script language="JavaScript" type="text/javascript" src="/static/js/jquery.rotate.js"></script>
<script language="JavaScript" type="text/javascript" src="/static/js/jquery.zclip.min.js"></script>
<script language="JavaScript" type="text/javascript" src="/static/js/pager.js"></script>
<link href="/static/css/datetimepicker.css" rel="stylesheet">
<link href="/static/css/zui.imgcutter.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="/static/css/bootstrap-slider.min.css">

<div class="works-container">
<div class="container container_works" style="margin-top: 0;">
    <div class="row">
        <div class="col-md-10">
            <ol class="breadcrumb clear_padding_left">
                <li><a href="/member/project"><i class="icon icon-home"></i>&nbsp;????????????</a></li>
                <li><a id="atlasname" href=""></a></li>
                <li id="worksnameshow" class="active"></li>
            </ol>
        </div>
    </div>

    <div class="row row_margin_bottom" style="margin-top: 0px;">
        <div class="col-md-10 advanced-setting-block" style="padding-top:10px;padding-bottom:10px;">
            <div class="row">
                <div class="col-md-3">
                    <img id="thumbpath" width="250" height="250" class="img-responsive" src="">
                    <div class="col-md-12 row_margin_bottom" style="padding: 0">
                        <!-- <input id="picUpload" name="file" type="file" class="file-loading"> -->
                        <button type="button" id="workCover" data-imgtype="custom" data-usetype="workCover" data-modalid="#media_icon" class="btn btn-block">????????????????????????</button>
                        <span class="help-block"><strong class="text-warning">450 X 450</strong> ?????????????????????????????? <strong class="text-warning">2mb</strong> ????????????: <strong class="text-warning">JPG / PNG / JPEG / GIF</strong></span>
                    </div>
                    <div id="errorMsgDiv" class="col-md-12 text-danger" style="padding: 0;display: none">
                        <i class="icon icon-exclamation-sign"></i>
                        <span id="errorMsg"></span>
                    </div>

                </div>
                <div class="col-md-9">
                    <form class="form-horizontal" method="post" role="form">
                        <div class="form-group">

                            <label class="col-md-2 control-label">????????????</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control" id="worksname" name="workname" placeholder="???????????????????????????" maxlength="100">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">????????????</label>
                            <div class="col-md-10">
                                <textarea class="form-control" rows="4" id="workcomment" name="workcomment" placeholder="???????????????????????????" maxlength="800"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">??????</label>
                            <div class="col-md-10">
                                 <select data-placeholder="?????????3??????????????????" id="pic_chosen" class="chosen-select form-control" tabindex="-1" multiple="">
                                </select>
                            </div>
                        </div>

                    </form>
                </div>
            </div>

        </div>
        <div class="col-md-2">
            <div class="btn_fixed_works">
                <button class="btn btn-block btn-primary" onclick="updateWorks()" type="button">??????</button>
                <button class="btn btn-block advanced-setting-btn" type="button" onclick="previewPano()">??????</button>
            </div>
        </div>
    </div>

	<div class="row">	
	<ul class="nav nav-tabs col-md-10 idTabs">
	  <li class="active"><a href="javascript" data-target="#globalset" data-toggle="tab"><h3>????????????</h3></a></li>
	  <li><a href="javascript" data-target="#functionset" data-toggle="tab"><h3>????????????</h3></a></li>
	</ul>
	</div>

    <div class="row">
        <div class="col-md-10 advanced-setting-block" style="padding-top:10px;border-top:0 none;">
			<style>
				#option_group .col-md-4{
					height: 45px;
				}
				#option_group .col-md-4 label{
					line-height: 30px;
					text-align: right;
				}
				.idTabs>li>a{
					padding:0 15px;
				}
				.tab-content{
					border:0;
					padding:15px 0;
				}
				#setting_group .text-center .btn{
					width:130px;
					float:left;
					margin:0 8px 20px;
				}
			</style>
	
			<div class="tab-content">
			  <div class="tab-pane fade active in" id="globalset">
					 <div class="form-group" id="setting_group">
						<div class="col-md-12 text-center">
								<button type="button" class="btn btn-primary" data-toggle="tooltip" title="???????????????????????????????????????????????????" onclick="openPanoSetting()">
									???????????????
								</button>
								<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['plugins']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
									<?php if ($_smarty_tpl->tpl_vars['v']->value['enable']==1&&$_smarty_tpl->tpl_vars['v']->value['edit_container']=="setting_group"){?>
										<?php echo $_smarty_tpl->getSubTemplate ("plugin/".($_smarty_tpl->tpl_vars['k']->value)."/template/edit.lbi", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

									<?php }?>
								<?php } ?>
						</div>
					</div>
			  </div>
			  <div class="tab-pane fade" id="functionset">
					 <div class="row" id="option_group">
						<div class="col-md-4">
							<label class="col-md-6 control-label">????????????</label>
							<div class="col-md-6" data-toggle="tooltip" title="??????????????????????????????????????????????????????">
								<input id="flag_publish" name="switch_checkbox" class="form-control" type="checkbox"/>
							</div>
						</div>
						<div class="col-md-4">
							 <label class="col-md-6 control-label">????????????</label>
							<div class="col-md-6" data-toggle="tooltip" title="????????????????????????????????????">
								<input id="scenechoose" name="switch_checkbox" class="form-control" type="checkbox"/>
							</div>
						</div>
						<div class="col-md-4">
							  <label class="col-md-6 control-label">????????????</label>
							<div class="col-md-6" data-toggle="tooltip" title="?????????????????????">
								<input id="autorotate" name="switch_checkbox" class="form-control" type="checkbox"/>
							</div>
						</div>
						<div class="col-md-4">
							 <label class="col-md-6 control-label">???????????????</label>
							 <div class="col-md-6" data-toggle="tooltip" title="?????????????????????????????????">
								<input id="littleplanet" name="switch_checkbox" class="form-control" type="checkbox"/>
							</div>
						</div>
						<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['plugins']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
								<?php if ($_smarty_tpl->tpl_vars['v']->value['enable']==1&&$_smarty_tpl->tpl_vars['v']->value['edit_container']=="option_group"){?>
									<?php echo $_smarty_tpl->getSubTemplate ("plugin/".($_smarty_tpl->tpl_vars['k']->value)."/template/edit.lbi", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

								<?php }?>
						<?php } ?>
					</div>
			  </div>
			</div>
    	</div>
    </div>

    <h3>????????????
        <small>???1?????????</small>
    </h3>

    <div class="row">
        <div class="col-md-10 advanced-setting-block">
            <div class="row row_margin_bottom">
                <div class="col-md-3">
                    <button type="button" class="btn advanced-setting-btn btn-block" onclick="addSceneClick()"><i class="icon icon-plus"></i> ????????????????????????
                    </button>
                    <div class="modal fade" id="myLgModal">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">??</span><span class="sr-only">??????</span></button>
                                    <h2 class="modal-title"> ????????????????????????</h2>
                                </div>
                                <div class="modal-body" id="panoImgList">
                                    <div id="panoImgList_wrap"></div>
                                    <div id="pager_wrap"></div>
                                </div>

                                <div class="clearfix"></div>
                                <div class="modal-footer">
                                    <span>?????????<em>0</em>?????????</span><input id="search" onkeyup="searchOnPage()" type="text" placeholder="??????????????????????????????">
                                    <button class="btn btn-primary" type="button" onclick="saveWorkImg()">??????</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" id="pics">
            </div>
        </div>
    </div>

    <h3>?????????????????????</h3>

    <div class="row">
        <div class="col-md-10 advanced-setting-block" style="padding-top:10px">
            <form class="form-horizontal" method="post" role="form">
                <div class="form-group">
                    <label class="col-md-2 control-label"><a id = "workslocationA" target="_blank">????????????</a></label>

                    <div class="col-md-8">
                        <input type="text" class="form-control" id="workslocation"  name="workname" placeholder="">
                    </div>
                    <div class="col-md-2">
                        <button class="btn copyable" type="button">??????</button>
                   </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label">???????????????</label>

                    <div class="col-md-8">
                        <input type="text" class="form-control" id="website" name="workname" placeholder="">
                    </div>
                    <div class="col-md-2">
                        <button class="btn copyable" type="button">??????</button>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label">???????????????</label>

                    <div class="col-md-8">
                        <input type="text" class="form-control" id="forum" name="workname" placeholder="">
                    </div>
                    <div class="col-md-2">
                        <button class="btn copyable" type="button">??????</button>
                    </div>
                    <div class="row">
                        <div class="col-md-10 col-md-offset-2"><span style="padding-left: 5px;margin-top: 5px;display: inline-block;" class="text-muted">??????????????????????????????????????????????????????????????????????????????????????????</span></div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-2 control-label">???????????????</label>
                    <div class="col-md-3 ">
                        <img src="" id="qrimg">
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>
</div>
<div class="modal fade" id="media_icon" data-backdrop="static" data-keyboard="false" data-position="5%">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-body">
                <ul id="myTab" class="nav nav-tabs">
                    <li class="active"><a href="#music" data-toggle="tab" id="music_tab">??????</a></li>
                    <li><a href="#pic" data-toggle="tab" class="img_tab">??????</a></li>
                    <li><a href="#upload" data-toggle="tab" id="upload_tab">??????</a></li>
                    <li class="find"><input type="text" id="searchMediaInput" placeholder="??????????????????????????????" class="form-control"></li>
                    <div class="btn_confirm">
                        <li>
                            <button class="btn btn-primary confirm-choose" type="button" onclick="chooseMediaResImg()">????????????</button>
                        </li>
                        <li>
                            <button class="btn" type="button" id="cancel_icon" data-dismiss="modal">??????
                            </button>
                        </li>
                    </div>
                </ul>
                <div id="myTabContent" class="tab-content" style="height:410px;overflow: auto;">
                    <div class="tab-pane fade in active clearfix" id="music">

                    </div>
                    <div class="tab-pane fade clearfix" id="pic">

                    </div>
                    <div class="tab-pane fade" id="upload">
                       <input id="imgUpload" name="file" type="file" class="" accept="image/*,audio/*">
                        <p id="mediaTyPrompt">??????????????????????????????MP3??????????????????png???jpg?????????</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<div class="modal fade" id="modal_obj" data-backdrop="static" data-keyboard="false" >
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">??</span><span class="sr-only">??????</span></button>
                <h3></h3>
            </div>
            <div class="modal-body">
              <div class="row" id="object_list">
                   
                </div>
            </div>
        </div>
    </div>
</div>

<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['plugins']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
    <?php if ($_smarty_tpl->tpl_vars['v']->value['enable']==1&&$_smarty_tpl->tpl_vars['v']->value['edit_resource']==1){?>
        <?php echo $_smarty_tpl->getSubTemplate ("plugin/".($_smarty_tpl->tpl_vars['k']->value)."/template/edit_resource.lbi", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    <?php }?>
<?php } ?>

<div class="modal fade" id="panoSettingModal" data-backdrop="static" data-keyboard="false" style="padding: 15px; -webkit-user-select: none; display: none;" aria-hidden="true">
    <div style="width:100%;height:100%;position:relative">
        <div class="square_eye" style="display: none;">
            <div class="left_bottom"></div>
            <div class="right_top"></div>
            <button type="button" class="btn btn-primary" onclick="setInitView()">??????????????????</button>
        </div>
        <div class="pano-setting-container-save">
            <div class="btn-group">
                <button class="btn btn-primary" onclick="savePanoSetting()">??????</button>
                <button class="btn btn-primary advanced-setting-background" data-dismiss="modal">??????</button>
            </div>
        </div>
        <div class="pano-setting-container">
            <div class="btn-group btn-group-vertical" style="display:block">
                <button class="btn btn-primary btn-block advanced-setting-background"><i class="icon icon-eye-open"></i> ??????</button>
                <button class="btn btn-primary btn-block advanced-setting-background"><i class="icon icon-bullseye"></i> ??????</button>
                <button class="btn btn-primary btn-block advanced-setting-background"><i class="icon icon-flag"></i> ??????</button>
                <button class="btn btn-primary btn-block advanced-setting-background"><i class="icon icon-spinner"></i> ??????</button>
                <button class="btn btn-primary btn-block advanced-setting-background"><i class="icon icon-map-marker"></i> ??????</button>
                <button class="btn btn-primary btn-block advanced-setting-background"><i class="icon icon-play-circle"></i> ??????</button>
            </div>
        </div>
        <div class="pano-setting-content">
            <div class="eyes advanced-setting-background" style="right: -320px;">
                <ul class="nav nav-tabs">
                    <li class="active" style="width:33.33333%">
                        <a href="#keep_eye" data-toggle="tab">
                            ???????????????
                        </a>
                    </li>
                    <li style="width:33.33333%"><a href="#first_eye" data-toggle="tab">
                        FOV??????
                    </a></li>
                    <li style="width:33.33333%"><a href="#vertical_eye" data-toggle="tab">
                        ????????????
                    </a></li>
                </ul>

               <div class="tab-content">
                    <div class="tab-pane fade in active" id="keep_eye">
                        <img src="">
                        <p><input type="checkbox">?????????????????????????????????</p>
                    </div>
                    <div class="tab-pane fade" id="first_eye">
                        <input type="text" class="form-control" onkeyup="this.value=this.value.replace(/\D/g,'')" onafterpaste="this.value=this.value.replace(/\D/g,'')" style="width:60px;display: inline-block;text-align: center;ime-mode:disabled" value="90" onblur="fovOnBlur(this)">
                        <p class="start_eye">????????????</p>
                        <div>
                            <b>5&nbsp;&nbsp;</b> <input id="ex1" type="text" class="span2" value="" data-slider-min="5" data-slider-max="120" data-slider-step="1" data-slider-value="80"/> <b>&nbsp;&nbsp;120</b>
                        </div>
                        <div>
                            <b>5&nbsp;&nbsp;</b> <input id="ex2" type="text" class="span2" value="" data-slider-min="5" data-slider-max="120" data-slider-step="1" data-slider-value="[5,120]" data-slider-range="true" data-slider-tooltip-split="true"/> <b>&nbsp;&nbsp;120</b>
                        </div>
                        <div class="clearfix">
                            <div style="float:left">
                                <span>????????????</span>
                                <input type="text" style="width:60px;text-align: center;ime-mode:disabled" class="form-control" value="5" onkeyup="this.value=this.value.replace(/\D/g,'')" onafterpaste="this.value=this.value.replace(/\D/g,'')" onblur="fovRangeOnBlur(this,true)">
                            </div>
                            <div style="float:right">
                                <span>????????????</span>
                                <input type="text" style="width:60px;text-align: center;ime-mode:disabled" class="form-control" value="120" onkeyup="this.value=this.value.replace(/\D/g,'')" onafterpaste="this.value=this.value.replace(/\D/g,'')" onblur="fovRangeOnBlur(this,false)">
                            </div>
                        </div>
                        <button type="button" class="btn btn-primary" data-loading-text="????????????????????????" onclick="putWholeFov(this)">?????????Fov???????????????????????????</button>
                    </div>

                    <div class="tab-pane fade" id="vertical_eye">
                        <input type="text" class="form-control" onkeyup="intValidate(this)" onafterpaste="intValidate(this)" style="width:60px;display: inline-block;text-align: center;ime-mode:disabled" value="0" onblur="vlookatOnBlur(this)">
                        <p class="start_eye">????????????</p>
                        <div>
                            <b>-90&nbsp;&nbsp;</b> <input id="ex3" type="text" class="span2" value="" data-slider-min="-90" data-slider-max="90" data-slider-step="1" data-slider-value="0"/> <b>&nbsp;&nbsp;90</b>
                        </div>
                        <div>
                            <b>-90&nbsp;&nbsp;</b> <input id="ex4" type="text" class="span2" value="" data-slider-min="-90" data-slider-max="90" data-slider-step="1" data-slider-value="[-90,90]" data-slider-range="true" data-slider-tooltip-split="true"/> <b>&nbsp;&nbsp;90</b>
                        </div>
                        <div class="clearfix">
                            <div style="float:left">
                                <span>????????????</span>
                                <input type="text" style="width:60px;text-align: center;ime-mode:disabled" class="form-control" value="-90" onkeyup="intValidate(this)" onafterpaste="intValidate(this)" onblur="vlookatRangeOnBlur(this,true)">
                            </div>
                            <div style="float:right">
                                <span>????????????</span>
                                <input type="text" style="width:60px;text-align: center;ime-mode:disabled" class="form-control" value="90" onkeyup="intValidate(this)" onafterpaste="intValidate(this)" onblur="vlookatRangeOnBlur(this,false)">
                            </div>
                        </div>

                        <button type="button" class="btn btn-primary" data-loading-text="????????????????????????" onclick="putWholeVlookat(this)">????????????????????????????????????????????????</button>
                    </div>
                </div>

            </div>
            <div class="hot advanced-setting-background" style="right: -320px;">
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#home1" aria-controls="home" role="tab" data-toggle="tab">????????????</a></li>
					<li role="presentation" style="margin-left:-190px;">
					<a href="javascript:void(0)" class="btn-primary" id="restart_polygon" style="margin-bottom:5px;display:none" onclick="javascript:restart_polygon();" >????????????</a>
					<a href="javascript:void(0)" class="btn-primary" id="end_polygon" style="display:none" onclick="end_polygon()" >????????????</a>
					
					</li>
                </ul>
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="home1">
                        <p class="center-block">?????????????????????????????????????????????</p>
                        <button class="btn btn-primary" style="margin-right:10px;">????????????1111</button>
                        <button class="btn btn-primary" style="width:78px;margin-left:10px;">?????????</button>
                        <button class="btn btn-primary" style="margin-right:10px;">????????????</button>
                        <button class="btn btn-primary" style="margin-left:10px;">????????????</button>
                        <button class="btn btn-primary" style="margin-right: 10px">????????????</button>
                        <button class="btn btn-primary" style="margin-left:10px;">????????????</button>
                        <button class="btn btn-primary" style="margin-right:10px;">????????????</button>
                        <button class="btn btn-primary" style="margin-left:10px;">????????????</button>
                        <button class="btn btn-primary" style="margin-right:102px">????????????</button>
                    </div>
                </div>
                <div class="content_index">
                    <div class="btn_content">
                        <h5>??????<label class="text-warning">0</label>?????????????????????</h5>
                        <p>?????????????????????????????????????????????????????????</p>
                        <div class="all-edit"></div>
                        <button class="btn btn-primary btn-block" onclick="openAddHotSpot(0)">????????????</button>
                    </div>
                    <div class="btn_content">
                        <h5>??????<label class="text-warning">0</label>??????????????????</h5>
                        <p>????????????????????????????????????????????????</p>
                        <div class="all-edit"></div>
                        <button class="btn btn-primary btn-block" onclick="openAddHotSpot(1)">????????????</button>
                    </div>
                    <div class="btn_content">
                        <h5>??????<label class="text-warning">0</label>?????????????????????</h5>
                        <p>????????????????????????????????????????????????</p>
                        <div class="all-edit"></div>
                        <button class="btn btn-primary btn-block" onclick="openAddHotSpot(2)">????????????</button>
                    </div>
                    <div class="btn_content">
                        <h5>??????<label class="text-warning">0</label>?????????????????????</h5>
                        <p>????????????????????????????????????????????????</p>
                        <div class="all-edit"></div>
                        <button class="btn btn-primary btn-block" onclick="openAddHotSpot(3)">????????????</button>
                    </div>
                    <div class="btn_content">
                        <h5>??????<label class="text-warning">0</label>???????????????</h5>
                        <p>????????????????????????????????????????????????</p>
                        <div class="all-edit"></div>
                        <button class="btn btn-primary btn-block" onclick="openAddHotSpot(4)">????????????</button>
                    </div>
                    <div class="btn_content">
                        <h5>??????<label class="text-warning">0</label>???????????????</h5>
                        <p>????????????????????????????????????????????????</p>
                        <div class="all-edit"></div>
                        <button class="btn btn-primary btn-block" onclick="openAddHotSpot(5)">????????????</button>
                    </div>
                    <div class="btn_content">
                        <h5>??????<label class="text-warning">0</label>???????????????</h5>
                        <p>??????????????????????????????????????????</p>
                        <div class="all-edit"></div>
                        <button class="btn btn-primary btn-block" onclick="openAddHotSpot(7)">????????????</button>
                    </div>
                    <div class="btn_content">
                        <h5>??????<label class="text-warning">0</label>???????????????</h5>
                        <p>??????????????????????????????????????????</p>
                        <div class="all-edit"></div>
                        <button class="btn btn-primary btn-block" onclick="openAddHotSpot(8)">????????????</button>
                    </div>
                    <div class="btn_content">
                        <h5>??????<label class="text-warning">0</label>???????????????</h5>
                        <p>????????????????????????????????????</p>
                        <div class="all-edit"></div>
                        <button class="btn btn-primary btn-block" onclick="openAddHotSpot(9)">????????????</button>
                    </div>
                </div>
            </div>


  <div class="sandTable advanced-setting-background">
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#home2" aria-controls="home" role="tab" data-toggle="tab">????????????</a></li>
                </ul>
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="home2">
                        <div id="sandDesc">
                            <p><label>?????????????????????,</label>??????????????????????????????????????????????????????????????????</p>
                            <label style="margin-top: 10px;">??????????????????480??480???</label>
                        </div>
                        <div id="sandImg" class="sand-img-div">

                        </div>
                        <div class="add_sand"><button class="btn btn-primary btn-block" data-modalid="#media_icon" data-imgtype="custom" data-mediatype="0" onclick="openSandTable()">???????????????</button></div>
                    </div>
                </div>
                <div class="sandtable-window">
                    <div class="clearfix">
                        <div class="checkbox pull-left" style="margin-top:0;margin-bottom:0">
                            <label>
                                <input type="checkbox"> ??????????????????
                            </label>
                        </div>
                        <!--TODO <a href="javascript:toggleSandtableWindowSize(300)" class="pull-right">??????</a> -->
                    </div>
                    <div class="sandtable-img-margin">
                        <img class="sandtable-window-img" src="/static/images/kr/subject2.jpg">
                    </div>
                    <div class="clearfix">
                        <button class="btn btn-primary pull-left" onclick="addRadarControl()">????????????</button>
                        <button class="btn pull-right" onclick="deleteRadarControl()">????????????</button>
                    </div>
                </div>
            </div>


             <div class="specialEffect advanced-setting-background">
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#home3" aria-controls="home" role="tab" data-toggle="tab">????????????</a></li>
                </ul>
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="home3">
                        <p class="clearfix"><input type="checkbox" class="start">???????????? <button type="button" class="btn btn-primary" style="float:right" data-loading-text="????????????????????????" onclick="putWholeEffect(this)">?????????????????????</button></p>
                        <div>
                            <input type="radio" name="special" value="rain">??????
                            <input type="radio" name="special" value="midrain">??????
                            <input type="radio" name="special" value="heavyrain">??????
                        </div>
                        <div>
                            <input type="radio" name="special" value="defaultsnow">??????
                            <input type="radio"  name="special" value="snowballs">??????
                            <input type="radio"  name="special" value="snowflakes">??????
                        </div>
                       
                        <div>
                            <input type="radio" name="special" value="goldenstars">????????? <input type="radio" name="special" value="hearts">?????????<input type="radio" name="special" value="money">?????????
                            <input type="radio" name="special" value="custom" data-modalid="#media_icon" data-imgtype="custom">???????????????
                        </div>
                         <!-- <div>
                        <input type="radio" name="special" value="sunshine">?????????
                            <p>?????????????????????</p>
                            <p>????????????ie???360????????????????????????????????????</p>
                        </div> -->
                    </div>
                </div>
            </div>

        <div class="visite advanced-setting-background">
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#home4" aria-controls="home" role="tab" data-toggle="tab">????????????</a></li>
                </ul>
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="home4">
                        <p>??????????????????????????????????????????????????????????????????????????????????????????????????????????????????</p>
                        <!--<p>????????????????????????????????????????????????<span  style="color: #005fcc">0</span>???</p>-->
                        <button class="btn btn-primary btn-block" id="add_node">????????????</button>
                        <div class="start-end-img">
                            <img src="/static/images/kr/default2-120x120.png">
                            <span onclick="openFirstImgModal(this)">??????????????????</span>
                            <img src="/static/images/kr/default2-120x120.png">
                            <span onclick="openFirstImgModal(this)">??????????????????</span>
                        </div>
                    </div>
                </div>
            </div>

         <!-- ???????????? -->
             <style type="text/css">
                  .tab_footer table tbody{
                    text-align: left;
                  }
                 .tab_footer table tbody tr td span{
                    text-overflow: ellipsis;
                    -o-text-overflow:ellipsis; 
                    overflow: hidden;
                    width:200px;
                    white-space: nowrap;
                    display: block;
                 }
                  .tab_footer table tbody tr:hover {
                  }
				 .p-input{
				 	width: 50px;height: 20px;line-height: 20px;padding: 0;
				 }
            </style>
             <div class="eyes tie advanced-setting-background" style="width:380px;right:-395px;">
                <ul class="nav nav-tabs">
                    <li style="width:30%" class="active"><a href="#first_video_eye" data-toggle="tab">
                        ????????????
                    </a></li>
                     <li style="width:30%" ><a href="#paster_img" data-toggle="tab" onclick="init_img_tie()">
                        ????????????
                    </a></li>
                </ul>

               <div class="tab-content" style="padding:0;line-height: 30px;">
                    <div class="tab-pane fade in active" id="first_video_eye">
                         <div>
						  ??????
						   <input type="text" id="ex_w_txt" class="p-input">
						   <b>100</b> <input id="ex_w" type="text" class="span2" value="" data-slider-min="100" data-slider-max="2000" data-slider-step="1" data-slider-value="200"/> <b>2000</b>
                        </div>
                        <div>
                          ??????
						   <input type="text" id="ex_h_txt" class="p-input">
						   <b>100</b> <input id="ex_h" type="text" class="span2" value="" data-slider-min="100" data-slider-max="2000" data-slider-step="1" data-slider-value="200"/> <b>2000</b>
                        </div>
                        <div>
                           ???X
						   <input type="text" id="ex_rx_txt" class="p-input">
						   <b>-180</b> <input id="ex_rx" type="text" class="span2" value="" data-slider-min="-180" data-slider-max="180" data-slider-step="1" data-slider-value="0"/> <b>180</b>
                        </div>
                        <div>
                            ???Y
						   <input type="text" id="ex_ry_txt" class="p-input">
						   <b>-180</b> <input id="ex_ry" type="text" class="span2" value="" data-slider-min="-180" data-slider-max="180" data-slider-step="1" data-slider-value="0"/> <b>180</b>
                        </div>
                        <div>
                           ???Z
						  <input type="text" id="ex_rz_txt" class="p-input">
						  <b>-180</b> <input id="ex_rz" type="text" class="span2" value="" data-slider-min="-180" data-slider-max="180" data-slider-step="1" data-slider-value="0"/> <b>180</b>
                        </div>
                        <div>
                          ??????
						  <input type="text" id="ex_d_txt" class="p-input">
						  <b>200</b> <input id="ex_d" type="text" class="span2" value="" data-slider-min="200" data-slider-max="20000" data-slider-step="1" data-slider-value="2000"/> <b>20000</b>
                        </div>
                     <!--    <button type="button" style="margin-top: 10px;" class="btn btn-primary" data-loading-text="????????????" onclick="saveVideo_tie_setting(this)">????????????</button> -->
                        <button type="button" style="margin-top: 10px;" class="btn btn-primary" data-loading-text="????????????" onclick="video_tie_click(this)">????????????</button>
                         <div class="tab_footer" style="margin-top: 10px;">
                            <table class="table  table-condensed">
                             <tbody>
                                 
                             </tbody>
                             </table>
                        </div>
                    </div>

                    <div class="tab-pane" id="paster_img">
                         <div>
						 	??????
							<input type="text" id="paster_img_w_txt" class="p-input">
                            <b>100</b> <input id="paster_img_w" type="text" class="span2" value="" data-slider-min="100" data-slider-max="2000" data-slider-step="1" data-slider-value="200"/> <b>2000</b>
                        </div>
                        <div>
						    ??????
							<input type="text" id="paster_img_h_txt" class="p-input">
                            <b>100</b> <input id="paster_img_h" type="text" class="span2" value="" data-slider-min="100" data-slider-max="2000" data-slider-step="1" data-slider-value="200"/> <b>2000</b>
                        </div>
                        <div>
						    ???X
							<input type="text" id="paster_img_rx_txt" class="p-input">
                            <b>-180</b> <input id="paster_img_rx" type="text" class="span2" value="" data-slider-min="-180" data-slider-max="180" data-slider-step="1" data-slider-value="0"/> <b>180</b>
                        </div>
                        <div>
						    ???Y
							<input type="text" id="paster_img_ry_txt" class="p-input">
                            <b>-180</b> <input id="paster_img_ry" type="text" class="span2" value="" data-slider-min="-180" data-slider-max="180" data-slider-step="1" data-slider-value="0"/> <b>180</b>
                        </div>
                        <div>
						   ???Z
						   <input type="text" id="paster_img_rz_txt" class="p-input">
                           <b>-180</b> <input id="paster_img_rz" type="text" class="span2" value="" data-slider-min="-180" data-slider-max="180" data-slider-step="1" data-slider-value="0"/> <b>180</b>
                        </div>
                        <div>
						   ??????
						    <input type="text" id="paster_img_d_txt" class="p-input">
                            <b>200</b> <input id="paster_img_d" type="text" class="span2" value="" data-slider-min="200" data-slider-max="20000" data-slider-step="1" data-slider-value="2000"/> <b>20000</b>
                        </div>
                     <!--    <button type="button" style="margin-top: 10px;" class="btn btn-primary" data-loading-text="????????????" onclick="saveVideo_tie_setting(this)">????????????</button> -->
                        <button type="button" style="margin-top: 10px;" class="btn btn-primary" data-modalid="#media_icon" data-imgtype="custom" onclick="choose_pasterimg()" >????????????</button>
                         <div class="tab_footer" style="margin-top: 10px;">
                            <table class="table  table-condensed">
                             <tbody>
                                 
                             </tbody>
                             </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ???????????? -->
        </div>

        <div class="timer">
            <ul class="nav" role="tablist">
                <li role="presentation" class="timer-title advanced-setting-background"><a href="#home5" aria-controls="home" role="tab" data-toggle="tab">?????????</a></li>
            </ul>
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="home5">

                </div>
                <div id="clickDelete" class="popover fade">
                    <div class="arrow"></div>
                    <h3 class="popover-title">
                        ???????????????
                        <span>

                        </span>
                    </h3>
                    <div class="popover-content">
                        <a href="javascript:deleteTourGuideNode();">???????????????</a>
                    </div>
                </div>
                <div id="timeLineSetting" class="popover fade">
                    <div class="arrow"></div>
                    <h3 class="popover-title">
                        ?????????
                    </h3>
                    <div class="popover-content">
                        <div style="height:20px;line-height:20px;">
                            ???????????? : <span class="text-warning"></span> ???
                        </div>
                        <div style="height:20px;line-height:20px;">
                            ???????????? : <span class="text-warning"></span>
                        </div>
                        <div style="height:20px;line-height:20px;">
                            ???????????????????????????
                        </div>
                    </div>
                </div>
                <div id="tourSceneSkip" class="popover fade">
                    <div class="arrow"></div>
                    <h3 class="popover-title">
                        ????????????
                    </h3>
                    <div class="popover-content">
                        <div style="height:20px;line-height:20px;">
                            <span class="text-warning"></span>
                        </div>
                        <div style="height:20px;line-height:20px;">
                            ?????????
                        </div>
                        <div style="height:20px;line-height:20px;">
                            <span class="text-warning"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--<div class="group-hover">  </div>-->
      <div class="group-by advanced-setting-background">
            <button class="btn btn-primary btn-block" type="button" style="padding: 5px 24px;" onclick="openCreateSceneGroup(6)">????????????</button>
            <div class="scene-group-desc">??????????????????????????????????????????????????????????????????????????????</div>
            <ul id="groupbyul">

            </ul>
        </div>
        <div class="scene-group advanced-setting-background" style="display:none">
            <p>????????????/??????</p>
            <img src="/static/images/kr/pile.png" style="border:none;width:88px;height:88px;position:absolute;top:25px;left:10px;z-index:1">
            <img src="">
        </div>

        <div id="settingPano" style="position:relative;width:100%;height:100%;background-color:#000;overflow: hidden">

        </div>
    </div>
</div>

<div class="modal fade" id="firstImgModal" data-backdrop="static" data-keyboard="false" style="padding:15px">
    <div style="position:relative;width:100%;height:100%;background-color: rgba(0,0,0,.8);padding:80px 150px 0;">
        <div class="modal-content">
        <div class="modal-header">
            <h4>????????????</h4>
        </div>
        <div class="modal-body">
          <p>??????????????????????????????????????????3???</p>
            <p>????????????????????????500*500</p>
            <img src="/static/images/kr/default2-120x120.png" onerror="javascript:this.src=&#39;/static/images/kr/default2-120x120.png&#39;" width="120px" height="120px">
            <div style="margin:20px 0;">
                <button class="btn btn-primary" data-modalid="#media_icon" data-imgtype="custom">??????????????????</button>
                <button class="btn btn-primary" onclick="removeTourGuideStartEndImg(this)">??????</button>
            </div>
        </div>
        <div class="modal-footer">
            <button class="btn btn-primary" onclick="tourGuideImgOK()">??????</button>
            <button class="btn" data-dismiss="modal">??????</button>
        </div>
        </div>
    </div>
</div>
<div class="modal fade" id="confirmModal" data-backdrop="static" data-keyboard="false" style="padding:15px">
    <div style="position:relative;width:100%;height:100%;background-color: rgba(0,0,0,.8);padding:80px 150px 0;">
        <div class="modal-content">
            <div class="modal-header">

            </div>
            <div class="modal-body">
                <p>???????????????</p>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" id="yes" data-dismiss="modal">??????</button>
                <button class="btn btn-primary" data-dismiss="modal" id="cancel">??????</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="timeModal" data-backdrop="static" data-keyboard="false" style="padding:15px">
    <div style="position:relative;width:100%;height:100%;background-color: rgba(0,0,0,.8);padding:80px 150px 0;">
        <div class="modal-content">
            <div class="modal-header">
             <h3>???????????????</h3>
            </div>
            <div class="modal-body">
                <p>???????????????<input type="text" class="form-control" value="5">&nbsp;&nbsp;??? <label>??????0??????????????????????????????</label></p>
                <p>????????????
                    <label class="time-line-music">???</label>
                    <a data-modalid="#media_icon" data-mediatype="1" data-imgtype="custom" href="javascript:void(0)">????????????????????????</a>
                    <a href="javascript:removeTimeLineMusic()" class="timelinemusicdelete">??????</a>
                </p>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" onclick="timeLineSettingOK()">??????</button>
                <button class="btn" data-dismiss="modal">??????</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade allAround" id="allAroundModal" data-keyboard="false" style="padding: 15px; display: none;" aria-hidden="true">
    <div style="position:relative;width:100%;height:100%;background-color: rgba(0,0,0,.8);padding:30px 150px 0;">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">??</span><span class="sr-only">??????</span></button>
                <h3>????????????</h3>
            </div>
            <div class="modal-body">
                <ul class="hot-nav clearfix" style="display: none;">
                    <li class="col-md-6" data-showid="#icon_style">
                        1.?????????????????????????????????
                    </li>
                    <li class="col-md-6" data-showid="#purpose">
                        2.??????????????????
                    </li>
                </ul>
                <ul class="hot-nav clearfix" style="display: none;">
                        <li class="col-md-6" data-showid="#hot_name">
                            1.?????????????????????
                        </li>
                        <li class="col-md-6" data-showid="#icon_style">
                            2.??????????????????
                        </li>
                </ul>
                <ul class="hot-nav clearfix" style="display: none;">
                        <li class="col-md-4" data-showid="#img_name">1.??????????????????</li>
                        <li class="col-md-4" data-showid="#imgChoose">2.????????????</li>
                        <li class="col-md-4" data-showid="#icon_style">3.????????????</li>
                </ul>
                <ul class="hot-nav clearfix" style="display: none;">
                        <li class="col-md-6" data-showid="#word_name">
                            <a>1.??????????????????</a>
                        </li>
                        <li class="col-md-6" data-showid="#icon_style"><a>2.??????????????????</a></li>
                </ul>
                <ul class="hot-nav clearfix" style="display: none;">
                        <li class="col-md-4" data-showid="#speak_name">
                            <a>1.??????????????????</a>
                        </li>
                        <li class="col-md-4" data-showid="#music_style">
                            <a>2.????????????</a>
                        </li>
                        <li class="col-md-4" data-showid="#icon_style">
                            <a>3.????????????</a>
                        </li>
                </ul>
                   <!--??????????????????-->
                <ul class="hot-nav clearfix" style="display: none;">
                      <li class="col-md-6" data-showid="#img_text_name">
                          <a>1.????????????</a>
                      </li>
                      <li class="col-md-6" data-showid="#icon_style"><a>2.??????????????????</a></li>
                </ul>

                <ul class="hot-nav clearfix hot-nav-show" style="">
                        <li class="col-md-4" data-showid="#group-name" style="background: rgb(73, 74, 81);">
                            <a>1.??????????????????</a>
                        </li>
                        <li class="col-md-4 liclick" data-showid="#icon_style" style="background: rgb(253, 228, 40);">
                            <a>2.??????????????????</a>
                        </li>
                        <li class="col-md-4" data-showid="#group-scene" style="background: rgb(73, 74, 81);">
                            <a>3.????????????</a>
                        </li>
                </ul>

                 <ul class="hot-nav clearfix" style="display: none;">
                        <li class="col-md-4" data-showid="#obj_name">
                            <a>1.??????????????????</a>
                        </li>
                        <li class="col-md-4" data-showid="#obj_style">
                            <a>2.??????????????????</a>
                        </li>
                        <li class="col-md-4" data-showid="#icon_style">
                            <a>3.????????????</a>
                        </li>
                </ul>
                
                <ul class="hot-nav clearfix" style="display: none;">
                        <li class="col-md-4" data-showid="#video_name">
                            <a>1.??????????????????</a>
                        </li>
                        <li class="col-md-4" data-showid="#video_style">
                            <a>2.????????????</a>
                        </li>
                        <li class="col-md-4" data-showid="#icon_style">
                            <a>3.????????????</a>
                        </li>
                </ul>

                <ul class="hot-nav clearfix" style="display: none;">
                        <li class="col-md-4" data-showid="#redpack_name">
                            <a>1.??????????????????</a>
                        </li>
                        <li class="col-md-4" data-showid="#redpack_style">
                            <a>2.????????????</a>
                        </li>
                        <li class="col-md-4" data-showid="#icon_style">
                            <a>3.????????????</a>
                        </li>
                </ul>

                <div class="tab-content1">
                    <div id="icon_style" class="" style="left: 105%;">
                        <div class="icon_choose">
                            <div class="radio" style="display:inline-block">
                                <label>
                                    <input type="radio" value="system" name="radioOptionsExample"> ????????????
                                </label>
                            </div>
                            <div class="radio" style="display:inline-block">
                                <label>
                                    <input type="radio" value="custom" name="radioOptionsExample"> ????????????
                                </label>
                            </div>
							<div class="radio" style="display:inline-block">
                                <label>
                                    <input type="radio" value="polygon" name="radioOptionsExample"> ????????????
                                </label>
                            </div>
                        </div>

                        <div class="icon_text">
                            <div class="row"></div>
                            <div class="media_icons" style="display: none;">
                                <p>????????????????????????????????????70 * 70</p>
                                <p>????????????????????????????????????</p>
                                <img src="/static/images/kr/default2-120x120.png">
                                <div style="margin:20px 0;">
                                    <button class="btn btn-primary" data-modalid="#media_icon" data-imgtype="custom" onclick="chooseSceneHotSpotIcon()">??????????????????</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="purpose">
                        <!--<p><input type="checkbox">&nbsp;????????????????????????</p>-->
                        <p></p>
                        <div class="row scene"></div>

                    </div>
                    <div id="hot_name" class="name">
                        ?????????????????????&nbsp;<input type="text" class="form-control hot-name" style="width:350px;">
                        ?????????????????????&nbsp;<input type="text" class="form-control link-adress" style="width:350px;">
                        <input type="checkbox">&nbsp;???????????????  <input type="checkbox" style="margin-left: 30px">&nbsp;???????????????????????????
                    </div>
                    <div id="img_name" class="name">
                        ?????????????????????&nbsp;<input type="text" class="form-control picture-hot-name" style="width:350px">
                        <input type="checkbox">&nbsp;???????????????????????????
                    </div>
                    <div id="imgChoose">
                        <div class="img_choose">
                            <div class="row" style="line-height:50px;text-align:left">
                                <div class="col-md-12">
                                    <button class="btn btn-primary" data-modalid="#media_icon" data-imgtype="custom" data-multiselect="true" onclick="chooseAtlasImg()">????????????????????????</button>&nbsp;&nbsp;<span>?????????????????????</span>&nbsp;&nbsp;&nbsp;&nbsp;<span>?????????????????????800*800?????????????????????????????????????????????????????????</span>
                                </div>
                            </div>
                            <ul class="imghotspot-sortable clearfix ui-sortable"></ul>
                        </div>
                    </div>
                    <div id="word_name">
                        <div class="row" style="margin-top:50px">
                            <div class="col col-md-4 text-right">
                                <span class="">???????????????</span>
                            </div>
                            <div class="col col-md-4">
                                <input type="text" class="form-control word-bt">
                            </div>
                            <div class="col col-md-4 text-left">
                                <input type="checkbox">&nbsp;????????????????????????
                            </div>
                        </div>
                        <div class="row row_margin_top">
                            <div class="col col-md-4 text-right">
                                <span class="">???????????????</span>
                            </div>
                            <div class="col col-md-4">
                                <textarea rows="5" class="form-control" name="panodesc"></textarea>
                            </div>
                        </div>
                    </div>
                    <div id="speak_name" class="name">
                        <span>??????????????????</span><input type="text" class="form-control speak-name" style="width: 50%;">&nbsp;<input type="checkbox">&nbsp;??????????????????????????????<br>
                    </div>
                    <div id="music_style">
                        <p><span>??????????????????</span><span></span></p>
                        <button class="btn btn-primary" data-modalid="#media_icon" data-mediatype="1" data-imgtype="custom" onclick="chooseVoiceHotSpot()">???????????????</button>&nbsp;&nbsp;
                      <button class="btn btn-primary" data-modalid="#media_icon" data-mediatype="1" data-imgtype="system" data-subtype="def_msc" onclick="chooseVoiceHotSpot()">????????????</button>                        
                    </div>
                    
                     <div id="obj_name" class="name">
                        <span>??????????????????</span><input type="text" class="form-control speak-name" style="width: 50%;">&nbsp;<input type="checkbox">&nbsp;??????????????????????????????<br>
                    </div>
                    
                     <div id="obj_style" >
                        <div style="margin-top: 10px">
                            <button class="btn btn-primary"  onclick="build_common_modal('obj')">????????????????????????</button>
                            <span style="color: #6f6a6a;">???????????????????????????????????????????????????????????????</span>
                            <a href="/add/pic" target="_blank" style="color: #c40000;">???????????????>></a>
                        </div>
                        <div style="margin-top: 10px">
                            <button class="btn btn-primary"  onclick="build_common_modal('ring_around')">???720???????????????</button>
                            <span style="color: #6f6a6a;">????????????????????????720??????????????????720?????????</span>
                            <a href="/member/ring_around?act=doAdd" target="_blank" style="color: #c40000;">???????????????>></a>
                        </div>
                        <div id="obj_choose_ok_wrap">
                            
                        </div>
                    </div>
                    

                    <div id="video_name" class="name">
                        <span>??????????????????</span><input type="text" class="form-control speak-name" style="width: 50%;">&nbsp;<input type="checkbox">&nbsp;??????????????????????????????<br>
                    </div>
                    
                     <div id="video_style" >
                        <div style="margin-top: 10px">
                            <button class="btn btn-primary"  onclick="build_common_modal('video')">???????????????????????????</button>
                            <span style="color: #6f6a6a;">???????????????????????????????????????????????????????????????</span>
                            <a href="/member/mediares?act=video" target="_blank" style="color: #c40000;">???????????????>></a>
                        </div>
                        <div id="video_choose_ok_wrap">
                            
                        </div>
                    </div>

                    <div id="redpack_name" class="name">
                        <span>??????????????????</span><input type="text" class="form-control" style="width: 50%;">&nbsp;<input type="checkbox">&nbsp;??????????????????????????????<br>
                    </div>
                    
                     <div id="redpack_style" >
                        <div style="margin-top: 10px">
                            <button class="btn btn-primary"  onclick="build_common_modal('redpack')">??????????????????</button>
                            <span style="color: #6f6a6a;">???????????????????????????????????????????????????????????????</span>
                            <a href="/member/redpack?act=add" target="_blank" style="color: #c40000;">???????????????>></a>
                        </div>
                        <div id="redpack_choose_ok_wrap">
                            
                        </div>
                    </div>

                    <div id="group-name" class="group-name">
                        <p>?????????????????????</p>
                        <input type="text" placeholder="?????????????????????" class="form-control group-name-input">
                    </div>

                   <div id="img_text_name">
                     <div class="row" style="margin-top:50px">
                         <div class="col col-md-3 text-right">
                             <span class="">???????????????</span>
                         </div>
                         <div class="col col-md-4">
                             <input type="text" class="form-control word-bt">
                         </div>
                         <div class="col col-md-4 text-left">
                             <input type="checkbox">&nbsp;????????????????????????
                         </div>
                     </div>
                     <div class="row row_margin_top">
                         <div class="col col-md-3 text-right">
                             <span class="">???????????????</span>
                         </div>
                         <div class="col col-md-9">
                             <textarea  id="imgtext_editor"  class="form-control kindeditorSimple" style="height:220px;width: 100%"></textarea>
                             <!-- <textarea rows="5" class="form-control" name="panodesc"></textarea> -->
                         </div>
                     </div>
                 </div>
                    <div id="group-scene" style="overflow-y: auto;padding-bottom: 20px">
                        <div class="row scenegrouprow row_margin_top"></div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="modal-footer">
                <button class="btn all-next btn-primary" data-loading-text="?????????..." disabled="disabled">??????</button>
            </div>
        </div>
    </div>
</div>
<!-- ???????????? -->
<div class="modal fade" id="video_tie_Modal" data-keyboard="false" data-backdrop="static" style="padding: 15px; display: none;" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">??</span><span class="sr-only">??????</span></button>
                <h3>????????????</h3>
            </div>
            <div class="modal-body">
                <div id="video_tie_style" >
                    <div style="margin-top: 10px">
                        <button class="btn btn-primary"  onclick="build_common_modal('video_tie')">???????????????????????????</button>
                        <span style="color: #6f6a6a;">???????????????????????????????????????????????????????????????</span>
                        <a href="/member/mediares?act=video_tie" target="_blank" style="color: #c40000;">???????????????>></a>
                    </div>
                    <div id="video_choose_ok_tie">
                        
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" aria-label="Close" data-dismiss="modal" class="btn btn-primary">??????</button>
            </div>
        </div>
    </div>
</div>


<div class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">??</span><span class="sr-only">??????</span></button>
                <h4 class="modal-title">????????????</h4>
            </div>
            <div class="modal-body">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">??????</button>
                <button type="button" class="btn btn-primary">??????</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="chooseSceneModal" data-backdrop="static" data-keyboard="false" style="padding:15px">
    <div class="modal-dialog modal-lg" style="z-index:1051">
        <div class="modal-content">
            <div class="modal-header">
                <h4>????????????????????????????????????</h4>
            </div>
            <div class="modal-body">
                <div class="row">

                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" onclick="addRadarControlOk()">??????</button>
                <button class="btn" data-dismiss="modal">??????</button>
            </div>
        </div>
    </div>
    <div style="background-color: rgba(0, 0, 0, 0.8);width:100%;height:100%;position:absolute;top:0;"></div>
</div>



<?php }} ?>