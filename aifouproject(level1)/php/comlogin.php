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
		$sqlstr ="select * from fviewmessage where username='$username' and userpass='$userpass'";
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