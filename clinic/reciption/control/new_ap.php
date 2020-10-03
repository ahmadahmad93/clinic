<?php

include '../../db/db_connect.php';

if (isset($_POST['p_approve'])) {
    $p_name = $_POST['p_name'];
    $p_father = $_POST['p_father'];
    $p_familly = $_POST['p_familly'];
    $p_ssid = (int) $_POST['p_ssid'];
    $p_phone = (int) $_POST['p_phone'];
    $p_year = (int) $_POST['p_year'];
    $p_month = (int) $_POST['p_month'];
    $p_day = (int) $_POST['p_day'];
    $p_notes = $_POST['p_notes'];
    $p_time = $_POST['p_clock'];
    $p_id =(int) $_POST['p_id'];

    $sql = "INSERT INTO p_appointment(name, father, familly, phone, ssid, day, month, year, time, notes,p_id) VALUES"
            . " ('$p_name','$p_father','$p_familly',$p_phone,$p_ssid,$p_day,$p_month,$p_year,'$p_time','$p_notes',$p_id)";
    $query = mysqli_query($conn, $sql);
    if ($query)
        header("Location: ../new_appointment.php");
    else {
        header("Location: ../error.php?id=2");
    }
}