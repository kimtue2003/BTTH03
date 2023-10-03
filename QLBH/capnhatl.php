<?php
$tentheloai = $_POST['tenTheLoai'];

require_once 'ketnoi.php';


$update_sql = "UPDATE THELOAI SET tenTheLoai='$tentheloai' WHERE id=$id";

if (mysqli_query($conn, $update_sql)){
    header("Location:theloainhac.php");
    }
    //echo $add_sql;
    //exit;
?>