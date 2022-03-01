<?php
//数据库链接程序
header("Content-Type: text/html; charset=UTF-8");
$host="127.0.0.1";
$user="root";
$pwd="root";
$conn=mysqli_connect($host,$user,$pwd);
if(!$conn)
	die("数据库连接失败！");
mysqli_select_db($conn,'farm_system');

//判断时候登陆