<?php
include '../db/db_connect.php';
$id = (int) $_GET['id'];

function get_visit_number($id) {
    global $conn;
    $sql = "select v_id from p_visit where p_id = $id order by v_id DESC LIMIT 1";
    $query = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($query);
    $old_number = $row['v_id'];
    $new_number = $old_number + 1;
    echo $new_number;
}
?>
<!doctype html>
<html dir="rtl">
    <head>
        <meta charset="utf-8" />
        <title>العيادة</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/bootstrap.min.css"/>
        <link rel="stylesheet" href="../css/style.css"/>
        <script src="../js/jquery-migrate-3.0.0.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
    </head>
    <body>
        <header class="rec-header">
            <div class="row bg-danger">
                <div class="col-lg-4 text-center">
                    <h1>Children Health Clinic</h1>
                    <h2>clinic Department</h2>
                </div>
                <div class="col-lg-4 text-center">
                    <img src="../images/2clinic-logo.jpg" alt="" height="150" width="150">
                </div>
                <div class="col-lg-4 text-center">
                    <h1>عيادة طب الاطفال</h1>
                    <h2>قسم العيادة</h2>
                </div>
            </div>
        </header>
        <br/>
        <br/>
        <div class="container">
            <h3 class="page-header text-center">معلومات كشف زيارة مريض</h3>
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 jumbotron"  dir="rtl">
                    <form action="control/new_info.php" method="post" >
                        <div class="col-lg-12">
                            <div class="col-lg-6">
                                <label>رقم المريض</label>
                                <input type="text" name="p_id" class="form-control" value="<?php echo $id; ?>" />
                            </div>
                            <div class="col-lg-6">
                                <label>رقم الزيارة</label>
                                <input type="text" name="v_id" class="form-control" value="<?php get_visit_number($id); ?>" />
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="col-lg-6">
                                <label>الطول</label>
                                <input type="text" name="p_weight" class="form-control"/>
                            </div>
                            <div class="col-lg-6">
                                <label>الوزن</label>
                                <input type="text" name="v_height" class="form-control" />
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="col-lg-6">
                                <label>الحرارة</label>
                                <input type="text" name="p_heat" class="form-control"/>
                            </div>
                            <div class="col-lg-6">
                                <label>وصف اسهال</label>
                                <input type="text" name="v_diarrhea" class="form-control" />
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="col-lg-6">
                                <label>وصف اقياء</label>
                                <input type="text" name="p_vibrant" class="form-control"/>
                            </div>
                            <div class="col-lg-6">
                                <label>وضع التنفس</label>
                                <input type="text" name="v_breath" class="form-control" />
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="col-lg-6">
                                <label>لون الوجه</label>
                                <input type="text" name="p_color" class="form-control"/>
                            </div>
                            <div class="col-lg-6">
                                <label>وصف الخروج(البراز)</label>
                                <input type="text" name="v_stool" class="form-control" />
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <label>تشخيص الزيارة</label>
                            <textarea name="diagnosis" rows="5" class="form-control"></textarea>

                        </div>
                        <div class="col-lg-12">
                            <label>ملاحظات</label>
                            <textarea name="notes" rows="5" class="form-control"></textarea>

                        </div>
                        <div class="col-lg-12">
                            
                                <label>المبلغ الواجب قبضه</label>
                                <input type="text" name="v_cost" class="form-control" />
                        </div>
                        <div class="col-lg-12" style="margin-top: 15px;">
                            <div class="col-lg-4"><a class="btn btn-block btn-danger" href="show_app.php" target="_blank" >عرض جدول المواعيد</a></div>
                            <div class="col-lg-4"><a class="btn btn-block btn-danger" href="prescription.php?id=<?php echo $id; ?>&v_id=<?php get_visit_number($id); ?>" target="_blank" >وصف دواء</a></div>
                            <div class="col-lg-4"><input class="btn btn-danger btn-block" type="submit" name="approve" value="تأكيد" />
                            </div>
                        </div>
                    </form>
                </div>


            </div>
        </div>
        <footer></footer>

    </body>
</html>