<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:89:"C:\phpStudy\PHPTutorial\WWW\price_adjust\public/../application/admin\view\login\index.htm";i:1531109324;}*/ ?>
<!DOCTYPE html>
<html lang="zh-cn">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>后台管理框架</title>
 

   
    <link rel="stylesheet" type="text/css" href="__ADMIN__/login/css/zui.css" media="all">
	<link rel="stylesheet" type="text/css" href="__ADMIN__/login/css/login.css" media="all">
    <link href="__ADMIN__/login/css/animate.min.css" rel="stylesheet">
	<link href="__ADMIN__/login/css/font-awesome.min.css" rel="stylesheet">

    <link href="__ADMIN__/login/sideshow/css/component.css" rel="stylesheet" />

</head>


<body class="kit-login-bg">
    <div class=" demo-4">
        <div class="content">
            <div id="large-header" class="large-header">
                <canvas id="demo-canvas"></canvas>
                
                <div class="login-body  animated fadeInLeft">
    <div class="login-main pr">
        <form action="" method="post" class="login-form">
        <h3><?php echo $confres['cp_name']; ?></h3>
        <h5 style="padding-bottom: 10px">后台管理系统</h5>
        		    <!-- 账号登陆 -->
        <div id="MobileBox" class="item-box"  >
            <div class="input-group user-name"> <span class="input-group-addon"><i class="icon-user"></i></span>
            <input  class="form-control" placeholder="用户名" name="name" type="text">
         </div>
         <div class="input-group password"> <span class="input-group-addon"><i class="icon-lock"></i></span>
            <input class="form-control" placeholder="密码" name="password" type="password">
         </div>

         <div class="input-group code"><span class="input-group-addon"><i class="icon-file"></i></span>
         	 <input class="form-control" style="width:100px;font-family:'微软雅黑';float:left;" name="code" type="text" placeholder="验证码">
             <img src="<?php echo captcha_src(); ?>" onclick="this.src='<?php echo captcha_src(); ?>?'+Math.random();" width="120" height="40" style="float:left; cursor:pointer;margin-left:20px;" alt="captcha" />
         </div>

		<div class="use-qrcode-a"><a class="use-ding" href=""><img src="__ADMIN__/login/images/ding.png" width="17" height="17" style="margin-top:-2px"> 忘记密码</a> </div>

          <div class="login_btn_panel">
            <button class=" btn btn-primary btn-block btn-lg" value="Login" type="submit">登录</button>
            <div class="check-tips"></div>
          </div>
      </form>
     </div>
  </div>
            </div>
        </div>
    </div>
    <!-- /container -->
        <script src="__ADMIN__/style/jquery_002.js"></script>

    <script src="__ADMIN__/login/sideshow/js/TweenLite.min.js"></script>
    <script src="__ADMIN__/login/sideshow/js/EasePack.min.js"></script>

    <script src="__ADMIN__/login/sideshow/js/demo-1.js"></script>


 
 
</body>

</html>