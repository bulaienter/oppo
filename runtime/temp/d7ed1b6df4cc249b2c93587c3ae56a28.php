<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:93:"C:\phpStudy\PHPTutorial\WWW\price_adjust\public/../application/admin\view\article\article.htm";i:1531300796;s:88:"C:\phpStudy\PHPTutorial\WWW\price_adjust\public/../application/admin\view\public\top.htm";i:1531707249;s:89:"C:\phpStudy\PHPTutorial\WWW\price_adjust\public/../application/admin\view\public\left.htm";i:1531214619;}*/ ?>
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
                        <a href="#">系统</a>
                    </li>
                                        <li>
                        <a href="<?php echo url('lst'); ?>">审核列表</a>
                    </li>
                    <li class="active">表单审核</li>
                    </ul>
                </div>
                <!-- /Page Breadcrumb -->

                <!-- Page Body -->
                <div class="page-body">
							<div class="row">
                                <div class="col-lg-6 col-sm-6 col-xs-12">
                                    <div class="well with-header">
                                        <div class="header bordered-pink">表单详情</div>
                                        <div class="buttons-preview">
                                            <div>基本信息</div>
                                            	<div style="margin:20px 50px;" >
                                            	<input type="text"   id="o_id"  value="<?php echo $article['id']; ?>" style="display:none;" >
												<p>串码：<?php echo $article['imei']; ?></p>
												<p>机型：A15</p>
												<p>业务员：张三</p>
												<p>店铺：<?php echo $store['sname']; ?></p>												
												<p>照片</p>
												  <div data-am-widget="duoshuo" class="am-duoshuo am-duoshuo-default" data-ds-short-name="amazeui">
												    <div class="ds-thread">
												    	<a target='_blank' href='__IMGURL__<?php echo $article['imgurl']; ?>' id='original_img2'>
					                                        <img width='125'  height='125' src='__IMGURL__<?php echo $article['imgurl']; ?>'>
					                                    </a>
												    </div>
												  </div>											
                                            <hr class="wide">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6 col-xs-12">
                                    <div class="well with-header">
                                        <div class="header bordered-blue">审核结果</div>
                                        <div class="buttons-preview">
                                        <div>修改状态</div>
	                                        <div style="margin:20px 50px;" >
											    <!-- <select name="state" id="state">
	                                            	<option>请选择</option>
				                                    <option <?php if($article['state'] == 1): ?>selected="selected"<?php endif; ?> value="1">待审核</option>
	                                            	<option <?php if($article['state'] == 2): ?>selected="selected"<?php endif; ?> value="2">通过</option>
	                                            	<option <?php if($article['state'] == 3): ?>selected="selected"<?php endif; ?> value="3">未通过</option>
				                                </select> -->
				                                <div class="control-group">
						                            <div class="radio"><label><input <?php if($article['state'] == 1): ?>checked="checked"<?php endif; ?> value="1" class="colored-warning" name="state"  type="radio"><span class="text"> 待审核</span></label></div>
						                            <div class="radio"><label><input <?php if($article['state'] == 2): ?>checked="checked"<?php endif; ?> value="2" class="colored-success" name="state"  type="radio"><span class="text"> 通过</span></label></div>
						                            <div class="radio"><label><input <?php if($article['state'] == 3): ?>checked="checked"<?php endif; ?> value="3" class="colored-danger"  name="state"  type="radio"><span class="text"> 不通过</span></label></div>						                            
						                        </div>
	                                        </div>
									    <div>详细信息</div>
										    <div style="margin:20px 50px;" >
										    <textarea id="desc" name="desc" rows="4" cols="70"><?php echo $article['desc']; ?></textarea>
	                                        </div>
                                        </div>
                                        <div style="margin:20px 50px;" >
	                                        <button class="btn btn-palegreen" id="bootbox-regular" onclick="confirm_adjust()">确定</button>
	                                        <button class="btn btn-darkorange" id="bootbox-confirm">返回</button>
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
   
  <!--Bootstrap Date Range Picker-->
	<link href="__ADMIN__/style/datetime/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
    <script src="__ADMIN__/style/datetime/moment.js"></script>
    <script src="__ADMIN__/style/datetime/daterangepicker.js"></script>
<!--layer-->
    <script src="__ADMIN__/plus/layer/layer.js"></script>
    	  <script type="text/javascript">

    	  	$("#bootbox-confirm").click(function(){
    		  	history.go(-1);
			});
    	  	
			
			function confirm_adjust(){
				//var state_adjust = $('#state').val();
				var state_adjust = $("input[name='state']:checked").val();
				var oid = $('#o_id').val();
				var desc = $('#desc').val();
				//console.log(state_adjust);
				//alert(state_adjust);
				layer.confirm('确定要修改状态吗?', {icon: 3, title:'温馨提示'}, function(index){
                     layer.close(index);
			    	 $.ajax({
		             	type : "POST",
		             	dataType: "json",

		     			url:"<?php echo url('article/state_edit'); ?>",
		     			data: {state:state_adjust,id:oid,desc:desc},
		     			success: function(v){
		     				
						  if(v==1){
							  layer.msg('修改状态成功！',{icon: 1});
		    				  setTimeout('window.location.href = "<?php echo url('article/lst'); ?>"',1000);
						  }
						  else{
							  layer.msg('修改状态失败！',{icon: 2});
						  }
				  }
	     		});
		      });
			}

		  </script>

	</body>
</html>