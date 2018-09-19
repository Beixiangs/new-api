<?php
	
	include './vendor/autoload.php';

	// 请求的api地址
	$url = 'http://localhost//api/api/server/server.php';

	$curl = new Curl\Curl();
	$curl->post($url, array(
	    'username'=>'huang',
	    'password'=>'123456'
	));

	if($curl->error){
		echo $curl->error_code;
	}else{
		echo $curl->response;
	}

	// 客户端 发起api请求
