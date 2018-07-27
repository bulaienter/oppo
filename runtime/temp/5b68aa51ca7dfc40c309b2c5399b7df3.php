<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:90:"C:\phpStudy\PHPTutorial\WWW\price_adjust\public/../application/index\view\store\index.html";i:1532079783;}*/ ?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="__INDEX__/resources/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="__INDEX__/assets/css/main.css">
	<title>shop</title>
</head>
<body>
<header id="shop-header">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 header-con">
				<div class="tip">
					<h3>调价通知</h3>
					<span><?php echo $notice['desc']; ?></span>
				</div>
			</div>
		</div>
	</div>
</header>
<section id="shop-container">
	<h4 class="text-center">店铺信息</h4>
	<ul class="container">
	   <?php if(is_array($store) || $store instanceof \think\Collection): $i = 0; $__LIST__ = $store;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$store): $mod = ($i % 2 );++$i;?>
			<li class="row shop-item">
				<a href="<?php echo url('mobiletype/index',array('sid'=>$store['id'],'nid'=>$notice['id'])); ?>" class="col-xs-12 container">
					<div class="row">
						<div class="col-xs-5 shop-name">
							<?php echo $store['sname']; ?>
						</div>
						<div class="col-xs-6 center-block shop-address">
							<?php echo $store['sarea']; ?>
						</div>
						<span class="glyphicon glyphicon-menu-right text-right"></span>
					</div>
				</a>
			</li>
		<?php endforeach; endif; else: echo "" ;endif; ?>
	</ul>
</section>
</body>
</html>