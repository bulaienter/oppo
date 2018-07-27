<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:101:"C:\phpStudy\PHPTutorial\WWW\price_adjust\public/../application/index\view\prodetail\adjustdetail.html";i:1531478825;}*/ ?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="__INDEX__/resources/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="__INDEX__/assets/css/main.css">
	<title>详情</title>
</head>
<body>
	<div class="pro-msg-detail container" id="pro-msg-detail">
		<div class="row">
			<h3 class="col-xs-10"><?php echo $mobiletype['m_mobile']; ?></h3>
		</div>
		<ul class="msg-list container row container">
			<li class="row">
				<div class="title col-xs-4">
					提交人
				</div>
				<div class="con text-right col-xs-8">
					<?php echo $pname; ?>
				</div>
			</li>
			<li class="row">
				<div class="title col-xs-4">
					提交时间
				</div>
				<div class="con text-right col-xs-8">
					<?php echo date("m月d日",$adjust['time']); ?>
				</div>
			</li>
			<li class="row">
				<div class="title col-xs-4">
					imei
				</div>
				<div class="con text-right col-xs-8">
					<?php echo $adjust['imei']; ?>
				</div>
			</li>
			<li class="row">
				<div class="title col-xs-4">
					状态
				</div>
				<div class="con col-xs-8 text-right">
				<?php if(($adjust['state'] == 1)): ?> 
					<span class="glyphicon glyphicon-time msg-wait"></span>待审核
						<?php elseif(($adjust['state'] == 2)): ?> 
					<span class="glyphicon glyphicon-ok msg-success"></span>成功	
						<?php elseif(($adjust['state'] == 3)): ?>
					<span class="glyphicon glyphicon-remove msg-failed"></span>失败		
						<?php endif; ?>	
					
				</div>
			</li>
			<li class="row">
				<div class="title col-xs-12">
					照片
				</div>
				<div class="con msg-img col-xs-8 col-xs-push-2">
					<img src="<?php echo $adjust['imgurl']; ?>" alt="">
				</div>
			</li>
			<li class="row">
				<div class="title col-xs-12">
					备注
				</div>
				<div class="con msg-art col-xs-10 col-xs-push-1 text-justify">
					<?php echo $adjust['desc']; ?>
				</div>
			</li>
		</ul>
	</div>
</body>
</html>