<?php
include '../../db/db_connect.php';
$id = (int) $_GET['id'];
$sql = "SELECT * from unconfirmed_entries where id=$id";
$query = mysqli_query($conn, $sql);
$row=  mysqli_fetch_assoc($query);
$in = (int) $row['cost'];
$report = $row['report'];
$account = 11;
$notes = "لا يوجد";
$sql2 = "INSERT INTO financial(in_cost, account, report, notes) VALUES ($in,$account,'$report','$notes')";
$query2 = mysqli_query($conn, $sql2);
if($query2){
    $sql3 = "DELETE FROM unconfirmed_entries WHERE id=$id";
    $query3 = mysqli_query($conn, $sql3);
    if($query3){
        header("Location: ../unconfirmed.php");
    }
}