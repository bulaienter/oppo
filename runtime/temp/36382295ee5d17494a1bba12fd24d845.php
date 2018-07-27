<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:90:"C:\phpStudy\PHPTutorial\WWW\price_adjust\public/../application/index\view\index\index.html";i:1532074880;}*/ ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>H5地理位置Demo</title>
          <script src="http://api.map.baidu.com/api?v=1.3" type="text/javascript">
          </script>
<script src="__INDEX__/assets/js/jquery-3.2.1.min.js"></script>
  
</head>
<body>
    <div  id="aaa" style="border:#ccc solid 1px" width:"697px" height:"500px"></div>
<p id="demo">点击这个按钮，获得您的位置：</p>
<button onclick="getLocation()">试一下</button>
<div id="mapholder"></div>
<script type="text/javascript">

    /* if(navigator.geolocation)
    {
        navigator.geolocation.getCurrentPosition(function (p) {
            var latitude = p.coords.latitude//纬度
            var longitude = p.coords.longitude;
			
            //createmap(latitude, longitude);          
	        }, function (e) 
        );
    } */
var x=document.getElementById("demo");
var getOptions = {  
        //是否使用高精度设备，如GPS。默认是true  
        enableHighAccuracy:true,  
        //超时时间，单位毫秒，默认为0  
        timeout:5000,  
        //使用设置时间内的缓存数据，单位毫秒  
        //默认为0，即始终请求新数据  
        //如设为Infinity，则始终使用缓存数据  
        maximumAge:0  
   };  
 
   //成功回调  
   function getSuccess(position){  
        // getCurrentPosition执行成功后，会把getSuccess传一个position对象  
        // position有两个属性，coords和timeStamp  
        // timeStamp表示地理数据创建的时间？？？？？？  
        // coords是一个对象，包含了地理位置数据  
        console.log(position.timeStamp);     
 
        // 估算的纬度  
        console.log(position.coords.latitude);      
        // 估算的经度  
        console.log(position.coords.longitude);      
        // 估算的高度 (以米为单位的海拔值)  
        console.log(position.coords.altitude);      
        // 所得经度和纬度的估算精度，以米为单位  
        console.log(position.coords.accuracy);      
        // 所得高度的估算精度，以米为单位  
        console.log(position.coords.altitudeAccuracy);      
        // 宿主设备的当前移动方向，以度为单位，相对于正北方向顺时针方向计算  
        console.log(position.coords.heading);  
        // 设备的当前对地速度，以米/秒为单位      
        console.log(position.coords.speed);      
        // 除上述结果外，Firefox还提供了另外一个属性address  
        if(position.address){  
             //通过address，可以获得国家、省份、城市  
             console.log(position.address.country);  
             console.log(position.address.province);  
             console.log(position.address.city);  
        }  
   }  
   //失败回调  
   function getError(error){  
        // 执行失败的回调函数，会接受一个error对象作为参数  
        // error拥有一个code属性和三个常量属性TIMEOUT、PERMISSION_DENIED、POSITION_UNAVAILABLE  
        // 执行失败时，code属性会指向三个常量中的一个，从而指明错误原因  
        switch(error.code){  
             case error.TIMEOUT:  
                  console.log('超时');  
                  break;  
             case error.PERMISSION_DENIED:  
                  console.log('用户拒绝提供地理位置');  
                  break;  
             case error.POSITION_UNAVAILABLE:  
                  console.log('地理位置不可用');  
                  break;  
             default:  
                  break;  
        }  
   }  
function getLocation()
{

	if (navigator.geolocation)
	  {
		navigator.geolocation.getCurrentPosition(getSuccess, getError, getOptions); 
	  }
	else{x.innerHTML="Geolocation is not supported by this browser.";}
}


function showPosition(position)
	{	
		var coords = {
				 lat:0,
				 lon:0
		};
		 coords.lat = position.coords.latitude; //纬度 
		 coords.lon = position.coords.longitude; //经度
		 alert(coords.lat);
		 return coords;

	}

/**
 *@desc HTML5+获取当前的经纬度
 **/
function getPos(){
 var coords = {
 lat:0,
 lon:0
 };
 plus.geolocation.getCurrentPosition(function(p){
 coords.lat = p.coords.latitude; //纬度 
 coords.lon = p.coords.longitude; //经度
 });
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

    
</script>
</body>
</html>