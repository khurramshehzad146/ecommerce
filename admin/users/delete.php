<?php
include("../inc2/db_connect.php");
$id= $_GET['id'];
$sql = "delete from users where id='$id'";
$conn->query($sql);
header('location:list.php');
?>