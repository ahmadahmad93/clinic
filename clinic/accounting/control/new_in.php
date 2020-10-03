<?php

include '../../db/db_connect.php';
$in = (int) $_POST['cost'];
$account = (int) $_POST['account'];
$report = $_POST['report'];
$notes = $_POST['notes'];
$sql = "INSERT INTO financial (in_cost, account, report, notes) VALUES ($in,$account,'$report','$notes')";
$query = mysqli_query($conn, $sql);
if ($query) {
    header("Location: ../new_in.php");
}
 else {
    echo mysqli_error($conn);
}
