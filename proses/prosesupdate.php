<?php

 require_once("../koneksi.php");
 $id=$_POST['id'];
 $judul=$_POST['judul'];
 $content=$_POST['content'];
 $link=$_POST['link'];
$gambar= upload();
$oldgambar=$_POST['oldgambar'];

if($_FILES['gambar']['error']===4){
	$gambar=$oldgambar;
}else{
	$gambar=upload();
}

 $update = "UPDATE post SET judul='$judul', content='$content', gambar='$gambar', link='$link' WHERE id='$id'";

 if ($conn->query($update)===TRUE){
 	header('location:../index.php');
 }else{
 	echo "error updating record";
 }
 ?>



 