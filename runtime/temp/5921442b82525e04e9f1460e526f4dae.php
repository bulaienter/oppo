<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:88:"C:\phpStudy\PHPTutorial\WWW\price_adjust\public/../application/admin\view\notice\add.htm";i:1532338183;s:88:"C:\phpStudy\PHPTutorial\WWW\price_adjust\public/../application/admin\view\public\top.htm";i:1531707249;s:89:"C:\phpStudy\PHPTutorial\WWW\price_adjust\public/../application/admin\view\public\left.htm";i:1531214619;}*/ ?>
<!DOCTYPE html>
<html><head>
	    <meta charset="utf-8">
    <title>ThinkPHP5.0</title>

    <meta name="description" content="Dashboard">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!--Basic Styles-->
    <link href="__ADMIN__/style/bootstrap.css" rel="stylesheet">
    <link href="__ADMIN__/style/font-awesome.css" rel="stylesheet">
    <link href="__ADMIN__/style/weather-icons.css" rel="stylesheet">
    <link id="beyond-link" href="__ADMIN__/style/beyond.css" rel="stylesheet" type="text/css">


    <!--Beyond styles-->

    <link href="__ADMIN__/style/demo.css" rel="stylesheet">
    <link href="__ADMIN__/style/typicons.css" rel="stylesheet">
    <link href="__ADMIN__/style/animate.css" rel="stylesheet">

    <script src="__ADMIN__/ueditor/ueditor.config.js"></script>
    <script src="__ADMIN__/ueditor/ueditor.all.min.js"></script>
    <script src="__ADMIN__/ueditor/lang/zh-cn/zh-cn.js"></script>

    <script src="__ADMIN__/style/avatar/global.js" type="text/javascript"></script>



</head>
<body>
	<!-- 头部 -->
	<style type="text/css">
body{font-family:'微软雅黑';}
</style>
<script src="__ADMIN__/style/jquery_002.js"></script>

 	<script src="__ADMIN__/plus/layer/layer.js"></script>
<script type="text/javascript">
window.onload=function() {
		$('#cache').click(function() {
			layer.confirm('确定清理缓存?', {icon: 3, title:'温馨提示'}, function(index){
				layer.load(3,{time:3000});
				layer.close(index);
				$.ajax({
					url:"<?php echo url('ajax/delAllDir'); ?>",
					dataType:'JSON',
					type:'POST',
					data:'clear=ok',
					success: function(data) {
						
						if (data.s=='ok') {
							
							layer.msg('更新缓存成功！',{icon: 1});
							
						}else {
							layer.msg('更新缓存失败！',{icon: 2});
						}
					}
				});
			  });
			
		});
		/* $('#home').click(function() {
			location.href="http://www.oppoadmin.com/index.php/index/notice/";
		}); */
}
</script>
<div class="navbar">
   <div class="navbar-inner">
            <div class="navbar-container">
                <!-- Navbar Barnd -->
                <div class="navbar-header pull-left">
                    <a href="#" class="navbar-brand">
                        <small>
                            <img src="__ADMIN__/assets/img/logo.png" alt="">
                        </small>
                    </a>
                </div>
                <!-- /Navbar Barnd -->

                <!-- Sidebar Collapse -->
                <div class="sidebar-collapse" id="sidebar-collapse">
                    <i class="collapse-icon fa fa-bars"></i>
                </div>
                <!-- /Sidebar Collapse -->
                <!-- Account Area and Settings --->
                <div class="navbar-header pull-right">
                    <div class="navbar-account">
                        <ul class="account-area">
                            <li>
                                <a class=" dropdown-toggle" data-toggle="dropdown" id="cache" title="清空缓存" href="#">
                                    <!-- <i class="icon fa fa-trash-o"></i> -->
                                    <i class="icon glyphicon glyphicon-trash"></i>
                                    <span class="badge">1</span>
                                </a>
                                <!--Notification Dropdown-->

                                <!--/Notification Dropdown-->
                            </li>
                            <li>
                                <a class="wave in dropdown-toggle" data-toggle="dropdown1" target="_blank" title="网站首页"  id="home" href="http://www.oppoadmin.com/index.php/index/notice/">
                                    <i class="icon glyphicon glyphicon-home"></i>                                                                 
                                </a>
                                <!--Messages Dropdown-->

                                <!--/Messages Dropdown-->
                            </li>


                           <li class="" style="margin-right:20px;width:160px;">
                                <a class="login-area dropdown-toggle" data-toggle="dropdown">
                                    <div class="avatar" title="View your public profile">
                                        <img src="__ADMIN__/assets/img/avatars/adam-jansen.jpg">
                                    </div>
                                    <section >
                                        <h2><span class="profile" ><span><?php echo \think\Session::get('name'); ?></span></span></h2>
                                    </section>
                                </a>
                                <!--Login Area Dropdown-->
                                <ul class="pull-right dropdown-menu dropdown-arrow dropdown-login-area">
                                    <li class="username"><a><?php echo \think\Session::get('name'); ?></a></li>

                                    <!--Avatar Area-->
                                    <li>
                                        <div class="avatar-area">
                                            <img src="__ADMIN__/assets/img/avatars/adam-jansen.jpg" class="avatar">
                                            <span class="caption" onclick="">Change Photo</span>
                                        </div>
                                    </li>
                                    <!--Avatar Area-->
                                    <li class="edit">
                                        <a href="#" class="pull-left">个人中心</a>
                                        <a href="<?php echo url('admin/edit_pwd',array('id'=>\think\Request::instance()->session('id'))); ?>" class="pull-right">修改密码</a>
                                    </li>
                                    <!--Theme Selector Area-->
                                    <li class="theme-area">
                                        <ul class="colorpicker" id="skin-changer">
                                            <li><a class="colorpick-btn" href="#" style="background-color:#5DB2FF;" rel="assets/css/skins/blue.min.css"></a></li>
                                            <li><a class="colorpick-btn" href="#" style="background-color:#2dc3e8;" rel="assets/css/skins/azure.min.css"></a></li>
                                            <li><a class="colorpick-btn" href="#" style="background-color:#03B3B2;" rel="assets/css/skins/teal.min.css"></a></li>
                                            <li><a class="colorpick-btn" href="#" style="background-color:#53a93f;" rel="assets/css/skins/green.min.css"></a></li>
                                            <li><a class="colorpick-btn" href="#" style="background-color:#FF8F32;" rel="assets/css/skins/orange.min.css"></a></li>
                                        </ul>
                                    </li>
                                    <!--/Theme Selector Area-->
                                    <li class="dropdown-footer">
                                        <a href="<?php echo url('Login/logout'); ?>">
                                          	  退出登录
                                        </a>
                                    </li>
                                </ul>
                                <!--/Login Area Dropdown-->
                            </li>
                            
                            <!-- /Account Area -->
                            <!--Note: notice that setting div must start right after account area list.
                            no space must be between these elements-->
                            <!-- Settings -->
                        </ul>
                        <!-- <div class="setting">
                            <a  title="Setting" href="#">
                                <i class="icon glyphicon glyphicon-cog"></i>
                            </a>
                        </div> -->
						<div class="setting">
                            <a  title="Setting" href="<?php echo url('Conf/conf'); ?>">
                                <i class="icon glyphicon glyphicon-cog"></i>
                            </a>
                        </div>
                        <!-- Settings -->
                    </div>
                </div>
                <!-- /Account Area and Settings -->
            </div>
        </div>
    </div>

	<!-- /头部 -->

	<div class="main-container container-fluid">
		<div class="page-container">
			<!-- Page Sidebar -->
            <style type="text/css">
body{font-family:'微软雅黑';}
</style>
<div class="page-sidebar" id="sidebar">
                <!-- Page Sidebar Header-->
                <div class="sidebar-header-wrapper">
                    <input class="searchinput" type="text">
                    <i class="searchicon fa fa-search"></i>
                    <div class="searchhelper">Search</div>
                </div>
                <!-- /Page Sidebar Header -->
                <!-- Sidebar Menu -->
                <ul class="nav sidebar-menu">
                    <!--Dashboard-->
                    <li <?php if(($con == 'Index')): ?> class="active"<?php endif; ?>>
                        <a href="<?php echo url('index/index'); ?>">
                            <i class="menu-icon glyphicon glyphicon-home"></i>
                            <span class="menu-text">系统首页</span>
                        </a>
                    </li>

                    <li <?php if(($con == 'Admin') OR ($con == 'AuthGroup') OR ($con == 'AuthRule')): ?> class="open"<?php endif; ?>>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-user"></i>
                            <span class="menu-text">管理人员</span>
                            <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
                            <li <?php if($ca == 'Admin/lst'): ?> class="active"<?php endif; ?>>
                                <a href="<?php echo url('admin/lst'); ?>">
                                    <span class="menu-text">
                                        管理列表                                    </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                            <li <?php if($ca == 'AuthGroup/lst'): ?> class="active"<?php endif; ?>>
                                <a href="<?php echo url('auth_group/lst'); ?>">
                                    <span class="menu-text">
                                        用户组列表                                    </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                            <li <?php if($ca == 'AuthRule/lst'): ?> class="active"<?php endif; ?>>
                                <a href="<?php echo url('auth_rule/lst'); ?>">
                                    <span class="menu-text">
                                        权限列表                                   </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                        </ul>
                    </li>

					  <li <?php if(($con == 'PhoneBook')): ?> class="open"<?php endif; ?>>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-phone"></i>
                            <span class="menu-text">通讯录</span>
                            <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
                            <li <?php if($ca == 'PhoneBook/lst'): ?> class="active"<?php endif; ?>>
                                <a href="<?php echo url('PhoneBook/lst'); ?>">
                                    <span class="menu-text">
                                        公司人员                                   </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                        </ul>
                    </li> 
                <!-- <li <?php if($con == 'News'): ?> class="open"<?php endif; ?>>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-text-height"></i>
                            <span class="menu-text">新闻资讯</span>
                            <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
                            <li <?php if($ca == 'News/lst'): ?> class="active"<?php endif; ?>>
                                <a href="<?php echo url('News/lst'); ?>">
                                    <span class="menu-text">
                                        新闻列表                                    </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                        </ul>
                    </li> -->
				<!-- <li <?php if($con == 'Home'): ?> class="open"<?php endif; ?>>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-coffee"></i>
                            <span class="menu-text">艺术家管理</span>
                            <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
                            <li <?php if($ca == 'Home/lst'): ?> class="active"<?php endif; ?>>
                                <a href="<?php echo url('home/lst'); ?>">
                                    <span class="menu-text">
                                       艺术家列表                                    </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                            <li <?php if($ca == 'Home/add'): ?> class="active"<?php endif; ?>>
                                <a href="<?php echo url('home/add'); ?>">
                                    <span class="menu-text">
                                        艺术家添加                                   </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                            <li <?php if($ca == 'Home/address'): ?> class="active"<?php endif; ?>>
                                <a href="<?php echo url('home/address'); ?>">
                                    <span class="menu-text">
                                        籍贯选项                                   </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                            
                        </ul>
					</li> -->
                   

                    <li <?php if($con == 'Notice'): ?> class="open"<?php endif; ?>>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-text-height"></i>
                            <span class="menu-text">通知管理</span>
                            <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
                            <li <?php if($ca == 'Notice/lst'): ?> class="active"<?php endif; ?>>
                                <a href="<?php echo url('notice/lst'); ?>">
                                    <span class="menu-text">
                                       通知列表                                    </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                            <li <?php if($ca == 'Notice/add'): ?> class="active"<?php endif; ?>>
                                <a href="<?php echo url('notice/add'); ?>">
                                    <span class="menu-text">
                                        通知添加                                    </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                        </ul>
                    </li>
                    
                    <li <?php if($con == 'Article'): ?> class="open"<?php endif; ?>>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-check-square-o"></i>
                            <span class="menu-text">调价审核</span>
                            <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
                            <li <?php if($ca == 'Article/lst'): ?> class="active"<?php endif; ?>>
                                <a href="<?php echo url('Article/lst'); ?>">
                                    <span class="menu-text">
                                       调价列表                                    </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                            
                        </ul>
                    </li>

                    <!-- <li <?php if($con == 'Article'): ?> class="open"<?php endif; ?>>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-file-text"></i>
                            <span class="menu-text">订单管理</span>
                            <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
                            <li <?php if($ca == 'Article/lst'): ?> class="active"<?php endif; ?>>
                                <a href="<?php echo url('article/lst'); ?>">
                                    <span class="menu-text">
                                        订单列表                                    </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                            <li <?php if($ca == 'Article/add'): ?> class="active"<?php endif; ?>>
                                <a href="<?php echo url('article/add'); ?>">
                                    <span class="menu-text">
                                        订单添加                                   </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                            <li <?php if($ca == 'Article/order_lst'): ?> class="active"<?php endif; ?>>
                                <a href="<?php echo url('article/order_lst'); ?>">
                                    <span class="menu-text">
                                        已成交                                   </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                        </ul>
                    </li> -->

                     <!-- <li <?php if($con == 'Ad'): ?> class="open"<?php endif; ?>>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-chain"></i>
                            <span class="menu-text">广告图片</span>
                            <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
                            <li <?php if($ca == 'Ad/lst'): ?> class="active"<?php endif; ?>>
                                <a href="<?php echo url('ad/lst'); ?>">
                                    <span class="menu-text">
                                       图片列表                                  </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                            <li <?php if($ca == 'Ad/add'): ?> class="active"<?php endif; ?>>
                                <a href="<?php echo url('ad/add'); ?>">
                                    <span class="menu-text">
                                       图片添加                                </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                            <li <?php if($ca == 'Ad/editcate'): ?> class="active"<?php endif; ?>>
                                <a href="<?php echo url('ad/editcate'); ?>">
                                    <span class="menu-text">
                                      广告类型                             </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                        </ul>
                    </li>  -->

                    <li <?php if($con == 'Conf'  OR ($con == 'Log') OR ($con == 'Download')): ?> class="open"<?php endif; ?>>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-gear"></i>
                            <span class="menu-text">系统配置  </span>
                            <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
                            <li <?php if($ca == 'Conf/conf'): ?> class="active"<?php endif; ?>>
                                <a href="<?php echo url('Conf/conf'); ?>">
                                    <span class="menu-text">
                                      系统设置                           </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                            <!-- <li <?php if($ca == 'Conf/conf_en'): ?> class="active"<?php endif; ?>>
                                <a href="<?php echo url('Conf/conf_en'); ?>">
                                    <span class="menu-text">
                                       英文配置                         </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li> -->
							<li <?php if($ca == 'Log/lst'): ?> class="active"<?php endif; ?>>
                                <a href="<?php echo url('Log/lst'); ?>">
                                    <span class="menu-text">
                                        操作日志                             </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
							<!-- <li <?php if($ca == 'Download/lst'): ?> class="active"<?php endif; ?>>
                                <a href="<?php echo url('Download/lst'); ?>">
                                    <span class="menu-text">
                                         资料上传                           </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li> -->


                        </ul>
                    </li>
<!--                     <li <?php if($con == 'Log'): ?> class="open"<?php endif; ?>>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-file-text"></i>
                            <span class="menu-text">系统日志</span>
                            <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
                            <li <?php if($ca == 'Log/lst'): ?> class="active"<?php endif; ?>>
                                <a href="<?php echo url('Log/lst'); ?>">
                                    <span class="menu-text">
                                        日志列表                              </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>




                        </ul>
                    </li> -->

 

                </ul>
                <!-- /Sidebar Menu -->
            </div>
            <!-- /Page Sidebar -->
            <!-- Page Content -->
            <div class="page-content">
                <!-- Page Breadcrumb -->
                <div class="page-breadcrumbs">
                    <ul class="breadcrumb">
                    <li>
                        <i class="fa fa-home"></i>
                        <a href="<?php echo url('Index/index'); ?>">系统</a>
                    </li>
                                        <li>
                        <a href="<?php echo url('lst'); ?>">通知管理</a>
                    </li>
                                        <li class="active">添加调价通知</li>
                                        </ul>
                </div>
                <!-- /Page Breadcrumb -->

                <!-- Page Body -->
                <div class="page-body">

<div class="row">
    <div class="col-lg-12 col-sm-12 col-xs-12">
        <div class="widget">
        	<div class="widget-header bordered-bottom bordered-blue">
                <span class="widget-caption">添加调价通知</span>
                <input type="text" id="inputid" value="1"  style="display:none;">
                <input type="text" id="inputid_2" value="" style="display:none;">
            </div>
            <form class="form-horizontal" role="form" action="" method="post"  >
            <div class="widget-body">
               <div class="widget-main ">
                   <div class="tabbable">
                       <ul class="nav nav-tabs tabs-flat" id="myTab11">
                           <li class="active">
                               <a data-toggle="tab" href="#home11">
                                  	通知信息
                               </a>
                           </li>
                          
                       </ul>
                       <div class="tab-content tabs-flat">
                           <div id="home11" class="tab-pane active">
                                
                        	

                        		
								<div class="form-group">
		                            <label for="username" class="col-sm-2 control-label no-padding-right">起止时间</label>
									<div class="col-sm-3">
											<span class="input-icon icon-right">
                                               <input class="form-control date-picker" readonly="readonly" id ="publish_time"  type="text" placeholder="请输入起止日期">
                                               <input class="form-control date-picker" readonly="readonly" id ="publish_stime" name="s_time" type="hidden"  ">
                                               <input class="form-control date-picker" readonly="readonly" id ="publish_etime" name="e_time" type="hidden"  ">
                                               <i class="fa fa-calendar"></i>
                                            </span>
	                               	</div>
                               </div>

								

                        		
								<div class="form-group">
		                            
		                            <label for="username" class="col-sm-2 control-label no-padding-right">相关类型</label>
		                            <div class="col-lg-5 col-sm-6 col-xs-12">
                                        <div>
                                            <div class="bootstrap-tagsinput" class="tags" id="tags" tabindex="1">
                                            <input type="text"  data-role="tagsinput" placeholder="Add tags"
                                            style="display:none;" name="type" id="form-field-tags" >

                                            <input  type="text" style="height:40px;" class="tags_enter" autocomplete="off">
                                            </div>

                                        </div>
                        			</div>
                        		</div>
                        		
                    <input type="text" style="display:none;" name="typeid" id="form-field-typeid">
                        		
                        		<div class="form-group">
		                            <label for="username" class="col-sm-2 control-label no-padding-right">标签</label>
		                            <div class="col-lg-6 col-sm-6 col-xs-12">
										<div id="js-tags"  style="width:400px;">
											<?php if(is_array($mobiletype) || $mobiletype instanceof \think\Collection): $i = 0; $__LIST__ = $mobiletype;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$mobiletype): $mod = ($i % 2 );++$i;?>
                                              <a  href="javascript:void(0);" class="btn btn-magenta list-tag"  data-id="<?php echo $mobiletype['id']; ?>"><?php echo $mobiletype['m_mobile']; ?></a>
                                            <?php endforeach; endif; else: echo "" ;endif; ?>
                                       </div>
                        			</div>
                        		</div>



<!-- <!-- 上传图片 -->
                        		<div class="form-group">
		                            <label for="username" class="col-sm-2 control-label no-padding-right">示例图片</label>
			                            <div class="col-sm-4">
			                                <input type="button" value="上传图片"  class="btn btn-danger shiny"
											 	onclick="GetUploadify(1,'original_img','notice','call_back_img');"/>
                                        	<input type="hidden" class="input-sm original_img" 
                                        		name="imgurl" id="original_img" value="" onchange="changesrc(this.value)" />
  										<span class="span_thb">暂无图片！</span><a target='_blank' href='' id='original_img2'>
                                        <img width='25'  class='img_thb' height='25' src='' style="display:none;"
                                        onmouseover="getbimg(this)" onmouseout="layer.closeAll();"></a>
                                        <span id="err_original_img" style="color:#F00; display:none;"></span>
			                            </div>
                        		</div>
<!-- <!-- 上传图片 -->
				

								




                                <div class="form-group">
                                        <label class="col-sm-2 control-label no-padding-right" for="username">是否显示</label>

                                        <div class="col-sm-6">
                                           <div class="checkbox">
                                            	<label>
                                                    <input class="checkbox-slider toggle colored-darkorange" checked="checked"
                                                    type="checkbox" name="zhuangtai" value="1" >
                                                    <span class="text"></span>
                                                </label>
                                            </div>
                                        </div>
                               </div>
                               
								<div class="form-group">
		                            <label for="username" class="col-sm-2 control-label no-padding-right">详情</label>
		                            <div class="col-sm-3">
		                                <textarea rows="5" name="desc" class="form-control" id="desc" style="width:420px;">机型{TYPE}价格调整为1500元，请您在{TIME}以前完成操作。</textarea>
		                            <span class="text-danger" style="margin:0 auto">{TYPE}为机型号，{TIME}为截止日期，禁止删除！</span>
		                            </div>	                        
                        		</div>
                                
						
                           </div>                           
                           
                       </div>
                   </div>
               </div>

	       		<div class="form-group">
	              <div class="col-sm-offset-2 col-sm-10">

	                  <button type="submit" class="btn btn-default" onclick="return check_error()">保存信息</button>
	              </div>
	            </div>
            </div>
          </form>
        </div>
    </div>
</div>
                </div>
                <!-- /Page Body -->
            </div>
            <!-- /Page Content -->
		</div>
	</div>
	    <!--Basic Scripts-->
    <script src="__ADMIN__/style/jquery_002.js"></script>
    <script src="__ADMIN__/style/bootstrap.js"></script>
    <script src="__ADMIN__/style/jquery.js"></script>
    <script src="__ADMIN__/style/validation/forum_check.js"></script>
    <!--Beyond Scripts-->
    <script src="__ADMIN__/style/beyond.js"></script>
    <!-- baidu -->
    <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=NOraeOytceNxSBgQ7pY9qbrl"></script>
	 <script type="text/javascript" src="__ADMIN__/style/jquery-1.10.2.min.js"></script>
     <script type="text/javascript" src="__ADMIN__/style/modernizr.min.js"></script>
  <!--Bootstrap Date Range Picker-->
	<link href="__ADMIN__/style/datetime/daterangepicker-bs3.css" rel="stylesheet" type="text/css">
    <script src="__ADMIN__/style/datetime/moment.js"></script>
    <script src="__ADMIN__/style/datetime/daterangepicker.js"></script>
<!--layer-->
    <script src="__ADMIN__/plus/layer/layer.js"></script>

    

		<script type="text/javascript">
			function check_error(){
				blurInputLoginArea($("#title"));
								  
			  var i = 0;
		      $(".error").each(function() {
		          if ($(this).css("display") == 'inline') {
		              i++;
		          }
		      })
		      if(i==0){ return true;}
		      else{return false;}

		  }
		  </script>
		 
		<!-- <!--   //日历控件 -->
	
		   <script type="text/javascript">
		   
				var beginTimeStore = $('#publish_stime').val()?$('#publish_stime').val():new Date();
				//alert(beginTimeStore);
	            var endTimeStore = $('#publish_etime').val()?$('#publish_etime').val():new Date();
	            $('#publish_time').daterangepicker({
	            	format:"YYYY-MM-DD",
	            	"startDate":beginTimeStore,
	            	"endDate":endTimeStore,
	                "timePicker": true,
	                "timePicker24Hour": false,
	                "linkedCalendars": true,
	                "autoUpdateInput": true,
	                "locale": {
	                    applyLabel : '确定',  
	                    cancelLabel : '取消',  
	                    fromLabel : '起始时间',  
	                    toLabel : '结束时间',
	                }
	            }, function(start, end, label) {
	                $('#publish_time').val(start.format('YYYY-MM-DD') + ' ~ ' + end.format('YYYY-MM-DD')); 
	                $('#publish_stime').val(start); 
	                $('#publish_etime').val(end); 
	            });
		  </script>
		  <!-- <!--   //通讯录 -->
		   <script type="text/javascript">

		   		

//标签js
function spite_key(){
	//console.log("1212");
	var tags = $("#form-field-tags").val();


	if(tags){
		var tagss=tags.split(",");
	    //tagss.pop();

	    $.each(tagss, function(){
	    	$("#form-field-tags").before("<span class='tag label label-info'>" + this + "<span data-role='remove' class='tag_close'></span></span>"); //添加标签
	 });
	}
}
spite_key(); 

function triggle_key(){

	var tags = "";
	var test="";
    $("#tags").children(".tag").each(function() {
    	tag_key=$(this).text().replace(/×/, "1");
        tags += tag_key + ",";
    })
    $("#tags").children(".tag").each(function() {
    	tag_typeid=$(this).attr('data-typeid');
    	test += tag_typeid + ",";
    })

    $("#form-field-tags").val(tags);
    $("#form-field-typeid").val(test);
}

function addTag(tag,tag_typeid) {
	
        //var tag = obj.val();
    var length = $("span.tag").length;
    if (length > 4) {
    	layer.alert('标签个数不能超过5个！', {icon: 2});

        return false;
    }
    if (tag != '') {
        var i = 0;
        $(".tag").each(function() {

            if ($(this).text() == tag) {
            	layer.msg('不能重复添加！',{icon: 2});

                i++;

            }
        })
        $(".tags_enter").val('');
        if (i > 0) { //说明有重复
            return false;
        }
        if (tag.length > 10) {
        	layer.alert('标签长度不能大于10个字符！', {icon: 2});

            return false;
        }
    	
        $("#form-field-tags").before("<span data-typeid='"+tag_typeid+"' class='tag label label-info'>" + tag + "<span data-role='remove' class='tag_close'></span></span>"); //添加标签
        //typeid添加
       

    }
    triggle_key();
}

$(function() {
    /*******标签tag******/
    $(".tags_enter").blur(function() { //焦点失去触发
        addTag($(this).val());
        $(this).parents(".tags").css({"border-color": "#d5d5d5"})
    }).keydown(function(event) {
        var key_code = event.keyCode;
        if (key_code == 13) { //enter
            addTag($(this).val());
        }
    });
    $("#tags").on("click",".tag_close", function() {
        $(this).parent(".tag").remove();
        triggle_key();
    });
    $(".tags").click(function() {
        $(".tags_enter").focus();
        $(this).css({"border-color": "#91b8d0"})
    }).blur(function() {
        $(this).css({"border-color": "#d5d5d5"})
    })


    /*******添加推荐标签******/
    
    $("#js-tags").children(".list-tag").click(function() {
    	
        var tag = $(this).text();       
        tags += tag + ",";  
        
      //添加typeid   form-field-typeid;
        var tag_typeid = $(this).attr('data-id');
        
        
        addTag(tag,tag_typeid);

    })
})


		  </script>
<script type="text/javascript">
	 function call_back_img(fileurl_tmp){
	
	        $("#original_img").val(fileurl_tmp);
	    	$("#original_img2").attr('href', fileurl_tmp);
	    	 $(".img_thb").attr('src', fileurl_tmp);
	    	$(".img_thb").attr('style', "display:inline;");
	    	$(".span_thb").attr('style', "display:none;");
	    }
	    function getbimg(o){
	  var img_src = o.src;
	  var str = '<img width="400px" src="' + img_src + '">';
			  layer.tips(str,o,{tips: [1, '#fff'], time:4000});
	 	}
   		 
  </script>
	</body>
</html>