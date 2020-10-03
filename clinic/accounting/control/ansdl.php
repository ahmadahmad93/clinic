
<?php
date_default_timezone_set("Asia/Damascus");
$datetime = date('Y-m-d g:i:s');
$d=mktime(23, 14, 54, 8, 12, 2014);
echo "Created date is " . date("Y-m-d H:i:s", $d);
