 <?php
 session_start();
//cek apakah user sudah login
if(!isset($_SESSION['username'])){
  echo "<div align='center'>OOPS ANDA BELUM LOGIN <a href='login.php'> <br> <br> click here</a></div>";
    die();//jika belum login jangan lanjut
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

$sql = "SELECT * FROM post";
$result = $conn->query($sql);
?>
<center>

    <h2 style="font-family: Arial, Helvetica, sans-serif">"><--- N2VL ---><"</h2>
    <h3>Gudangnya Download Novel Terbaru</h3>


    

<button><a href="insert.php">add post</a></button>
<button><a href="logout.php">Logout</a></button>
<button><a href="daftar.php">daftar akun</a></button>
<button><a onclick="return confirm('ALL DATA WILL BE DELETED ARE U SURE?');"href='deleteall.php'>DELETE ALL DATA</a></button>

<br><br><br><br>
    <table border="1" cellpadding="10" cellspacing="0">
  <tr>
    <th>judul</th>
    <th>keterangan</th>
    <th>Gambar</th>
    <th>Link</th>
    <th>last update</th>
    <th>opsi</th>
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
    

   
    <td>
      <center><button><a href="update.php?id=<?= $row["id"]?>">ubah</a></button><br><br><button><a href="delete.php?id=<?= $row["id"]?>" onclick =" return confirm ('are u sure wanna delete this post?');">hapus</a></button></center>
    </td>
  </tr>
<?php
    }
} 
$conn->close();

?>



