<?php
header('Access-Control-Allow-Origin: *');
//Khai bao cac bien
$server="localhost";
$u = "id20967380_giangpdph27260";
$pass = "Ducgiang_2003";
$db = "id20967380_mob403";
// tạo kết nối với CSDL
$con = new mysqli($server,$u, $pass, $db);
//chuoi insert
$sql="SELECT * from Student";
//thuc hien insert
$result=$con->query($sql);
while($row[]=$result->fetch_assoc()){//doc tung dong du lieu
$json=json_encode($row);//chuyen sang json
}
echo '{"MyGuests":'.$json.'}';
$con->close();
?>