<?php
 session_start();
//cek apakah user sudah login
if(!isset($_SESSION['username'])){
    die("Oops Anda belum login");//jika belum login jangan lanjut
}
//cek level user
if($_SESSION['level']!="admin"){
  header('location:user.php');
    // die("Anda bukan manager");
    //jika bukan admin jangan lanjut
}else{
  $username = $_SESSION['username']; 
  $level=$_SESSION['level'];
}
?>

<center>
<form action="proses/prosesdata.php" method="post" enctype="multipart/form-data"> 
 <table width="50%" align="left" cellspacing="1" cellpadding="5">
 	<tr> <td>title</td>
   <td>:<input type="text" name="judul">
   </td> </tr>
 	
 	<tr>
   <td>content</td>
   <td>:<textarea name="content"></textarea></td>
  </tr>
  <tr>
   <td>link</td>
   <td>:<textarea name="link"></textarea></td>
  </tr>
  <tr>
    <td>Gambar</td>
    <td> <input type="file" name="gambar"> </td>
  </tr>
  <tr>
   <td colspan="2"><input type="submit" name="submit" value="Submit">
    <input type="reset" name="reset" value="reset">
   </td>
  </tr>
  </table>
</form>
</center>

