
<?php
   session_start();
   require_once("koneksi.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>login</title>
	<link rel="stylesheet" href="style.css">
	<form action="proses/proseslogin.php" method="post">
</head>
<body>


	<div class="box">
		<h2>Login</h2>
	<form>
		<div class="inputBox">
		<input type="text" name="username" required=""> 
		<label> username</label>
		</div>
		<div class="inputBox">
		<input type="password" name="password" required=""> 
		<label>password</label>
		</div>
		<!-- <div class="inputBox">
		<label>remeber me</label>
		<input type="checkbox" name="remeber"> 
		</div> -->
		<input type="submit" name="submit" value="submit">
		<button> <a href="daftar.php">register</a></button>
	
	</form>
	</div>
	
</body>
</html>