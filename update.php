<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Edit</title>
</head>
<body>
	
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


 require_once("koneksi.php");
 $id=$_GET['id'];

 $sql="SELECT * FROM post WHERE id=$id";
 $result = $conn->query($sql);
 if ($result->num_rows > 0) {
 
    while($row = $result->fetch_assoc()) {
    	

?>
 
	<form action="proses/prosesupdate.php" method="post" enctype="multipart/form-data">
	<input type="hidden" name="id" value="<?= $row['id'] ?>">
	<input type="hidden" name="oldgambar" value="<?= $row['gambar']?>" >
	

<table width="50%" align="left" cellspacing="1" cellpadding="5">
	<tr>
   <td>judul</td>
   <td>:<input type="text" name="judul" placeholder="judul" value="<?= $row['judul'] ?>"></td>
  </tr>
 	<tr>
 	 <td>content</td>
   <td>:<input name="content"  value="<?= $row['content'] ?>">
   </td>
    </tr>
    <tr>
 	 <td>link</td>
   <td>:<input name="link"  value="<?= $row['link'] ?>">
   </td>
    </tr>
  <tr>
    <td>Gambar</td>
    <td><img src="img/<?= $row['gambar']; ?>" width="100"> </td>
  </tr>
  <tr>
  	<td>
  		<td><input type="file" name="gambar"></td>
  	</td>
  </tr>
  <tr>
   <td colspan="2"><input type="submit" name="submit" value="Submit">
   </td>
  </tr>
  </table>
		
		</form>
		<?php
	}
}
?>

</body>
</html>
