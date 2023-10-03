<?php
$id = $_GET['sid'];

require_once 'ketnoi.php';

$delete_sql= "DELETE FROM BAIHAT WHERE id=$id";

mysqli_query($conn, $delete_sql);

header("Location:dsbh.php");
?>