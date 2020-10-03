<?php
include '../db/db_connect.php';
$title = $_POST['title'];
$body = $_POST['body'];
$sql = "INSERT INTO advice(title, body) VALUES ('$title','$body')";
$query = mysqli_query($conn, $sql);
if($query)
    header("Location: index.php");
