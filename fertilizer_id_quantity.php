<?php
header("Content-Type: text/html; charset=UTF-8");
$host="localhost";
$user="root";
$pwd="";
$conn=mysqli_connect($host,$user,$pwd);
if(!$conn)
	die("数据库连接失败！");
mysqli_select_db($conn,'farm_system');

$sql="SELECT * FROM `fertilizer`";
$result=mysqli_query($conn,$sql);

////////////////////////////////////////////////准备数据进行装填
$data = array();
////////////////////////////////////////////////实体类
class User{
    public $fertilizer_id;
    public $fertilizer_yield;
}
////////////////////////////////////////////////处理
while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    $user = new User();
    $user->fertilizer_id = $row['fertilizer_id'];
    $user->fertilizer_yield = $row['fertilizer_yield'];
    $data[] = $user;
}

// 返回JSON类型的数据
echo json_encode($data);
?>