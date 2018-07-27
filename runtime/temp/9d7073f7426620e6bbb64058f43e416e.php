<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:92:"C:\phpStudy\PHPTutorial\WWW\price_adjust\public/../application/admin\view\phone_book\lst.htm";i:1531707623;s:88:"C:\phpStudy\PHPTutorial\WWW\price_adjust\public/../application/admin\view\public\top.htm";i:1531707249;s:89:"C:\phpStudy\PHPTutorial\WWW\price_adjust\public/../application/admin\view\public\left.htm";i:1531214619;}*/ ?>
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

    <!--Beyond styles-->
    <link id="beyond-link" href="__ADMIN__/style/beyond.css" rel="stylesheet" type="text/css">
    <link href="__ADMIN__/style/demo.css" rel="stylesheet">
    <link href="__ADMIN__/style/typicons.css" rel="stylesheet">
    <link href="__ADMIN__/style/animate.css" rel="stylesheet">
    <link href="__ADMIN__/style/typicons.min.css" rel="stylesheet" />
      <!-- <!-- table -->
	<link href="__ADMIN__/style/dataTables.bootstrap.css" rel="stylesheet">





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
                      <li class="active">通讯录</li>
                      </ul>
                </div>
                <!-- /Page Breadcrumb -->

                <!-- Page Body -->
                <div class="page-body">

						<div class="row">
                        <div class="col-xs-12 col-md-12">
                            <div class="widget">
                                <div class="widget-header ">
                                    <span class="widget-caption">公司人员</span>
                                    <div class="widget-buttons">
                                        <a href="#" data-toggle="maximize">
                                            <i class="fa fa-expand"></i>
                                        </a>
                                        <a href="#" data-toggle="collapse">
                                            <i class="fa fa-minus"></i>
                                        </a>
                                        <a href="#" data-toggle="dispose">
                                            <i class="fa fa-times"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="widget-body">
                                    <div class="table-toolbar" >
                                    	<div style="float:left;margin-left:3px;">
	                                        <a id="editabledatatable_new" href="javascript:void(0);" class="btn btn-azure"  onclick="return initialize_selectbox();">
	                                        	添加成员
	                                        </a>
	                                      	<a href="javascript:void(0);" class="btn btn-darkorange shiny" id="pdel" onclick="pdel()">
	                                      		删除选项</a>
										</div>

                                       <div class="col-lg-2 col-sm-6 col-xs-12" style="margin-left:120px;margin-bottom:-50px;">
		                                    	<div class="databox radius-bordered databox-shadowed databox-graded"" >
		                                        <div class="databox-left no-padding">
		                                            <img src="__ADMIN__/assets/img/avatars/Nicolai-Larson.jpg" style="width:65px; height:65px;">
		                                        </div>
		                                        <div class="databox-right padding-top-20">
		                                            <div class="databox-stat yellow radius-bordered">
		                                                <i class="stat-icon icon-lg fa fa-tasks"></i>
		                                            </div>
		                                            <div class="databox-text darkgray" style="margin-left:10px;margin-top:-20px;"><h4 style="font-family:'微软雅黑';"><a id="name_sort" href="javascript:void(0);" >姓名</a></h2></div>
		                                            <div class="databox-text darkgray" style="margin-left:3px;margin-top:-10px;">
		                                             <!-- <!-- 下拉框 -->

					                                            <select  id="name_select" onchange="test_input(this)" style=" background: transparent;border:0;">
					                                            <option value="">请选择</option>
					                                            	<?php if(is_array($nickname) || $nickname instanceof \think\Collection): $i = 0; $__LIST__ = $nickname;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$nickname): $mod = ($i % 2 );++$i;?>
					                                            		<option value="<?php echo $nickname['nickname']; ?>"><?php echo $nickname['nickname']; ?></option>
					                                            	<?php endforeach; endif; else: echo "" ;endif; ?>
					                                            </select>

					                                 <!-- <!-- 下拉框 --></div>
		                                        </div>
		                                    </div>
                                	 </div>
                               		  <div class="col-lg-2 col-md-3 col-sm-6 col-xs-12" style="margin-left:20px;margin-bottom:-50px;">
		                                    <div class="databox radius-bordered databox-shadowed databox-graded">
		                                        <div class="databox-left no-padding bordered-left-2 bordered-palegreen">
		                                            <img src="__ADMIN__/assets/img/avatars/adam-jansen.jpg" style="width:65px; height:65px;">
		                                        </div>
		                                        <div class="databox-right padding-top-20">
		                                            <div class="databox-stat palegreen">
		                                                <i class="stat-icon icon-xlg fa fa-phone"></i>
		                                            </div>
		                                            <div class="databox-text darkgray" style="margin-left:10px;margin-top:-20px;"><h4 style="font-family:'微软雅黑';"><a id="phone_sort" href="javascript:void(0);" >电话</a></h4></div>
		                                            <div class="databox-text darkgray" style="margin-left:3px;margin-top:-10px;">
													<!-- <!-- 下拉框 -->

					                                            <select  id="phone_select" onchange="test_phone(this)" style=" background: transparent;border:0;">
					                                            <option value="">请选择</option>

					                                            		<option value="1111"></option>

					                                            </select>

					                                 <!-- <!-- 下拉框 -->
                                				 </div>
		                                        </div>
		                                    </div>
		                                </div>

										<div class="col-lg-2 col-md-3 col-sm-3 col-xs-12" style="margin-left:20px;margin-bottom:-50px;">
		                                    <div class="databox radius-bordered databox-shadowed databox-graded">
		                                        <div class="databox-left bg-azure">
		                                            <div class="databox-piechart">
		                                                <div data-toggle="easypiechart" class="easyPieChart" data-barcolor="#fff" data-linecap="butt" data-percent="76" data-animate="500" data-linewidth="3" data-size="47" data-trackcolor="#7fe2fa" style="width: 47px; height: 47px; line-height: 47px;"><span class="white font-90"><h4><?php echo $count; ?></h4></span><canvas width="47" height="47"></canvas></div>
		                                            </div>
		                                        </div>
		                                        <div class="databox-right">
		                                            <span class="databox-number azure" ><h4 style="font-family:'微软雅黑';">部门人数</h4></span>

		                                            <div class="databox-state bg-azure">
		                                                <i class="fa fa-check"></i>
		                                            </div>
		                                        </div>
		                                    </div>
		                                </div>

									</div>
									<div style="clear:both;"></div>
                                    <table class="table table-striped table-hover table-bordered" id="editabledatatable">
                                        <thead>
                                            <tr role="row">


                                                 <th class="text-center" width="7%">
													<label style="height:15px;">
			                                            <input type="checkbox"  name="" id="check">
			                                            <span class="text"></span>
													</label>
                                   				</th>

                                                <th id="th_name">
                                                    Full Name
                                                </th>
                                                <th style="display:none;">
                                                    id
                                                </th>
                                                <th id="th_phone">
                                                    Phonenum
                                                </th>
                                                 <th>
                                                    Notes
                                                </th>
                                                <th>
                                                   setting
                                                </th>
                                            </tr>
                                        </thead>
 										<tfoot  style="display:none;">
                                            <tr>
                                                <th rowspan="1" colspan="1"><input type="text"   class="form-control input-sm"></th>
                                                <th rowspan="1" colspan="1"><input type="text" name="search_nickname" id="search_nickname"  class="form-control input-sm"></th>
                                                <th rowspan="1" colspan="1"><input type="text"   class="form-control input-sm" ></th>
                                                <th rowspan="1" colspan="1"><input type="text" name="search_phone"  id="search_phone" class="form-control input-sm"></th>
                                                <th rowspan="1" colspan="1"><input type="text"   class="form-control input-sm"></th>
                                                <th rowspan="1" colspan="1"><input type="text"  class="form-control input-sm"></th>
                                            </tr>
                                        </tfoot>
                                        <tbody>

											<?php if(is_array($phonebook) || $phonebook instanceof \think\Collection): $i = 0; $__LIST__ = $phonebook;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$pb): $mod = ($i % 2 );++$i;?>
                                            <tr>


                                                <td align="center">

														<label style="height:15px;" }>
				                                            <input type="checkbox"  name="" class="check" value="<?php echo $pb['id']; ?>">
				                                            <span class="text"></span>
														</label>
												</td>

                                                <td><?php echo $pb['nickname']; ?></td>
                                                <td style="display:none;"><?php echo $pb['id']; ?></td>
                                                <td class="center "><?php echo $pb['phonenum']; ?></td>
                                                <td class="center "><?php echo $pb['notes']; ?></td>
                                                <td>
                                                    <a href="#" class="btn btn-info btn-xs edit"><i class="fa fa-edit"></i> Edit</a>
                                                    <a href="#" class="btn btn-danger btn-xs delete"><i class="fa fa-trash-o"></i> Delete</a>
                                                </td>
                                            </tr>
											<?php endforeach; endif; else: echo "" ;endif; ?>
                                        </tbody>
                                    </table>
                                </div>
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

    <script src="__ADMIN__/style/bootstrap.js"></script>
    <script src="__ADMIN__/style/jquery.js"></script>
    <!--Beyond Scripts-->
    <script src="__ADMIN__/style/beyond.js"></script>
    <script src="__ADMIN__/style/validation/forum_check.js"></script>
     <!--layer-->
     <!-- <script type="text/javascript" src="__ADMIN__/style/jquery-1.10.2.min.js"></script> -->
	<script src="__ADMIN__/plus/layer/layer.js"></script>
    <!-- <!-- table -->
	<script src="__ADMIN__/style/datatable/jquery.dataTables.min.js"></script>
    <script src="__ADMIN__/style/datatable/ZeroClipboard.js"></script>
    <script src="__ADMIN__/style/datatable/dataTables.tableTools.min.js"></script>
    <script src="__ADMIN__/style/datatable/dataTables.bootstrap.min.js"></script>
    <script src="__ADMIN__/style/datatable/datatables-init.js"></script>

    <!-- <!-- chart -->
    <script src="__ADMIN__/style/easypiechart/jquery.easypiechart.js"></script>
    <script src="__ADMIN__/style/easypiechart/easypiechart-init.js"></script>
    <script src="__ADMIN__/style/easypiechart/Chart.js"></script>
    
    
	<script>
    InitiateEditableDataTable.init();
	</script>



	<script type="text/javascript">
    $("#check").click(function(){
        if($("#check").prop("checked"))
        {
            $(".check").prop("checked","true")
        }else
        {
            $(".check").removeAttr("checked")
        }
    })
	</script>

    <script type="text/javascript">
	    $("#name_sort").click(function(){
	    	$("#th_name").trigger("click");
	    })
	    $("#phone_sort").click(function(){
	    	$("#th_phone").trigger("click");
	    })
		</script>
		<script type="text/javascript">
	    $("#check").click(function(){

	        if($("#check").prop("checked"))
	        {
	            $(".check").prop("checked","true");
	        }else
	        {
	            $(".check").removeAttr("checked");
	        }
	    })
		function pdel(){

	    	var obj = document.getElementsByClassName("check");
	    	var check_val = new Array();
	    	for(k in obj){
	            if(obj[k].checked)
	                check_val.push(obj[k].value);
	        }
	    	check_val = check_val.join(",");
	    	if(!check_val){
	    		layer.alert('没有选中项', {icon: 2});
	    		return false;
	    	}
	    	//console.log(check_val);
	    	layer.confirm('确定删除选中项吗?', {icon: 3, title:'温馨提示'}, function(index){
                	layer.close(index);
	    	 $.ajax({
             	type : "POST",
     			url:'pdel',
     			data: {pid:check_val},
     			success: function(v){
 	    				if (v == 1){
 	    					layer.msg('批量删除成功！',{icon: 1});
 	    					setTimeout("location.reload()",1000);}

 	    				else{layer.msg('删除失败！',{icon: 2});}
					}
     		});
	      });
		}
	    //下拉框检索
	    function test_input(v){
			$("#search_nickname").val(v.value);
			$("#search_nickname").keyup();

		}
	    function test_phone(o){
	    	$("#search_phone").val(o.value);
			$("#search_phone").keyup();
	    }


	    function initialize_selectbox(){
			$("#name_select").find("option[value='']").attr("selected",true);
			$("#name_select").trigger("onchange");
			$("#phone_select").find("option[value='']").attr("selected",true);
			$("#phone_select").trigger("onchange");


	    }

</script>



</body></html>