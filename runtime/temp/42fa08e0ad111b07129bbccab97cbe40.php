<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:87:"C:\phpStudy\PHPTutorial\WWW\price_adjust\public/../application/admin\view\conf\conf.htm";i:1531109324;s:88:"C:\phpStudy\PHPTutorial\WWW\price_adjust\public/../application/admin\view\public\top.htm";i:1531707249;s:89:"C:\phpStudy\PHPTutorial\WWW\price_adjust\public/../application/admin\view\public\left.htm";i:1531214619;}*/ ?>
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
                                        <li class="active">配置管理</li>
                                        </ul>
                </div>
                <!-- /Page Breadcrumb -->

                <!-- Page Body -->
                <div class="page-body">

<button type="button" tooltip="添加配置" class="btn btn-sm btn-azure btn-addon">网站配置
</button>
<div class="row">
    <div class="col-lg-12 col-sm-12 col-xs-12">
        <div class="widget">
            <div class="widget-body">
                <div class="flip-scroll">
                    <form action="" method="post">
                        <table class="table table-bordered table-hover">
                            <thead class="">
                                <tr>
                                    <th class="text-right" width="10%">配置名称</th>
                                    <th class="text-left">配置值</th>
                                </tr>
                            </thead>
                            <tbody>
                                 <tr>
                                     <td align="right" style="vertical-align:middle;">公司名称</td>
                                     <td align="left">
                                         <input name="cp_name"  id="cp_name" type="text" class="form-control" style="width:420px;" value="<?php echo $confres['cp_name']; ?>">
                                         
                                     </td>
                                 </tr>
                                 <tr>
                                     <td align="right" style="vertical-align:middle;">创始人</td>
                                     <td align="left">
                                         <input name="cp_founder"  id="cp_founder" type="text" class="form-control" style="width:320px;" value="<?php echo $confres['cp_founder']; ?>">
                                     </td>
                                 </tr>
                                 <tr>
                                     <td align="right" style="vertical-align:middle;">联合创始人</td>
                                     <td align="left">
                                         <input name="cp_alliance"  id="cp_alliance" type="text" class="form-control" style="width:220px;" value="<?php echo $confres['cp_alliance']; ?>">
                                     </td>
                                 </tr>
                                 <tr>
                                     <td align="right" style="vertical-align:middle;">董事长</td>
                                     <td align="left">
                                         <input name="cp_Chairman"  id="cp_Chairman" type="text" class="form-control" style="width:520px;" value="<?php echo $confres['cp_Chairman']; ?>">
                                     </td>
                                 </tr>
                                 <tr>
                                     <td align="right" style="vertical-align:middle;">总经理</td>
                                     <td align="left" style="padding-right:0">
                                         <input name="cp_manager"  id="cp_manager" type="text" class="form-control" style="width:420px;display:inline-block" value="<?php echo $confres['cp_manager']; ?>">
                                     	 <div style="color:green;margin:5px;display:inline-block;"><span>如有多人,请用逗号分隔</span></div>
                                     </td>
                                 </tr>
                                 <tr>
                                     <td align="right" style="vertical-align:middle;">LOGO</td>
                                     <td align="left">
                                         <input type="button" value="上传logo" style="margin-right:40px;" class="btn btn-darkorange shiny"
			                                 onclick="GetUploadify(1,'original_img','conf_logo','call_back_2');"/>
                                        	<input type="text" class="input-sm original_img"  name="cp_logo"  style="display:none;"
                                        	id="original_picture" value="<?php echo $confres['cp_logo']; ?>" onchange="changesrc(this.value)" />
										<?php if($confres['cp_logo'] != null): ?>
	             							<a target='_blank' href='<?php echo $confres['cp_logo']; ?>' id='original_picture2'>
	                                        <img width='100'  class='img_picture'  src='<?php echo $confres['cp_logo']; ?>'
	                                        onmouseover="getbimg(this)" onmouseout="layer.closeAll();" ></a>
	                                    <?php else: ?>
	                                    <span class="span_picture">暂无图片！</span><a target='_blank' href='$ad' id='original_img2'>
                                        <img width='25'  class='img_picture'  src='$ad' style="display:none;"></a>
										<?php endif; ?>
                                        <span id="err_original_img" style="color:#F00; display:none;"></span>
                                     </td>
                                 </tr>
                                 <tr>
                                     <td align="right" style="vertical-align:middle;">电话</td>
                                     <td align="left">
                                         <input name="cp_phone" id="cp_phone" type="text" class="form-control" style="width:320px;" value="<?php echo $confres['cp_phone']; ?>">
                                     </td>
                                 </tr>
                                 <tr>
                                     <td align="right" style="vertical-align:middle;">邮箱</td>
                                     <td align="left">
                                         <input name="cp_mail" id="cp_mail" type="text" class="form-control" style="width:520px;" value="<?php echo $confres['cp_mail']; ?>">
                                     </td>
                                 </tr>
                                 
                                 <tr>
                                     <td align="right" style="vertical-align:middle;">备案号</td>
                                     <td align="left">
                                         <input name="cp_icp" type="text" class="form-control" style="width:420px;" value="<?php echo $confres['cp_icp']; ?>">
                                     </td>
                                 </tr>
                                  <tr>
                                     <td align="right" style="vertical-align:middle;">地址</td>
                                     <td align="left">
                                         <input name="cp_address" id="cp_address" type="text" class="form-control" style="width:620px;display:inline-block" value="<?php echo $confres['cp_address']; ?>">
                                    	 <div style="color:green;margin:5px;display:inline-block;"><span>如有多个地址,请用逗号分隔</span></div>
                                     </td>
                                     
                                 </tr>
                                 <tr>
                                     <td align="right">公司地址</td>
                                     <td align="left">
                                         <div class="map-conf" id="map-conf" style="height:350px;width:520px;border:1px solid grey;"></div>
			                                <input type="hidden"  value="<?php echo $confres['cp_point']; ?>" size="85" name="cp_point" id="cp_point" >
                                     </td>
                                 </tr>
                                 <tr>
                                     <td align="right" style="vertical-align:middle;">首页banner简介</td>
                                     <td align="left">
                                     	<textarea rows="4" name="cp_banner_desc" class="form-control" id="cp_banner_desc" style="width:450px;"><?php echo $confres['cp_banner_desc']; ?></textarea>
                                     </td>
                                 </tr>
                                  <tr>
                                     <td align="right" style="vertical-align:middle;">首页公司简介</td>
                                     <td align="left">
                                     	<textarea rows="5" name="cp_desc" class="form-control" id="cp_desc" style="width:620px;"><?php echo $confres['cp_desc']; ?></textarea>
                                     </td>
                                 </tr>
                                 <tr>
                                     <td align="right" style="vertical-align:middle;">地图</td>
                                     <td align="left">
                                        <input type="button" value="上传图片"  style="margin-right:40px;" class="btn btn-danger shiny"
										 	onclick="GetUploadify(1,'original_img','conf_map','call_back_img');"/>
                                       	<input type="hidden" class="input-sm original_img"
                                       		name="cp_map" id="original_img" value="<?php echo $confres['cp_map']; ?>" onchange="changesrc(this.value)" />
  										<?php if($confres['cp_map'] != null): ?>
             							<a target='_blank' href='<?php echo $confres['cp_map']; ?>' id='original_img2'>
                                        <img width='100'  class='img_thb'  src='<?php echo $confres['cp_map']; ?>' ></a>
	                                    <?php else: ?>
	                                    <span class="span_thb">暂无图片！</span><a target='_blank' href='$ad' id='original_img2'>
                                        <img width='25'  class='img_thb' height='25' src='$ad' style="display:none;"></a>
										<?php endif; ?>
										 <span id="err_original_img" style="color:#F00; display:none;"></span>
                                     </td>
                                 </tr>
                                 <tr>
                                     <td align="right" style="vertical-align:middle;">二维码</td>
                                     <td align="left">
                                        <input type="button" value="传二维码" style="margin-right:40px;" class="btn btn-blue shiny"
			                                 onclick="GetUploadify(1,'original_img','conf_qrcode','call_back_qrcode');"/>
                                        	<input type="text" class="input-sm original_img"  name="cp_qrcode"  style="display:none;"
                                        	id="original_qrcode" value="<?php echo $confres['cp_qrcode']; ?>" onchange="changesrc(this.value)" />
										<?php if($confres['cp_qrcode'] != null): ?>
	             							<a target='_blank' href='<?php echo $confres['cp_qrcode']; ?>' id='original_qrcode2'>
	                                        <img width='100'  class='img_qrcode'  src='<?php echo $confres['cp_qrcode']; ?>'></a>
	                                    <?php else: ?>
	                                    <span class="span_qrcode">暂无图片！</span><a target='_blank' href='$ad' id='original_img2'>
                                        <img width='25'  class='img_qrcode' height='25' src='$ad' style="display:none;"></a>
										<?php endif; ?>
                                        <span id="err_original_img" style="color:#F00; display:none;"></span>
                                     </td>
                                 </tr>
                                 
                                 
                                
                                 <tr>
                                     <td align="right" style="vertical-align:middle;">公司详情</td>
                                     <td align="left">
                                     	
                                     	<textarea id="content" name="cp_content"><?php echo $confres['cp_content']; ?></textarea>
                                     </td>
                                 </tr>
                            </tbody>
                        </table>
                        <div  align="left"><input class="btn btn-primary btn-sm shiny" style="margin-left:20%; margin-top:10px;" type="submit" value="提交修改" ></div>
                    </form>
                </div>
                <div>
                	                </div>
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
    <script src="__ADMIN__/style/jquery_002.js"></script>
    <script src="__ADMIN__/style/bootstrap.js"></script>
    <script src="__ADMIN__/style/jquery.js"></script>
    <!--Beyond Scripts-->
    <script src="__ADMIN__/style/beyond.js"></script>
    <script src="__ADMIN__/style/avatar/global.js" type="text/javascript"></script>
    <script src="__ADMIN__/ueditor/ueditor.config.js"></script>
    <script src="__ADMIN__/ueditor/ueditor.all.min.js"></script>
     <script type="text/javascript">
	    UE.getEditor('content',{initialFrameWidth:720,initialFrameHeight:400,});
    </script>
     <!-- baidu -->
    <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=NOraeOytceNxSBgQ7pY9qbrl"></script>
     <script type="text/javascript">
	var point_cng = $("#cp_point").val();
	var address_cng = $("#cp_address").val();
	address_cng += "<br/>联系电话: "+$("#cp_phone").val();
	var name_cng = $("#cp_name").val();
	var newLoc=point_cng.split(",");
	console.log(name_cng);
    var map = new BMap.Map("map-conf");
    map.centerAndZoom(new BMap.Point(parseFloat(newLoc[0]),parseFloat(newLoc[1])), 13);
    //map.panBy(250,135);//因为嵌套在表格里面，所以会有偏移，可以手动调整回来(根据地图div的width和height来设定数值)

    //0.控件设置
    //平移缩放
    map.addControl(new BMap.NavigationControl());
    //鼠标滚轮放大缩小
    map.enableScrollWheelZoom();
    //...




    //1.添加点击侦听
    map.addEventListener("click", function (e) {
    	/* var point = $("#info_point").val();
    	alert(point); */
    	map.clearOverlays();
    	var point_x = e.point.lng;
    	var point_y = e.point.lat;

    	var _p = new BMap.Point(point_x,point_y);
    	var _m1 = new BMap.Marker(_p);
    	map.addOverlay(_m1);
    	_m1.setAnimation(BMAP_ANIMATION_BOUNCE);

    	$("#cp_point").val(point_x+ "," +point_y);
        });

    //2. 添加静态标识
    //var point_cng = $("#info_point").val();


    var _p = new BMap.Point(parseFloat(newLoc[0]),parseFloat(newLoc[1]));
    var _m1 = new BMap.Marker(_p);
    map.addOverlay(_m1);

    //3. 动画
    _m1.setAnimation(BMAP_ANIMATION_BOUNCE);

    //4.弹出窗口
    var _info1 = new BMap.InfoWindow(address_cng);
    _m1.addEventListener("mouseover", function () { this.openInfoWindow(_info1); });
    _m1.addEventListener("mouseout", function () { this.closeInfoWindow(_info1); });

    //5. 标签提示
    /* var _opts = { position: _p, offset: new BMap.Size(25, -10) }
    var _lab = new BMap.Label(name_cng, _opts);
    if(name_cng){
    	map.addOverlay(_lab);
        _lab.setStyle({ color: "black", fontSize: "14px", padding: "6px" });
    } */







</script>
<script type="text/javascript">
 					function call_back_img(fileurl_tmp){

		   		        $("#original_img").val(fileurl_tmp);
		   		    	$("#original_img2").attr('href', fileurl_tmp);
		   		    	 $(".img_thb").attr('src', fileurl_tmp);
		   		    	$(".img_thb").attr('style', "display:inline;");
		   		    	$(".span_thb").attr('style', "display:none;");		   		    	
		   		    	$(".span_qrcode").attr('style', "display:none;");
		   		    }
 					function call_back_2(fileurl_tmp){
		   		    	fileurl_tmp=fileurl_tmp.replace('\\','/');
		   		        $("#original_picture").val(fileurl_tmp);
		   		    	$("#original_picture2").attr('href', fileurl_tmp);
		   		    	$(".img_picture").attr('src', fileurl_tmp);
		   		    	$(".img_picture").attr('style', "display:inline;");
		   		    	$(".span_picture").attr('style', "display:none;");
		   		    	
		   		    }
		   			function call_back_qrcode(fileurl_tmp){
		   		    	fileurl_tmp=fileurl_tmp.replace('\\','/');
		   		        $("#original_qrcode").val(fileurl_tmp);
		   		    	$("#original_qrcode2").attr('href', fileurl_tmp);
		   		    	$(".img_qrcode").attr('src', fileurl_tmp);
		   		    	$(".img_qrcode").attr('style', "display:inline;");
		   		    	$(".span_qrcode").attr('style', "display:none;");
		   		    	
		   		    }
		  </script>


</body></html>