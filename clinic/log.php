<?php
include './db/db_connect.php';
if (isset($_POST['btn'])) {
    $name = $_POST['user'];
    $pwd = $_POST['pwd'];
    $sql = "SELECT * FROM users where mail='$name' and pwd='$pwd'";
    $query = mysqli_query($conn, $sql);
    if (mysqli_num_rows($query) >= 1) {
        
                header("Location: get_advice.php");
    
    }
}
?>