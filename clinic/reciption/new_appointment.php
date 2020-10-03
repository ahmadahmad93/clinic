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
                <h3 class="page-header text-center">حجز موعد</h3>
                <div class="col-lg-10 col-lg-offset-1 jumbotron"  dir="rtl"> 
                    
                    <form action="control/new_ap.php" method="post">                        
                        <div class="col-lg-12">
                            <div class="col-lg-4">
                                <label>اسم العائلة</label>
                                <input type="text" required="required" class="form-control" name="p_familly" />
                            </div>
                            <div class="col-lg-4">
                                <label>اسم الاب</label>
                                <input type="text" required="required" class="form-control" name="p_father" />
                            </div> 
                            <div class="col-lg-4">
                                <label>اسم المريض</label>
                                <input type="text" required="required" class="form-control" name="p_name" />
                            </div>
                        </div>
                        <br/>
                        <div class="col-lg-12">
                            <div class="col-lg-4">
                                <label>الرقم الذاتي</label>
                                <input type="text" required="required" class="form-control" name="p_id" />
                            </div>
                            <div class="col-lg-4">
                                <label>الرقم الوطني</label>
                                <input type="text" required="required" class="form-control" name="p_ssid" />
                            </div>
                            <div class="col-lg-4">
                                <label>الهاتف</label>
                                <input type="text" required="required" class="form-control" name="p_phone" />
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="col-lg-12">
                                <label>تاريخ الموعد</label><br/>
                                <div class="col-lg-4"><input type="number" min="2017" required="required" class="form-control" name="p_year" placeholder="السنة"/>
                                </div>
                                <div class="col-lg-4"><input type="number" min="1" max="12" required="required" class="form-control" name="p_month" placeholder="الشهر"/>
                                </div>
                                <div class="col-lg-4"><input type="number" min="1" max="31" required="required" class="form-control" name="p_day"  placeholder="اليوم"/>
                                </div>
                            </div>
                            </div>
                        <div class="col-lg-12">
                            <div class="col-lg-4 col-lg-offset-8">
                                <label>ساعة الموعد</label>
                                <select name="p_clock" class="form-control">
                                    <option value="9:00">9:00</option>
                                    <option value="9:30">9:30</option>
                                    <option value="10:00">10:00</option>
                                    <option value="10:30">10:30</option>
                                    <option value="11:00">11:00</option>
                                    <option value="11:30">11:30</option>
                                    <option value="12:00">12:00</option>
                                    <option value="12:30">12:30</option>
                                    <option value="1:00">1:00</option>
                                    <option value="1:30">1:30</option>
                                    <option value="2:00">2:00</option>
                                </select>    
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