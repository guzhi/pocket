<?php
        // function isMobile() {
            // 如果有HTTP_X_WAP_PROFILE则一定是移动设备
            // if (isset ($_SERVER['HTTP_X_WAP_PROFILE'])) {
              // return true;
            // }
           // 如果via信息含有wap则一定是移动设备,部分服务商会屏蔽该信息
            // if (isset ($_SERVER['HTTP_VIA'])) {
              // 找不到为flase,否则为true
              // return stristr($_SERVER['HTTP_VIA'], "wap") ? true : false;
            // }
            // 脑残法，判断手机发送的客户端标志,兼容性有待提高
            // if (isset ($_SERVER['HTTP_USER_AGENT'])) {
              // $clientkeywords = array (
               // 'nokia',
               // 'sony',
               // 'ericsson',
               // 'mot',
               // 'samsung',
               // 'htc',
               // 'sgh',
               // 'lg',
               // 'sharp',
               // 'sie-',
               // 'philips',
               // 'panasonic',
               // 'alcatel',
               // 'lenovo',
               // 'iphone',
               // 'ipod',
               // 'blackberry',
               // 'meizu',
               // 'android',
               // 'netfront',
               // 'symbian',
               // 'ucweb',
               // 'windowsce',
               // 'palm',
               // 'operamini',
               // 'operamobi',
               // 'openwave',
               // 'nexusone',
               // 'cldc',
               // 'midp',
               // 'wap',
               // 'mobile'
              // );
              // 从HTTP_USER_AGENT中查找手机浏览器的关键字
              // if (preg_match("/(" . implode('|', $clientkeywords) . ")/i", strtolower($_SERVER['HTTP_USER_AGENT']))) {
               // return true;
              // }
            // }
            // 协议法，因为有可能不准确，放到最后判断
            // if (isset ($_SERVER['HTTP_ACCEPT'])) {
              //如果只支持wml并且不支持html那一定是移动设备
              //如果支持wml和html但是wml在html之前则是移动设备
              // if ((strpos($_SERVER['HTTP_ACCEPT'], 'vnd.wap.wml') !== false) && (strpos($_SERVER['HTTP_ACCEPT'], 'text/html') === false || (strpos($_SERVER['HTTP_ACCEPT'], 'vnd.wap.wml') < strpos($_SERVER['HTTP_ACCEPT'], 'text/html')))) {
               // return true;
              // }
            // }
            // return false;
        // }
        // if(!isMobile()) {
            // header("Content-type: text/html; charset=utf-8");
            // $this->renderPartial('abort');
            // exit();
        // }    
       // echo $_SERVER['HTTP_USER_AGENT'];
	
	
	$id = $this->action->id;
;?>
<!--
    <n:link>
        {
            "baseUrl":"{baseUrl}/css/",
            "layout":["main"],
            "action":{
                "take_out_p":["take_out_p"],
		"robot":["robot"],
		"about":["about"],
		"timetable_p":["timetable"],
		"sel1":["sel"],
		"sel2":["sel"],
		"bus":["bus"],
		"take_out":["take_out"],
		"organizations":["organizations"],
		"organizations_p":["organizations"],
		"jobs":["jobs"],
		"jobs_p":["jobs_p"],
		"activities":["jobs"],
		"activities_p":["jobs_p"],
		"apply" : [ "apply"],
                "take_out_p":["take_out_p"],
                "take_out_p":["take_out_p"],
                "index":["index"],
                "bus_p":["bus_p"]
            }
        }
    </n:link>
    
-->

<!DOCTYPE html>
<html>
<head>
	<meta charset = "utf-8" >
	<meta name = "viewport" content = "width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0" >
	
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
	
	<script src = "<?php echo yii::app()->request->baseUrl;?>/js/lib.js" ></script>
</head>

<body>

<div class="container" id="page">
	<?php echo $content; ?>
</div><!-- page -->

</body>

</html>
