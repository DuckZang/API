<?php
//Khai bao cac bien
$server="localhost";
$u = "id20967380_giangpdph27260";
$pass = "Ducgiang_2003";
$db = "id20967380_mob403";
// tạo kết nối với CSDL
$con = new mysqli($server,$u, $pass, $db);
//chuoi insert
$sql="SELECT * from Student";
//thuc hien insert/
$result=$con->query($sql);
if($result->num_rows>0)//neu co du lieu
{
while($row=$result->fetch_assoc()){//doc tung dong du lieu
echo "id: ".$row["id"]."- Tên: ".$row["ten"]
."- mã sv: ".$row["masv"]."- Lớp: ".$row["lop"]."</br>";
}
}
else{
echo "Khong co du lieu ";
}
?>