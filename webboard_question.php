<html>
<head>
<title>webboard question</title>
</head>
<body bgcolor="#FFFFFF">

<!--  เมื่อกดส่งข้อมูลจะส่งไปไฟล์  webboard-insert.php -->
<form action="webboard-insert.php" method="POST">

  <!--  สร้างตารางมีความกว้าง 500  pixel -->
<table width="500" border ="1" cellpadding="5" cellspacing="0"   
   bordercolor="#FFFFFF" bgcolor="#FFCC33">
  <tr> <td  colspan="2"><h2 align="center">ขอเชิญตั้งกระทู้</h2> </td>  </tr>
  <tr><td>หัวข้อ </td><td><input type="text" name="topic" maxlength="30">
         </td></tr>
  <tr><td>รายละเอียด </td><td><textarea cols="40"  rows="6"  
           name="message"></textarea></td></tr>
   <tr><td>ชื่อ </td><td><input type="text" name="name" maxlength="20" /></td></tr>
   <tr><td>Email</td><td><input type="text" name="email" maxlength="20" /></td></tr>
   <tr><td>&nbsp;</td><td><input type="submit"  value="เชิญตั้งกระทู้"></td></tr>
</table>
</form>
</body>
</html>
