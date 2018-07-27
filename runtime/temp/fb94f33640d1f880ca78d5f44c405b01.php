<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:95:"C:\phpStudy\PHPTutorial\WWW\price_adjust\public/../application/index\view\mobiletype\index.html";i:1531480069;}*/ ?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="__INDEX__/resources/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="__INDEX__/assets/css/main.css">
	<title>shop-msg</title>
</head>
<body>
<header id="shop-header">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 header-con">
				<div class="tip">
					<h3>通知</h3>
					<span><?php echo $notice['desc']; ?></span>
				</div>
			</div>
		</div>
	</div>
</header>
<section id="pro-msg">
	<h4 class="text-center"><?php echo $store['sname']; ?></h4>
	<ul class="container">
	  <?php if(is_array($state) || $state instanceof \think\Collection): $i = 0; $__LIST__ = $state;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$state): $mod = ($i % 2 );++$i;?>
		<li class="row">
			<a href="<?php echo url('prodetail/lst',array('tid'=>$state['id'],'sid'=>$store['id'],'nid'=>$notice['id'])); ?>" style="text-decoration:none;">
				<h5 class="name"><?php echo $state['name']; ?></h5>
				<div class="list container text-center">
					<div class="row">
						<div class="col-xs-3 total">
							<div class="title">总数</div>
							<div class="msg"><?php echo $state['totle_num']; ?></div>
						</div>
						<div class="col-xs-3 success">
							<div class="title">成功</div>
							<div class="msg"><?php echo $state['success_num']; ?></div>
						</div>
						<div class="col-xs-3 waiting">
							<div class="title">审核中</div>
							<div class="msg"><?php echo $state['wait_num']; ?></div>
						</div>
						<div class="col-xs-3 failed">
							<div class="title">失败</div>
							<div class="msg"><?php echo $state['fail_num']; ?></div>
						</div>
					</div>
				</div>
				<div class="hint text-center">查看详情</div>
			</a>
		</li>
	  <?php endforeach; endif; else: echo "" ;endif; ?>
	</ul>
</section>
</body>
</html>