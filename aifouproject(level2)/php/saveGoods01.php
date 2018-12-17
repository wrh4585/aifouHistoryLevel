<?php
	header("Content-Type:text/html;charset=utf-8");
	//1、接受客户端的数据（用户输入的数据）
	$goodsId   = $_POST['goodsId'];
	$goodsName = $_POST['goodsName'];
	$goodsType = $_POST['goodsType'];
	$goodsPrice = $_POST['goodsPrice'];
	$goodsCount = $_POST['goodsCount'];
	$goodsDesc = $_POST['goodsDesc'];
	$goodsImg  = $_POST['goodsImg'];
	$beiyong1  = $_POST['beiyong1'];
	$beiyong2  = $_POST['beiyong2'];
	$beiyong3  = $_POST['beiyong3'];
	$beiyong4  = $_POST['beiyong4'];
	$beiyong5  = $_POST['beiyong5'];
	$beiyong6  = $_POST['beiyong6'];
	$beiyong7  = $_POST['beiyong7'];
	$beiyong8  = $_POST['beiyong8'];
	$beiyong9  = $_POST['beiyong9'];
	$beiyong10 = $_POST['beiyong10'];
	$beiyong11 = $_POST['beiyong11'];
	$beiyong12 = $_POST['beiyong12'];
	$beiyong13 = $_POST['beiyong13'];
	
	//2、数据保存在数据库中
	//1）、建立连接（搭桥）
	$conn = mysql_connect("localhost","root","root");
	if(!$conn){
		die("数据库连接失败：".mysql_error());
	}else{
		mysql_select_db("aifoumall",$conn);
		$sqlstr = "insert into goodsInfo values('".$goodsId."','".$goodsName."','".$goodsType."'
		,'".$goodsPrice."','".$goodsCount."','".$goodsDesc."','".$goodsImg."'
		,'".$beiyong1."','".$beiyong2."','".$beiyong3."','".$beiyong4."'
		,'".$beiyong5."','".$beiyong6."','".$beiyong7."','".$beiyong8."'
		,'".$beiyong9."','".$beiyong10."','".$beiyong11."','".$beiyong12."','".$beiyong13."')";
	

		$count = mysql_query($sqlstr,$conn);
		if(!$count){
			die('插入失败！'.mysql_error());
		}
		//4）、关闭连接（拆桥）
		mysql_close($conn);
	
		//3、给客户端返回（响应）一个注册成功！
		if($count>0){
		    echo "保存成功";
		}
	}
	
	//2）、选择数据库（找目的地）
	/*if(!mysql_select_db("aifoumall",$conn)){
		die("数据库选择失败".mysql_error());
	};*/
	
	//3）、传输数据（过桥）
	
?>