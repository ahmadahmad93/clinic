<!doctype html>
<html dir="rtl">
    <head>
        <meta charset="utf-8" />
        <title>الاستشارات الطبية</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.min.css"/>
        <link rel="stylesheet" href="css/style.css"/>
        <script src="js/jquery-migrate-3.0.0.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body>
        <header>
            <h1 class="bg-primary text-center" style="margin: 0;padding: 15px" >اهلا بك</h1> 
            <p class="bg-primary text-center" style="margin: 0;" >يمكنك طلب اي استشارة و نحن جاهزون لتلبية طلبك</p> 
            <img src="images/slide-03.jpg" width="100%" height="400px" />
        </header>

        <div class="row bg-primary">
            
            <div class="col-lg-10 col-lg-offset-1">
                <div>
                    <h3 class="text-center">املئ المعلومات لطلب استشارة</h3>    
                    <form action="insert.php" method="post">
                        <div class="col-lg-10 col-lg-offset-1">
                            <label>الاسم</label>
                            <input type="text" required="required" name="name" class="form-control" />
                        </div>
                        <div class="col-lg-10 col-lg-offset-1">
                            <label>عنوان الاستشارة</label>
                            <input type="text" required="required" name="title" class="form-control" />
                        </div>
                        <div class="col-lg-10 col-lg-offset-1">
                            <label>نص الاستشارة</label>
                            <textarea type="text" required="required" name="name" class="form-control" ></textarea>
                        </div>
                        <div class="col-lg-2 col-lg-offset-9">
                        <br/>
                        <input type="submit" name="app" class="btn btn-default" value="موافق" />
                        </div>
              
                    </form>
             
                    <br />
                </div>                    
            </div>                
        </div>
        <footer>
            
        </footer>
    </body>
</html>