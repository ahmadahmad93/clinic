<?php

include '../../db/db_connect.php';
$out = (int) $_POST['cost'];
$account = (int) $_POST['account'];
$report = $_POST['report'];
$notes = $_POST['notes'];
$sql = "INSERT INTO financial (out_cost, account, report, notes) VALUES ($out,$account,'$report','$notes')";
$query = mysqli_query($conn, $sql);
if ($query) {
    header("Location: ../new_in.php");
}
 else {
    echo mysqli_error($conn);
}
