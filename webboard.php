<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874" />
<title>เชิญตั้งกระทู้ webboard </title>
</head>
<body  bgcolor="#FFFFFF">
<?php 

//ติดต่อฐานข้อมูล
 include "connect-db_webboard.php";

 // เปิดตารางให้มีความกว้าง 800  pixel
echo "<table width ='800' border =0 cellpadding='3' >";
echo "<tr bgcolor='#0066FF'><td colspan='5'>
         <a href='webboard_question.php'>เชิญตั้งหัวข้อกระทู้ตามสบายครับ</a> </td></tr>";
echo "<tr bgcolor='#CCCCCC'><td >เลขที่</td><td>หัวข้อ</td><td>โดย</td><td>วันที่
          </td></tr>";

// เปิดตารางคำถามของ  webboard  เรียงจากมากมาน้อย
$sql = " select   *
         from webboard_question
	      order by id_webboard desc
        ";
	
// query  คำสั่ง  เพิ่อเปิดดูข้อมูลในตาราง
  $dbquery = mysqli_query($link,$sql) or die("cannot query ");
  

//  นับจำนวนของ record
  $NRow = mysqli_num_rows($dbquery)   or die("cannot query num_rows");
 for($i=0;$i<$NRow;$i++) {
	  $result=  mysqli_fetch_array($dbquery, MYSQLI_ASSOC);
      $id_webboard  = $result['id_webboard'];
      $topic  = $result['topic'];
      $name  = $result['name'];
      $date_times = $result['date_times'];
   //  แสดงทีละ  record
echo "<tr bgcolor='#FFCC33'><td >$id_webboard</td><td>
        <a href='list_webboard.php?id_webboard=$id_webboard'>$topic</a></td>
        <td>$name</td><td>$date_times</td></tr>";
  }
  echo "</table>";

?>
</body>
</html> 
