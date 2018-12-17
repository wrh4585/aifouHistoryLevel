<?php
	header("Content-type:text/html;charset=utf-8");
	//接收
	$username = $_GET['username'];
	$userpass = $_GET['userpass'];
	//处理
	$conn = mysql_connect("localhost","root","root");
	if(!$conn){
		die("连接失败".mysql_error());
	}else{
		mysql_select_db("mydbstudy",$conn);
		//执行sql语句
		$sqlstr = "insert into fviewmessage(username,userpass) values('$username','$userpass')";
		$result = mysql_query($sqlstr,$conn);
		//关闭数据库
		mysql_close($conn);
		if($result == 1){
			echo "1";
		}else{
			echo "0";
		}
	}
?>