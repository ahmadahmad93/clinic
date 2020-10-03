<?php
date_default_timezone_set("Asia/Damascus");
$day = date('d');
$month = date('m');
$year = date('Y');
include '../db/db_connect.php';

$sql = "SELECT * from p_appointment where state=0 and day=$day and month=$month and year=$year";
$query =  mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($query)){
    echo '<tr>';
    echo '<td>'.$row['time'].'</td>';
    echo '<td>'.$row['name'].' '.$row['father'].' '.$row['familly'].'</td>';
    echo '<td>'.$row['ssid'].'</td>';
    echo '<td>'.$row['phone'].'</td>';
    echo "<td><a href='new_info.php?id=".$row['p_id']."' class='btn btn-danger'> فتح</a></td>";
    
}