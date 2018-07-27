<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:92:"C:\phpStudy\PHPTutorial\WWW\price_adjust\public/../application/index\view\prodetail\lst.html";i:1532339859;}*/ ?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="__INDEX__/resources/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="__INDEX__/assets/css/main.css">
	<title>pro-msg</title>
</head>
<body>
	<div id="pro-msg">
		<h4 class="text-center">信息列表</h4>
		<ul class="container">
			<?php if(is_array($adjust) || $adjust instanceof \think\Collection): $i = 0; $__LIST__ = $adjust;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$adjust): $mod = ($i % 2 );++$i;?>
				<li class="row">
					<a href="<?php echo url('adjustdetail',array('aid'=>$adjust['id'])); ?>">
						<div class="col-xs-4 num"><?php echo $adjust['imei']; ?></div>
					</a>	
						<?php if(($adjust['state'] == 1)): ?> 
							<div class="col-xs-4"><span class="glyphicon glyphicon-time msg-wait"></span> 审核中</div>
							<div class="col-xs-2"><button type="button" class="btn msg-btn btn-success" data-toggle="modal"
				        	data-target="#myModal1" onclick="edit_info($(this))" data_id="<?php echo $adjust['id']; ?>">编辑</button></div>
							<div class="col-xs-2"><button type="button" class="btn msg-btn btn-danger" data_id="<?php echo $adjust['id']; ?>"
							  onclick="del($(this))">删除</button></div>
						<?php elseif(($adjust['state'] == 2)): ?> 
							<div class="col-xs-4"><span class="glyphicon glyphicon-ok msg-success"></span>成功</div>
							<!-- <div class="col-xs-2"><button type="button" class="btn msg-btn btn-success">编辑</button></div>
							<div class="col-xs-2"><button type="button" class="btn msg-btn btn-danger">删除</button></div> -->
						<?php elseif(($adjust['state'] == 3)): ?>
							<div class="col-xs-4"><span class="glyphicon glyphicon-remove msg-failed"></span>失败</div>
							<!-- <div class="col-xs-2"><button type="button" class="btn msg-btn btn-success">编辑</button></div>
							<div class="col-xs-2"><button type="button" class="btn msg-btn btn-danger">删除</button></div> -->
						<?php endif; ?>								
				</li>
			<?php endforeach; endif; else: echo "" ;endif; ?>
			<!-- <li class="row">
				<div class="col-xs-4 num">12454878792</div>
				<div class="col-xs-4"><span class="glyphicon glyphicon-remove msg-failed"></span>失败</div>
				<div class="col-xs-2"><button type="button" class="btn msg-btn btn-success">编辑</button></div>
				<div class="col-xs-2"><button type="button" class="btn msg-btn btn-danger">删除</button></div>
			</li>
			<li class="row">
				<div class="col-xs-4 num">12454878792</div>
				<div class="col-xs-4"><span class="glyphicon glyphicon-ok msg-success"></span>成功</div>
				<div class="col-xs-2"><button type="button" class="btn msg-btn btn-success">编辑</button></div>
				<div class="col-xs-2"><button type="button" class="btn msg-btn btn-danger">删除</button></div>
			</li> -->
		</ul>
		<div class="add container">
			<div class="row text-center">
				<button type="button" class="btn btn-success btn-lg add-btn col-xs-12" data-toggle="modal"
				        data-target="#myModal">
					添加手机
				</button>
				<button type="button" id="test_point">
					测试
				</button>
			</div>
		</div>
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel"><?php echo $mobiletype['m_mobile']; ?></h4>
					</div>
					<div class="modal-body">
						<form>
							<div class="form-group has-feedback">
								<label class="control-label" for="inputSuccess2">IMEI</label>
								<input type="text" name="imei" class="form-control" id="imei" aria-describedby="inputSuccess2Status"
									 data-minlength="7" data-maxlength="16" data-type="imei"  mobile-type="<?php echo $mobiletype['id']; ?>" data-nid="<?php echo $nid; ?>" onblur="blurInputLoginArea($(this))">
								<span class="error text-danger" style="display:none;margin:5px 10px;"></span>
								<input  name="typeid" id="typeid" value=<?php echo $tid; ?> type="hidden">
								<input  name="sid" id="sid" value=<?php echo $sid; ?> type="hidden">
								<input  name="nid" id="nid" value=<?php echo $nid; ?> type="hidden">
								<input  name="imgurl" id="imgurl"  type="hidden">
								<span class="form-control-feedback iconfont">&#xe61a;</span>
							</div>
							 <div class="form-group">
								<div class="title">添加照片</div>
								<label for="file">
									<span class="glyphicon glyphicon-camera lf-icon"></span>
									<div class="file-img">
										<div class="cancel">X</div>
										<img src="" alt="" id="img">
									</div>
								</label>
								<input type="file" class="camera" id="file" accept="image/*" hidden="hidden"
								       capture="camera" onchange="">
							</div> 
							
						</form>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default cancel-primary" data-dismiss="modal">取消</button>
						<button type="button" class="btn btn-primary" id="submit" onclick="add()">提交</button>
					</div>
				</div>
			</div>
		</div>
		<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel"><?php echo $mobiletype['m_mobile']; ?></h4>
					</div>
					<div class="modal-body">
						<form>
							<div class="form-group has-feedback">
								<label class="control-label" for="inputSuccess2">IMEI</label>
								<input type="text" name="imei_edit" class="form-control" id="imei_edit" aria-describedby="inputSuccess2Status"
									data-minlength="7" data-maxlength="16" data-type="imei_edit"  mobile-type="<?php echo $mobiletype['id']; ?>" data-nid="<?php echo $nid; ?>" onblur="blurInputLoginArea($(this))">
								<span class="error text-danger" style="display:none;margin:5px 10px;"></span>
								<input  name="typeid_edit" id="typeid_edit" value=<?php echo $tid; ?> type="hidden">
								<input  name="sid_edit" id="sid_edit" value=<?php echo $sid; ?> type="hidden">
								<input  name="nid_edit" id="nid_edit" value=<?php echo $nid; ?> type="hidden">
								<input  name="id_edit" id="id_edit"  type="hidden">
								<input  name="imgurl_edit" id="imgurl_edit" type="hidden1">
								<span class="form-control-feedback iconfont">&#xe61a;</span>
							</div>
							 <div class="form-group">
								<div class="title">添加照片</div>
								<label for="file">
									<span class="glyphicon glyphicon-camera lf-icon"></span>
									<div class="file-img">
										<div class="cancel">X</div>
										<img src="" alt="" id="img_edit">
									</div>
								</label>
								<input type="file" class="camera" id="file_edit" accept="image/*" hidden="hidden"
								       capture="camera">
							</div> 
							
						</form>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default cancel-edit" data-dismiss="modal">取消</button>
						<button type="button" class="btn btn-primary" id="submit_edit" onclick="edit()">提交</button>
					</div>
				</div>
			</div>
		</div>
		<div class="loading"><div class="icon"><span class="glyphicon glyphicon-repeat"></span></div></div>
	</div>
</body>
<script src="__INDEX__/assets/js/jquery-3.2.1.min.js"></script>
<script src="__ADMIN__/style/validation/forum_check.js"></script>
<script src="__INDEX__/resources/bootstrap/js/bootstrap.min.js"></script>
<script src="__INDEX__/assets/js/uploadPhoto.js"></script>
<script src="__INDEX__/plus/layer/layer.js"></script>

<script>
	var test_url = "__URLSITE__";
	$('#test_point').click(function(){
		var test = getDistance(37.806242,112.538532,112.552622,37.813027);
		alert(test);
    });
	$('.cancel-edit').click(function(){
		$('#img_edit').attr('src','');
		$('#imgurl_edit').attr('val','');		
	});
	$('.cancel-primary').click(function(){
		$('#img').attr('src','');
		$('#imgurl').attr('val','');		
	});
	 /* $('#submit').click(()=>{
	    $('#myModal').modal('hide');
		$('.loading').show();
	    setTimeout(()=>{
			$('.loading').hide();
	    },1000);
	});  */
	uploadPhoto($('#file'), $('.file-img img'),$('#imgurl'));
</script>
<script type="text/javascript">
function getlocaltion(){
	if(navigator.geolocation) {
	    navigator.geolocation.getCurrentPosition(
	        function (position) {  
	            var longitude = position.coords.longitude;  
	            var latitude = position.coords.latitude;  
	            console.log(longitude)
	            console.log(latitude)
	            },
	            function (e) {
	             var msg = e.code;
	             var dd = e.message;
	             console.log(msg)
	             console.log(dd)
	        }
	      ) 
	   }
	else{
		alert("error");
	}
	
}

function getPos(){

	 var coords = {
	 lat:0,
	 lon:0
	 };
	 navigator.geolocation.getCurrentPosition(function(p){
	 coords.lat = p.coords.latitude; //纬度 
	 coords.lon = p.coords.longitude; //经度
	 });
	 console.log("test");
	 console.log(coords);
	 alert(coords);
	 return coords;
	}

	/**
	* @desc 根据两点间的经纬度计算距离 单位：M
	* @param float $lat 纬度值
	* @param float $lng 经度值
	*/
	function getDistance($lat1, $lng1, $lat2, $lng2){
	 
	 $earthRadius = 6367000;
	 $lat1 = ($lat1 * Math.PI ) / 180;
	 $lng1 = ($lng1 * Math.PI ) / 180; 
	 $lat2 = ($lat2 * Math.PI ) / 180;
	 $lng2 = ($lng2 * Math.PI ) / 180; 
	 $calcLongitude = $lng2 - $lng1;
	 $calcLatitude = $lat2 - $lat1;
	 $stepOne = Math.pow(Math.sin($calcLatitude / 2), 2) + Math.cos($lat1) * Math.cos($lat2) * Math.pow(Math.sin($calcLongitude / 2), 2);
	 $stepTwo = 2 * Math.asin(Math.min(1, Math.sqrt($stepOne)));
	 $calculatedDistance = $earthRadius * $stepTwo; 
	 return Math.round($calculatedDistance);
	}
		function photoCompress (file, w, objDiv) {
		    let ready = new FileReader();
		    ready.readAsDataURL(file);
		    ready.onload = function(){
		        let re = this.result;
		        canvasDataURL(re, w, objDiv);
		    }
		}
		function canvasDataURL(path, obj, callback) {
		    let img = new Image();
		    img.src = path;
		    img.onload = function(){
		        let that = this;
		        let w = that.width,
			        h = that.height,
			        scale = w / h;
		        w = obj.width || w;
		        h = obj.height || (w / scale);
		        let quality = .7;
		        let canvas = document.createElement('canvas');
		        let ctx = canvas.getContext('2d');
		        let anw = document.createAttribute("width");
		        anw.nodeValue = w;
		        let anh = document.createAttribute("height");
		        anh.nodeValue = h;
		        canvas.setAttributeNode(anw);
		        canvas.setAttributeNode(anh);
		        ctx.drawImage(that, 0, 0, w, h);
		        if (obj.quality && obj.quality <= 1 && obj.quality > 0){
		            quality = obj.quality;
		        }
		        let base64 = canvas.toDataURL('image/jpeg', quality);
		        // 回调函数返回base64的值
			    callback(base64);
		    }
		}
		function check_error_add(){
			blurInputLoginArea($("#imei"));
			  var i = 0;
		      $(".error").each(function() {
		          if ($(this).css("display") == 'inline') {
		              i++;
		          }
		      })
		      //alert(i);
		      if(i==0){ return true;}
		      else{return false;} 
			 return true;
		  }
		function check_error_edit(){
			blurInputLoginArea($("#imei_edit"));
			  var i = 0;
		      $(".error").each(function() {
		          if ($(this).css("display") == 'inline') {
		              i++;
		          }
		      })
		      //alert(i);
		      if(i==0){ return true;}
		      else{return false;} 
			 return true;
		  }
</script>
 <script language="javascript"> 
 function add(){
	 var obj_imei = $(" input[ name='imei' ] ").val();	
	 var obj_typeid = $(" input[ name='typeid' ] ").val();		
	 var obj_sid = $(" input[ name='sid' ] ").val();
	 var obj_nid = $(" input[ name='nid' ] ").val();
	 var obj_imgurl = $(" input[ name='imgurl' ] ").val();
 	 //console.log(obj_imei);
 	 //首先确认通过
 	 //alert(check_error());
	 	 if(check_error_add()){
	 		
		 	 $.ajax({
		       	type : "POST",
		 			url:"<?php echo url('Prodetail/add'); ?>",
		 			data: {obj_imei:obj_imei,obj_typeid:obj_typeid,obj_sid:obj_sid,obj_nid:obj_nid,obj_imgurl:obj_imgurl},
		 			success: function(a){
		 	    				if (a == 1){
		 	    					layer.msg('添加成功！',{icon: 1});
		 	    					setTimeout("location.reload()",2000);}
		
		 	    				else{layer.msg('添加失败！',{icon: 2});}
		 				}
		 		});
	 	 	}
	}
 function edit(){
	 var obj_id = $(" input[ name='id_edit' ] ").val();	
	 var obj_imei = $(" input[ name='imei_edit' ] ").val();	
	 var obj_typeid = $(" input[ name='typeid_edit' ] ").val();		
	 var obj_sid = $(" input[ name='sid_edit' ] ").val();
	 var obj_nid = $(" input[ name='nid_edit' ] ").val();
	 var obj_imgurl = $(" input[ name='imgurl_edit' ] ").val();
 	 //console.log(obj_imei);
	 	 if(check_error_edit()){
		 	 $.ajax({
		       	type : "POST",
		 			url:"<?php echo url('Prodetail/edit'); ?>",
		 			data: {obj_imei:obj_imei,obj_typeid:obj_typeid,obj_sid:obj_sid,obj_nid:obj_nid,obj_id:obj_id,obj_imgurl:obj_imgurl},
		 			success: function(a){
		 	    				if (a == 1){
		 	    					layer.msg('修改成功！',{icon: 1});
		 	    					setTimeout("location.reload()",2000);}
		
		 	    				else{layer.msg('修改失败！',{icon: 2});}
		 				}
		 		});
	 	 }
	}
	function del(obj){
    	var obj_id = obj.attr("data_id");   	
    	console.log(obj_id);
    	layer.confirm('确定删除?', {icon: 2, title:'温馨提示'}, function(index){
            	layer.close(index);
    	 $.ajax({
         	type : "POST",
 			url:"<?php echo url('Prodetail/del'); ?>",
 			data: {id:obj_id},
 			success: function(v){
	    				if (v == 1){
	    					layer.msg('删除成功！',{icon: 1});
	    					setTimeout("location.reload()",1000);}

	    				else{layer.msg('删除失败！',{icon: 2});}
				}
 		});
      });
	}
	function edit_info(obj){
    	var obj_id = obj.attr("data_id");   	
    	//console.log(obj_id);
    	 $.ajax({
          	type : "POST",
  			url:"<?php echo url('Prodetail/edit_info'); ?>",
  			data: {id:obj_id},
  			success: function(v){ 				 	
  				var obj=eval('('+v+')');
  				//console.log(obj.id);
  				$('#imei_edit').val(obj.imei);
  				$('#imei_edit').attr('data-id',obj.id);
  				$('#id_edit').val(obj.id);
  				$('#imgurl_edit').val(obj.imgurl)  ;
  				
  				$('#img_edit').attr('src',obj.imgurl); 				
  				$('#img_edit').parent().show();
                //console.log(e.target.result);
                uploadPhoto($('#file_edit'),$('.file-img-edit img'),$('#imgurl_edit'));
 				}
  		});
	}
</script>
</html>