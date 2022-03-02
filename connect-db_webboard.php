<?php 
$host ="localhost";
$user ="root";
$pwd  = "";
$dbname = "db_webboard";
$bg="white";

// connect db
  $link= mysqli_connect($host,$user,$pwd) or die("ไม่สามารถติดต่อฐานข้อมูลได้");
// select db
    mysqli_select_db($link,$dbname) or die("cannot select database");
// set ให้อ่านภาษาไทยได้
    mysqli_set_charset($link,"utf8");

?>
