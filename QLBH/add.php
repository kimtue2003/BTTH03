<?php
$tenbaihat = $_POST['tenBaiHat'];
$casi = $_POST['caSi'];
$theloai = $_POST['idTheLoai']; 
require_once 'ketnoi.php';
$add_sql = "INSERT INTO BAIHAT (tenBaiHat, caSi, idTheLoai) VALUES ('$tenbaihat', '$casi','$theloai')";
if (mysqli_query($conn, $add_sql)){
    header("Location:dsbh.php");
    }
?>