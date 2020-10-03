<?php
include 'db/db_connect.php';
if(isset($_POST['app'])){
    $title = $_POST['report'];
 $sql = "select * from concult where title like '%".$title."%' order by id DESC";   
}
 else {
    $sql = "select * from concult order by id DESC";
}
$query = mysqli_query($conn, $sql);
?>
<!doctype html>
<html dir="rtl">
    <head>
        <meta charset="utf-8" />
        <title>النصائح الطبية</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.min.css"/>
        <link rel="stylesheet" href="css/style.css"/>
        <script src="js/jquery-migrate-3.0.0.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body>
        <header class="rec">
            <h1 class="bg-primary text-center" style="margin: 0;padding: 15px" >مرحبا بك في قسم الاستشارات الطبية</h1> 
            <img src="images/slide-03.jpg" width="100%" height="400px" />
        </header>
    <br/><br/>
        <div class="container">
            <div class="row">
                <?php
                while ($row = mysqli_fetch_assoc($query)) {
                    echo "<div class='col-sm-6 col-md-3'><div class='thumbnail'>";
                    echo "<img src='images/Tips.gif' >";
                    echo "<div class='caption'>";
                    echo '<h3>' . $row['title'] . '</h3>';
                    echo "<p style='word-wrap: break-word;'>" . $row['body'] . "</p>";
                    echo "<p style='word-wrap: break-word;'>" . $row['replay'] . "</p>";
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                }
                ?>
            </div>
        </div>
        <footer></footer>
    </body>
</html>