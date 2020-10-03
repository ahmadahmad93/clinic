<?php

include '../../db/db_connect.php';
$id = (int) $_GET['id'];
$sql = "delete from p_appointment where id =$id";
$query = mysqli_query($conn, $sql);
if ($query) {
    header("Location: ../show_app.php");
}