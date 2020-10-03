<?php
include '../../db/db_connect.php';

if(isset($_POST['p_approve'])){
    $p_name = $_POST['p_name'];
    $p_father = $_POST['p_father'];
    $p_familly = $_POST['p_familly'];
    $p_mother = $_POST['p_mother'];
    $p_ssid =(int) $_POST['p_ssid'];
    $p_year =(int) $_POST['p_year'];
    $p_gender = $_POST['p_gender'];
    $p_aname = $_POST['p_aname'];
    $p_aphone =(int) $_POST['p_aphone'];
    $p_relation = $_POST['p_relation'];
    $p_phone =(int) $_POST['p_phone'];
    $p_address = $_POST['p_address'];
    $p_notes = $_POST['p_notes'];
    
    $sql = "INSERT INTO p_personal_info(name, father, familly, mother, ssid, year, sex, assistant, a_phone, relation, address, phone, notes) VALUES ('$p_name','$p_father','$p_familly','$p_mother',$p_ssid,$p_year,'$p_gender','$p_aname',$p_aphone,'$p_relation','$p_address',$p_phone,'$p_notes')";
    $query = mysqli_query($conn, $sql);
    if($query)
        header ("Location: ../new_patiant.php");
    else {
        header("Location: ../error.php?id=1");
    }
}