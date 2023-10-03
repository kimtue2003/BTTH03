<?php
$tentheloai = $_POST['tenTheLoai'];
require_once 'ketnoi.php';
$add_sql = "INSERT INTO THELOAI (tenTheLoai) VALUES ('$tentheloai')";
if (mysqli_query($conn, $add_sql)){
    header("Location:theloainhac.php");
    }
?>