<?php
   session_start();
  
?>

<!DOCTYPE HTML>  
<html>
<head>

<form action="proses/prosesdaftar.php" method="post">
  
</head>
<body  style="background-color: #e5e3e4 " style="color: blue">  

<h2> Form Data </h2> 
<table width="50%" align="left" cellspacing="1" cellpadding="5">
  <tr>
   <td>username</td>
   <td>:<input type="text" name="username" >
  </tr>
  <tr>
   <td>password</td>
   <td>:<input type="password" name="password">
  </tr>
  <tr>
   <td>level</td>
   <td>:<form action="/action_page.php">
  <select name="level">
    <option value="">-Pilih level anda-</option>
     <option value="admin">admin</option>
     <option value="user">user</option>
  </select>
  </tr>
  <tr><td><img src="capcay.php"/> </td><td>: <input type="text" placeholder="masukan kode captcha" name="kode"/></td>
  </tr>
  <tr>
   <td colspan="2"><input type="submit" name="submit" value="Submit">
    <input type="reset" name="reset" value="reset">
   </td>
  </tr>
  <tr>
    <td><a href="login.php">sudah punya akun?</a></td>
  </tr>

  
</table>
</form>
</body>
</html>