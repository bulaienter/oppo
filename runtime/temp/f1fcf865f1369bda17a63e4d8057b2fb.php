<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:91:"C:\phpStudy\PHPTutorial\WWW\price_adjust\public/../application/index\view\notice\index.html";i:1531465249;}*/ ?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="__INDEX__/resources/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="__INDEX__/assets/css/main.css">
	<title>通知列表</title>
</head>
<body>
	<div class="tip-list">
		<div class="sel container">
			<div class="row">
				<div class="col-xs-10 col-xs-push-1 sel-row">
					<div class="sel-title">筛选</div>
					<div class="items">
						<button class="btn btn-success">未过期</button>
						<button class="btn btn-info">已过期</button>
						<button class="btn btn-danger">已更新</button>
					</div>
				</div>
			</div>

		</div>
		<div class="con">
			<ul class="container">
			  <?php if(is_array($notice) || $notice instanceof \think\Collection): $i = 0; $__LIST__ = $notice;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ntc): $mod = ($i % 2 );++$i;?>
				<li class="row tip">
					<a href="<?php echo url('store/index',array('nid'=>$ntc['id'])); ?>" style="text-decoration:none;" 
					 <?php if(($ntc['e_time'] > $new_time)): ?> class="col-xs-10 col-xs-push-1 container new" <?php else: ?> class="col-xs-10 col-xs-push-1 container old"<?php endif; ?>>
						<h3 class="text-center">通知</h3>
						<div class="time text-left">时间：<?php echo date("Y m-d",$ntc['s_time']); ?> - <?php echo date("Y m-d",$ntc['e_time']); ?></div>
						<article class="text-justify tip-art">
							<?php echo $ntc['desc']; ?>
							<!-- 机型价格调整，请您在<?php echo date("m月d日",$ntc['e_time']); ?>以前完成操作。 -->
						</article>
					</a>
				</li>
			  <?php endforeach; endif; else: echo "" ;endif; ?>
			</ul>
		</div>
	</div>
</body>
</html>