<?php
$tenbaihat = $_POST['tenBaiHat'];
$casi = $_POST['caSi'];
$theloai = $_POST['idTheLoai'];  
$id = $_POST['sid']; 

require_once 'ketnoi.php';


$update_sql = "UPDATE BAIHAT SET tenBAiHat='$tenbaihat', casi='$caSi', idTheLoai='$theloai' WHERE id=$id";

if (mysqli_query($conn, $update_sql)){
    header("Location:dsbh.php");
    }
    //echo $add_sql;
    //exit;
?>