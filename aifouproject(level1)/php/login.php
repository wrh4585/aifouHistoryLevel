<?php
	header("Content-type:text/html;charset=utf-8");
	//接收
	$userId = $_POST['userId'];
	$userPass = $_POST['userPass'];
	//处理
	$conn = mysql_connect("localhost","root","root");
	if(!$conn){
		die("连接失败".mysql_error());
	}else{
		mysql_select_db("aifoumall",$conn);
		//执行sql语句
		$sqlstr ="select * from userTable where userId='$userId' and userPass='$userPass'";
		$result = mysql_query($sqlstr,$conn);
		//关闭数据库
		mysql_close($conn);
		if(mysql_num_rows($result) == 0){
				echo "0";
			}else{
				echo "1";
			}
	}
?>