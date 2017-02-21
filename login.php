<?php 
	header('Content-Type:text/html; charset=utf-8');
	$user = array (
			'admin'=>123456,
			'test'=>654321,
		);

	$name = $_POST['name'];
	$pass = $_POST['pass'];

	if(array_key_exists($name, $user) && $user[$name]==$pass){
		echo "登录成功";
		header('refresh:3; url=index.php');
	}else{
		echo "账号密码有误";
		header('refresh:3; url=./login.html');
	}










	

?>