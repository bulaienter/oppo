<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:89:"C:\phpStudy\PHPTutorial\WWW\price_adjust\public/../application/admin\view\article\lst.htm";i:1531479439;s:88:"C:\phpStudy\PHPTutorial\WWW\price_adjust\public/../application/admin\view\public\top.htm";i:1531707249;s:89:"C:\phpStudy\PHPTutorial\WWW\price_adjust\public/../application/admin\view\public\left.htm";i:1531214619;}*/ ?>
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
                        <a href="#">系统</a>
                    </li>
                                        <li class="active">调价审核</li>
                                        </ul>
                </div>
                <!-- /Page Breadcrumb -->

                <!-- Page Body -->
                <div class="page-body">

					<div class="row">
                        <div class="col-xs-12 col-md-12">
                            <div class="widget">
                                <div class="widget-header bordered-bottom bordered-yellow">
                                    <span class="widget-caption">提交列表</span>
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
                                <div class="widget-body no-padding">
                                <!-- <!-- 下拉框 -->
									<div class="table-toolbar" >
                                    	<div style="float:left;margin-left:12px;">                                    		
	                                      	<a href="javascript:void(0);" class="btn btn-darkorange shiny" id="pdel" onclick="pdel()">
	                                      		删除选项</a>
	                                      	<div class="btn-group open" style="margin-left:150px;">
											<h5 class="row-title before-blueberry"><i class="fa fa-flash blueberry"></i><a id="cate_sort" style="cursor:pointer; text-decoration:none;">Name 业务员查询</a></h5>
											</div>
                                            <div class="btn-group open">
		                                         <select name="test_select" id="test_select" onchange="test_input(this)" class="form-control">
		                                            	<option value="">请选择</option>
		                                            	<?php if(is_array($test) || $test instanceof \think\Collection): $i = 0; $__LIST__ = $test;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$phonebook): $mod = ($i % 2 );++$i;?>
			                                    			<option value="<?php echo $phonebook['nickname']; ?>"><?php echo $phonebook['nickname']; ?></option>
			                                    		<?php endforeach; endif; else: echo "" ;endif; ?>
		                                         </select>
		                                    </div>		                                    
			                               	<div class="btn-group open" style="margin-left:90px;font-weight:bold;">
			                               		<h5 class="row-title before-palegreen" ><i class="fa fa-columns palegreen"></i><a id="state_sort" style="cursor:pointer; text-decoration:none;">State 状态排序</a></h5>
			                               	</div>
										</div>
									</div>
                                 <!-- <!-- 下拉框 -->
                                 <div style="clear:both;"></div>
                                    <table class="table table-bordered table-hover table-striped" id="searchable">
                                        <thead class="bordered-darkorange">
                                            <tr role="row">
                                            	<th class="text-center" width="7%">
													<label style="height:15px;">
			                                            <input type="checkbox"  name="" id="check">
			                                            <span class="text"></span>
													</label>
                                   				</th>
                                                <th class="text-center">编号</th>
                                                <th class="text-center" width="10%">IMEI</th>
                                                <th id="mobiletype_s" class="text-center" width="8%">手机型号</th>
                                                <th id="cate_s" class="text-center" >所属业务员</th>
                                                <th id="store_s" class="text-center" width="15%">店铺</th>
                                                <th id="data_s" class="text-center" width="12%">提交时间</th>
                                                <th id="state_s" class="text-center">状态</th>
                                                
                                                <th class="text-center" width="20%">操作</th>
                                            </tr>
                                        </thead>

                                        <tfoot style="display:none;">
                                            <tr>
                                                <th rowspan="1" colspan="1"><input type="text"></th>
                                                <th rowspan="1" colspan="1"><input type="text"></th>
                                                <th rowspan="1" colspan="1"><input type="text"></th>
                                                <th rowspan="1" colspan="1"><input type="text"></th>
                                                <th rowspan="1" colspan="1"><input type="text" id="search_cate" ></th>
                                                <th rowspan="1" colspan="1"><input type="text" ></th>
                                                <!-- <th rowspan="1" colspan="1"><input type="text" id="search_onsale"></th> -->
                                                <th rowspan="1" colspan="1"><input type="text" ></th>
                                                <th rowspan="1" colspan="1"><input type="text" ></th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                         	<?php if(is_array($adjust) || $adjust instanceof \think\Collection): $i = 0; $__LIST__ = $adjust;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$adjust): $mod = ($i % 2 );++$i;?>
                                            <tr>
                                            	<td align="center">
													<label style="height:15px;" }>
			                                            <input type="checkbox"  name="" class="check" value="<?php echo $adjust['id']; ?>">
			                                            <span class="text"></span>
													</label>
												</td>
                                                <td align="center"><?php echo $adjust['id']; ?></td>
                                                <td align="center"><?php echo $adjust['imei']; ?></td>
                                                <td align="center"><?php echo $adjust['typename']; ?></td>
                                                <td align="center">张三</td>
                                                 <td align="center"><?php echo $adjust['sarea']; ?>-<?php echo $adjust['sname']; ?></td>
                                                <td align="center"><?php echo date("Y-m-d H:i",$adjust['time']); ?></td>
                                                <td align="center"><div><?php if($adjust['state'] == '3'): ?>
	                                        		 <img style="cursor:pointer;"
													 width="20" height="20" src="__ADMIN__/images/cancel.png">&nbsp;&nbsp;未通过
													 <?php elseif($adjust['state'] == '2'): ?><img style="cursor:pointer;"
													 width="20" height="20" src="__ADMIN__/images/yes.png">&nbsp;&nbsp;已通过
													 <?php elseif($adjust['state'] == '1'): ?><img style="cursor:pointer;"
													 width="20" height="20" src="__ADMIN__/images/a12.png">&nbsp;&nbsp;待审核
													 <?php endif; ?></div>
											   	</td> 
                                               
												<td align="center">
													<a href="<?php echo url('article',array('id'=>$adjust['id'])); ?>" class="btn btn-warning btn-sm shiny">
		                                                <i class="fa  fa-check-square-o"></i> 审核
		                                            </a>
		                                            <a href="#" class="btn btn-info btn-sm shiny">
		                                                <i class="fa fa-edit"></i> 编辑
		                                            </a>
		                                            <a href="#" onClick="warning('确实要删除吗', '<?php echo url('del',array('id'=>$adjust['id'])); ?>')" class="btn btn-danger btn-sm shiny">
		                                                <i class="fa fa-trash-o"></i> 删除
		                                            </a>
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
    <script src="__ADMIN__/style/jquery_002.js"></script>
    <script src="__ADMIN__/style/bootstrap.js"></script>
    <script src="__ADMIN__/style/jquery.js"></script>
    <!--Beyond Scripts-->
    <script src="__ADMIN__/style/beyond.js"></script>
    <!--layer-->
    <script src="__ADMIN__/plus/layer/layer.js"></script>
    <!-- <!-- table -->
	<script src="__ADMIN__/style/datatable/jquery.dataTables.min.js"></script>
    <script src="__ADMIN__/style/datatable/ZeroClipboard.js"></script>
    <script src="__ADMIN__/style/datatable/dataTables.tableTools.min.js"></script>
    <script src="__ADMIN__/style/datatable/dataTables.bootstrap.min.js"></script>
    <script src="__ADMIN__/style/datatable/datatables-init.js"></script>
     <!--Bootstrap Date Range Picker-->
	<link href="__ADMIN__/style/datetime/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
    <script src="__ADMIN__/style/datetime/moment.js"></script>
    <script src="__ADMIN__/style/datetime/daterangepicker.js"></script>
    <script>

	 InitiateSearchableDataTable.init();




    </script>
	<script type="text/javascript">
	       
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
		    	console.log(check_val);
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

	        $("#check").click(function(){

		        if($("#check").prop("checked"))
		        {
		            $(".check").prop("checked","true");
		        }else
		        {
		            $(".check").removeAttr("checked");
		        }
		    })

		    function test_input(v){
			$("#search_cate").val(v.value);
			$("#search_cate").keyup();
			}

	        function time_input(v){

				$("#search_time").val(v.value);
				$("#search_time").keyup();
				}
			//按是否上架排序
	        $("#state_sort").click(function(){
		    	$("#state_s").trigger("click");
		    })
		    
		    $("#cate_sort").click(function(){
		    	$("#cate_s").trigger("click");
		    })

	</script>
	 <script type="text/javascript">
		   $('#publish_time').daterangepicker({
				format:"YYYY-MM-DD",
				singleDatePicker: true,
				showDropdowns: true,
				startDate: new Date(),
				minDate:'2010-01-01',
				maxDate:'2030-01-01',
			},
			function(){$("#publish_time").trigger("onchange");}
		   );
	</script>


</body></html>