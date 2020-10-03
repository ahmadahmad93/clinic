<?php
include '../db/db_connect.php';

$id = (int) $_GET['id'];
$sql = "DELETE from users where id=$id";
$query = mysqli_query($conn, $sql);
if ($query){
    header("Location: users.php?msg=1");
}