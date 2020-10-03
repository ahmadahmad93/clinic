<?php
include '../../db/db_connect.php';

$p_id = (int) $_POST['p_id'];
$v_id = (int) $_POST['v_id'];
$p_num = (int) $_POST['p_num'];
$name =  $_POST['name'];
$notes =  $_POST['notes'];
$sql = "INSERT INTO prescription(p_id, v_id, p_num, name, notes) VALUES ($p_id,$v_id,$p_num,'$name','$notes')";
$query = mysqli_query($conn, $sql);
if($query){
header("Location: ".$_SERVER['HTTP_REFERER']);

}
 else {
echo mysqli_error($conn);    
}