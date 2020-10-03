<?php

include './db/db_connect.php';
if (isset($_POST['send'])) {
    $name = $_POST['name'];
    $mail = $_POST['mail'];
    $msg = $_POST['msg'];
    $sql = "INSERT INTO contact(name, mail, msg) VALUES ('$name','$mail','$msg')";
    $query = mysqli_query($conn, $sql);
    if ($query) {
        header("Location:index.php?contact=success");
    }
}