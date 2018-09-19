<?php

	include './aes.php';

	//使用方法
	$aes = new AESMcrypt($bit = 128, $key = 'abcdef1234567890', $iv = '0987654321fedcba', $mode = 'cbc');
	$c = $aes -> encrypt('test abc');
	echo $aes->decrypt($c);
	// echo $c;

?>