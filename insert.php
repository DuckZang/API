<?php
// khai báo các biến bằng $
$server="localhost";
$u = "id20967380_giangpdph27260";
$pass = "Ducgiang_2003";
$db = "id20967380_mob403";
// tạo kết nối với CSDL
$con = new mysqli($server,$u, $pass, $db);
// kiểm tra kết nối 
// if ($con-> connect_err){
//     die("Error connecting ".$con->connect_err);
// }
// chuỗi insert
$sql = "insert into Student (id,ten,masv,lop)
values('1', 'Giang','ph27260','cp17319')";  
// thực hiện insert//
if($con->query($sql) === TRUE) {
    echo "Insert thanh cong";
}else{
    echo "Da xay ra loi".$con->error;
}
 ?>