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
            <h1 class="bg-primary text-center" style="margin: 0;padding: 15px" >البحث عن استشارة معينة</h1> 
            <img src="images/slide-03.jpg" width="100%" height="400px" />
        </header>
        <br/><br/>
        <div class="container">
            <div class="row">
                <form action="consult.php" method="post">
                    <div class="col-lg-12">
                        <label>عنوان الاستشارة</label>
                        <input name="report" class="form-control" type="text" required />
                    </div>
                    <div class="col-lg-12">
                        <label></label>
                        <input type="submit" class="btn btn-info btn-block" value="بحث" name="app" />
                    </div>
                </form>
            </div>
        </div>
        <footer></footer>
    </body>
</html>