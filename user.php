 <?php
 session_start();
//cek apakah user sudah login
if(!isset($_SESSION['username'])){
    die("Oops Anda belum login");//jika belum login jangan lanjut
}
//cek level user
if($_SESSION['level']!="user"){
	header('location:index.php');
    // die("Anda bukan manager");
    //jika bukan admin jangan lanjut
}else{
	$username = $_SESSION['username']; 
	$level=$_SESSION['level'];
}
 require_once("koneksi.php");

$sql = "SELECT * FROM post";
$result = $conn->query($sql);
?>
<center>

    <h2 style="font-family: Arial, Helvetica, sans-serif" style="color: blue">"><--- N2VL ---><"</h2>
    <h3>Gudangnya Download Novel Terbaru</h3>


    


<button><a href="logout.php">Logout</a></button>
<button><a href="daftar.php">daftar akun</a></button>

<br><br><br><br>
    <table border="1" cellpadding="10" cellspacing="0">
  <tr>
    <th>judul</th>
    <th>keterangan</th>
    <th>gambar</th>
 
    <th>link</th>
       <th>last update</th>
    
  </tr> 
 
  <?php

if ($result->num_rows > 0) {
 
    while($row = $result->fetch_assoc()) {
   
?>
  <tr>
    <td><?= $row['judul'] ?></td>
    <td><?= $row['content'] ?></td>
    <td><img src="img/<?= $row['gambar']?>" width="100"></td>
   
    <td><a href="<?= $row['link'] ?>">donwload</a></td>
     <td><?= $row['waktu'] ?></td>

   
  </tr>
<?php
    }
} 
$conn->close();

?>



