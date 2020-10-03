<?php
include '../db/db_connect.php';
$name = $_POST['name'];
$user = $_POST['user'];
$pwd = $_POST['pwd'];
$sec = (int)$_POST['section'];
$sql = "INSERT INTO employees(name, username, pwd, section) VALUES('$name','$user','$pwd',$sec)";
$query = mysqli_query($conn, $sql);
if ($query){
    header("Location: users.php?msg=2");
}