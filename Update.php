<?php
//khai bao cac bien
$s="localhost"; $u="id20977999_tung";
$p="Thanhtungg3@"; $db="id20977999_thanhtung";
//tao ket noi voi csdl
$con=new mysqli($s,$u,$p,$db);
//tao chuoi truy van
$sql="update MyGuests set firstname='f1 update'
where id=2";
//thuc thi lenh
if($con->query($sql)===TRUE){
echo "Cap nhat thanh cong";
}
else
{
echo "Cap nhat that bai";
}
$con->close();
?>