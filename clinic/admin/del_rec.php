<?php
include '../db/db_connect.php';

$id = (int) $_GET['id'];
$sql = "DELETE from financial where id=$id";
$query = mysqli_query($conn, $sql);
if ($query){
    header("Location: accounting.php?msg=1");
}