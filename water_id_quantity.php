<?php
header("Content-Type: text/html; charset=UTF-8");
$host="localhost";
$user="root";
$pwd="";
$conn=mysqli_connect($host,$user,$pwd);
if(!$conn)
	die("数据库连接失败！");
mysqli_select_db($conn,'farm_system');

$sql="SELECT * FROM `water`";
$result=mysqli_query($conn,$sql);

////////////////////////////////////////////////准备数据进行装填
$data = array();
////////////////////////////////////////////////实体类
class User{
    public $water_id;
    public $water_quantity;
}
////////////////////////////////////////////////处理
while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    $user = new User();
    $user->water_id = $row['water_id'];
    $user->water_quantity = $row['water_quantity'];
    $data[] = $user;
}

// 返回JSON类型的数据
echo json_encode($data);
?>