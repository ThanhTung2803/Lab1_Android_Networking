<?php
//khai bao cac bien
$s="localhost"; $u="id20977999_tung";
$p="Thanhtungg3@"; $db="id20977999_thanhtung";
//tao ket noi voi csdl
$con=new mysqli($s,$u,$p,$db);
//tao chuoi truy van
$sql="delete from MyGuests where id=1";
//thuc thi lenh
if($con->query($sql)===TRUE){
echo "Xoa thanh cong";
}
else
{
echo "Xoa that bai";
}
$con->close();
?>
