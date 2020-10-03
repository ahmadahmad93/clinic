<?php
include '../../db/db_connect.php';

$p_id = (int) $_POST['p_id'];
$v_id = (int) $_POST['v_id'];
$p_weight = (int) $_POST['p_weight'];
$v_height = (int) $_POST['v_height'];
$p_heat = (int) $_POST['p_heat'];
$v_diarrhea = $_POST['v_diarrhea'];
$p_vibrant = $_POST['p_vibrant'];
$v_breath = $_POST['v_breath'];
$p_color = $_POST['p_color'];
$v_stool= $_POST['v_stool'];
$diagnosis= $_POST['diagnosis'];
$notes= $_POST['notes'];
$v_cost= $_POST['v_cost'];
$sql = "INSERT INTO p_visit(p_id, v_id, weight, height, heat, Diarrhea,Vibrant, color, stool, breath, Diagnosis, notes, cost) VALUES ($p_id,$v_id,$p_weight,$v_height,$p_heat,'$v_diarrhea','$p_vibrant','$p_color','$v_stool','$v_breath','$diagnosis','$notes',$v_cost)";
$query = mysqli_query($conn, $sql);
if($query){
    $report = " قبض مبلغ"." ".$v_cost." "."من المريض صاحب الرقم الذاتي"." ".$p_id." "."معاينة عن زيارته رقم"." ".$v_id;
    
    $sql2 = "INSERT INTO unconfirmed_entries(p_id, v_id, cost, report) VALUES ($p_id,$v_id,$v_cost,'$report')";
    $query2 = mysqli_query($conn, $sql2);
    if($query2){
                header("Location: ../prescription.php?id=$p_id&v_id=$v_id");
    }
}