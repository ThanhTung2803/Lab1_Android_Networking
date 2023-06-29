<?php
//khai bao cac bien
$s="localhost"; $u="id20977999_tung";
$p="Thanhtungg3@"; $db="id20977999_thanhtung";
//tao ket noi voi csdl
$con=new mysqli($s,$u,$p,$db);
//tao chuoi truy van
$sql="insert into MyGuests (firstname,lastname,email)
values ('f1','l2','e1')";
//thuc thi lenh
if($con->query($sql)===TRUE){
echo "Them thanh cong";
}
else
{
echo "Them that bai";
}
$con->close();
?>