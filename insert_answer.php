<html>
<head><title>ทำการแทรก  insert guestbook </title> </head>
<?php 

//$id_webboard=$_POST['id_webboard'];
$id_webboard=$_GET['id_webboard'];
 // รับค่าชื่อของผู้ที่ตอบกระทู้
$ans_name=$_POST['ans_name'];

// รับค่า  email ของผู้ที่ตอบกระทู้
$ans_email=$_POST['ans_email'];

// รับค่ารายละเอียดของผู้ที่ตอบกระทู้
$ans_message=$_POST['ans_message'];

// อ่านค่า  IP  Address ของผู้ที่ตอบกระทู้
$ip=$_SERVER["REMOTE_ADDR"];

// อ่านค่า  times  เพื่อเตรียมไป  insert  ฐานข้อมูล
$date_times= date("Y-m-d H:i:s");

//เชื่อมต่อฐานข้อมูล
include "connect-db_webboard.php";

// คำสั่ง  insert
$sql = "insert into webboard_answer values(' ' ,    '$id_webboard','$ans_message','$ans_name','$ans_email','$ip','$date_times')";
?>
<body bgcolor="ffcc33" text="blue">
<?php
// ทำการ  insert
$dbquery = mysqli_query($link,$sql) or die("cannot insert");

 echo " <h3>inserting complete</h3>";
 //  กลับไป  webboard
 echo "<a href='webboard.php'>come back to webboard</a>";

?>
</body>
</html>
