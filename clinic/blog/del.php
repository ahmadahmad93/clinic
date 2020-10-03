<?php
include '../db/db_connect.php';
$id = (int) $_GET['id'];
$sql = "delete from advice where id=$id";
$query = mysqli_query($conn, $sql);
if($query)
    header ("Location: old.php");