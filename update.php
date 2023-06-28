<?php
//Khai bao cac bien
$server="localhost";
$u = "id20967380_giangpdph27260";
$pass = "Ducgiang_2003";
$db = "id20967380_mob403";
// tạo kết nối với CSDL
$con = new mysqli($server,$u, $pass, $db);
//kiem tra ket noi, neu co loi thi thong bao
if($con->connect_err){
die("Loi ket noi: ".$con->connect_err);
}
//chuoi insert
$sql="update Student SET ten='update giangdeptrai' WHERE id=2";
//thuc hien insert
if($con->query($sql)===TRUE){
echo "Update thanh cong";
}
else{
echo "Loi: ".$con->error;
}
?>