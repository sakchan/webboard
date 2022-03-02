 <?php

//  เชื่อมฐานข้อมูล
include  "connect-db_webboard.php";

//   เปิดหัวข้อกระทู้ที่ต้องการตาม  id_webboard  ที่ส่งมา
$sql = " select   *
         from webboard_question
	     where id_webboard = $id_webboard
       ";

// query  คำสั่ง

  $dbquery = mysqli_query($link,$sql) or die("cannot query ");

 // ดึงข้อมูลออกจากฐานข้อมูล
 $result=  mysqli_fetch_array($dbquery, MYSQLI_ASSOC);
 $id_webboard  = $result['id_webboard'];
 $topic  = $result['topic'];
 $name  = $result['name'];
 $message  = $result['message'];
 $date_times = $result['date_times'];
 $ip = $result['ip'];


  // แสดงคำถามของหัวข้อกระทู้ที่เลือก
echo "<table width ='800' border =0 cellpadding='3'  align='center' >";
echo "<tr bgcolor='#FFCC33' height='50' ><td><u><font color='blue' size='5' >$topic </font></u></td></tr>";
echo "<tr bgcolor='#CCCCCC' height='200'><td >$message</td></tr>";
echo "<tr bgcolor='#FFCC33'  height='20'><td >จาก<u> $name </u>[ $date_times ] &nbsp;&nbsp IP = $ip </align></td></tr>";
 echo "</table>";
echo "<br><br>";

//เปิดตารางความกว้าง 800  pixel แสดงผลการตอบคำถามของกระทู้
echo "<table width ='800' border =0 cellpadding='3'  align='center'  >";

// ค้นหาดูว่ามีใครตอบกระทู้นี้หรือยัง
$sql = " select   *
         from webboard_answer
	      where id_webboard = $id_webboard
       ";

$dbquery2 = mysqli_query($link,$sql) or die("cannot query ");

// นับจำนวนของ  record  ของ  webboard_answer
 $NRow=  mysqli_fetch_array($dbquery2, MYSQLI_ASSOC);
 

// นับจำนวนของคำตอบที่แสดงความคิดเห็น
$id=0;

 //  วนรอบแสดงทีละ  record
 for($j=0;$j<$NRow;$j++) {
  $result2=  mysqli_fetch_array($dbquery2, MYSQLI_ASSOC);
  $id_question  = $result2['id_question'];
  $id_webboard  = $result2['id_webboard'];
  $ans_message  = $result2['ans_message'];
  $ans_name = $result2['ans_name'];
  $ans_email = $result2['ans_email'];
  $ans_ip = $result2['ans_ip'];
  $ans_date_times = $result2['ans_date_times'];

echo "<tr bgcolor='#FFCC33'   height='50' ><td><u><font color='blue' size='5' 
          ><u>ความคิดเห็นที่ ".++$id." </u></font></u></td></tr>";

echo "<tr bgcolor='#CCCCCC' height='200'><td> $ans_message </td></tr>";
echo "<tr bgcolor='#FFCC33'  height='20'><td >จาก<u> $ans_name </u>[ $ans_date_times ] 
         &nbsp;&nbsp IP = $ans_ip </align></td></tr>";

echo "<tr bgcolor='FFFFFF'  height='20'><td>&nbsp;</td></tr>";
  }
  echo "</table>";   //จบการแสดงคำตอบของกระทู้

  //   Form  สำหรับทำการส่งคำตอบของกระทู้
  
 echo "<form action='insert_answer.php?id_webboard=$id_webboard' method='POST'>";
echo "<table width ='800' border =0 cellpadding='3'  align='center'  >";
echo "<tr bgcolor='#FFCC33'   height='50' >
          <td colspan='2'><u><font color='blue' size='5' ><u>ร่วมแสดงความคิดเห็นกระทู้นี้  
          </u></font></u></td></tr>";
echo "<tr bgcolor='#CCCCCC' height='15'><td >ชื่อ</td>
          <td><input type='text' name='ans_name' width='30'></td></tr>";

echo "<tr bgcolor='#CCCCCC' height='15'><td >email</td>
          <td><input type='text' name='ans_email' width='30'></td></tr>";

echo "<tr bgcolor='#CCCCCC' height='15'><td >รายละเอียด</td>
          <td><textarea rows='7'  cols ='60'  name='ans_message' > </textarea></td></tr>";

echo "<tr bgcolor='#CCCCCC' height='50'><td >&nbsp;</td>
          <td><input type='submit' value='แสดงความคิดเห็น'></td></tr>";

  echo "</table>";
 echo "</form>";

?>
