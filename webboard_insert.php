<html>
<head><title>ทำการแทรก  insert webboard </title> </head>
<?php
// รับค่าหัวข้อคำถามของกระทู้
$topic=$_POST['topic'];
// รับค่ารายละเอียดของกระทู้
$message=$_POST['message'];
// รับค่าชื่อของผู้ตั้งกระทู้
$name=$_POST['name'];
// รับค่าชื่อ email ของผู้ตั้งกระทู้
$email=$_POST['email'];
//  อ่านค่า   ip address    ของผู้ตั้งกระทู้
$ip=$_SERVER["REMOTE_ADDR"];
//  อ่านค่าวันที่และเวลาของผู้ตั้งกระทู้
$date_times= date("Y-m-d H:i:s");

//  เชื่อมต่อฐานข้อมูล
include "connect-db_webboard.php";

// คำสั่ง  sql  สำหรับ insert  ข้อมูล
$sql = "insert into webboard_question values(' ' ,'$topic','$message','$name','$email',' $ip',' 
                                                                 $date_times')";
?>
<body bgcolor="ffcc33" text="blue">
<?php 
 
  $dbquery = mysqli_query($link,$sql) or die("cannot insert  webboard");
  echo " <h3>inserting is  complete</h3>";
  echo "<a href='webboard.php'>come back to webboard to review topic </a>";

?>
</body>
</html>
