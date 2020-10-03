<?php

include './db/db_connect.php';
if (isset($_POST['btn'])) {
    $name = $_POST['name'];
    $mail = $_POST['mail'];
    $msg = $_POST['pwd'];
    $sql = "INSERT INTO users(name, mail, pwd) VALUES ('$name','$mail','$msg')";
    $query = mysqli_query($conn, $sql);
    if ($query) {
        header("Location:index.php?reg=success");
    }
}