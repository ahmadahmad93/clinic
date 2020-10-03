<!doctype html>
<html dir="rtl">
    <head>
        <meta charset="utf-8" />
        <title>الاستقبال</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/bootstrap.min.css"/>
        <link rel="stylesheet" href="../css/style.css"/>
        <script src="../js/jquery-migrate-3.0.0.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
    </head>
    <body>
        <header class="rec-header">
            <div class="row bg-success">
                <div class="col-lg-4 text-center">
                    <h1>Children Health Clinic</h1>
                    <h2>Reciption Department</h2>
                </div>
                <div class="col-lg-4 text-center">
                    <img src="../images/2clinic-logo.jpg" alt="" height="150" width="150">
                </div>
                <div class="col-lg-4 text-center">
                    <h1>عيادة طب الاطفال</h1>
                    <h2>قسم الاستقبال</h2>
                </div>
            </div>
        </header>
        <br/>
        <br/>
        <div class="container">
            <div class="row">
                <h3 class="page-header text-center">معلومات المريض الشخصية</h3>
                <div class="col-lg-10 col-lg-offset-1 jumbotron"  dir="rtl"> 
                    
                    <form action="control/new_p1.php" method="post">                        
                        <div class="col-lg-12">
                            <div class="col-lg-3">
                                <label>اسم الام</label>
                                <input type="text" required="required" class="form-control" name="p_mother" />
                            </div>
                            <div class="col-lg-3">
                                <label>اسم العائلة</label>
                                <input type="text" required="required" class="form-control" name="p_familly" />
                            </div>
                            <div class="col-lg-3">
                                <label>اسم الاب</label>
                                <input type="text" required="required" class="form-control" name="p_father" />
                            </div> 
                            <div class="col-lg-3">
                                <label>اسم المريض</label>
                                <input type="text" required="required" class="form-control" name="p_name" />
                            </div>
                        </div>
                        <br/>
                        <div class="col-lg-12">
                            <div class="col-lg-4">
                                <label>الجنس</label>
                                <input type="text" required="required" class="form-control" name="p_gender" />
                            </div>
                            <div class="col-lg-4">
                                <label>سنة الميلاد</label>
                                <input type="text" required="required" class="form-control" name="p_year" />
                            </div> 
                            <div class="col-lg-4">
                                <label>الرقم الوطني</label>
                                <input type="text" required="required" class="form-control" name="p_ssid" />
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="col-lg-4">
                                <label>صلة القربي</label>
                                <input type="text" required="required" class="form-control" name="p_relation" />
                            </div>
                            <div class="col-lg-4">
                                <label>هاتف المرافق</label>
                                <input type="text" required="required" class="form-control" name="p_aphone" />
                            </div> 
                            <div class="col-lg-4">
                                <label>اسم المرافق</label>
                                <input type="text" required="required" class="form-control" name="p_aname" />
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="col-lg-4">
                                <label>هاتف المريض</label>
                                <input type="text" required="required" class="form-control" name="p_phone" />
                            </div> 
                            <div class="col-lg-8">
                                <label>عنوان المريض</label>
                                <input type="text" required="required" class="form-control" name="p_address" />
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="col-lg-12">
                                <label>ملاحظات</label>
                                <textarea rows="4" class="form-control" name="p_notes"></textarea>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="col-lg-12" >
                                <br/>
                            <input type="submit" class="btn btn-lg btn-success" value="تأكيد" name="p_approve" />
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <footer></footer>

    </body>
</html>