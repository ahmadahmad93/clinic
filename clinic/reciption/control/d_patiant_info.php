<?php

include '../../db/db_connect.php';
$id = (int) $_GET['id'];
$sql = "update p_personal_info set active=0 where id =$id";
$query = mysqli_query($conn, $sql);
if ($query) {
    header("Location: ../show_cards.php");
}