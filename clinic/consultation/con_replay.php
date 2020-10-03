<?php
include '../db/db_connect.php';
$id = (int) $_GET['id'];
$replay = $_POST['replay'];
$sql = "update concult set replay='$replay' where id = $id";
$query = mysqli_query($conn, $sql);
if($query){
    header("Location: index.php");
}