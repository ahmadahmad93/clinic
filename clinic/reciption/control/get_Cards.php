<?php
include '../db/db_connect.php';

$sql = "SELECT * from p_personal_info where active=1";
$query =  mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($query)){
    echo '<tr>';
    echo '<td>'.$row['id'].'</td>';
    echo '<td>'.$row['name'].' '.$row['father'].' '.$row['familly'].'</td>';
    echo "<td><a href='card.php?id=".$row['id']."' class='btn btn-success'>عرض التفاصيل</a><a href='control/d_patiant_info.php?id=".$row['id']."' class='btn btn-danger'> حذف</a></td>";
    
}