<?php
session_start();


   require_once("../koneksi.php");
   $username = $_POST['username'];
   $pass = md5($_POST['password']);
   $level=$_POST['level'];
   // $pass_md5=md5($pass);
   $sql = "SELECT * FROM user WHERE username = '$username'";
   $query = $conn->query($sql);
   if($query->num_rows != 0) {
     echo "<div align='center'>Username Sudah Terdaftar! <a href='../daftar.php'>Back</a></div>";
   } else {
     if(!$username || !$pass) {
       echo "<div align='center'>Masih ada data yang kosong! <a href='../daftar.php'>Back</a>";
     }else if($_POST["kode"] != $_SESSION["kode_cap"] OR $_POST["kode"] == "")
{ 
//bila captcha yang dimasukkan salah
echo"<div align='center'>kode captcha salah coyy check lagi donk!!! <a href='daftar.php'>Back</a></div>";
}

      else {
       $data = "INSERT INTO user VALUES ('$username', '$pass', '$level')";
       $simpan = $conn->query($data);
       if($simpan) {
         echo "<div align='center'>Pendaftaran Sukses, Silahkan <a href='../login.php'>Login</a></div>";
       } else {
         echo "<div align='center'>Proses Gagal!</div>";
       }
     }
   }
?>

