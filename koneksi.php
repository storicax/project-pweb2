<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "blogg";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
function upload(){
$NamaFile = $_FILES['gambar']['name'];
$tmpName = $_FILES['gambar']['tmp_name'];


move_uploaded_file($tmpName, 'img/'. $NamaFile);
return $NamaFile;
}

?>