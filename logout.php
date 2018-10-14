<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body bgcolor="#123324">
				
</body>
</html>
<?php 
	session_start();

	unset($_SESSION['nim']);
	unset($_SESSION['password']);
	unset($_SESSION['nama']);

	session_destroy();
	echo "<center><font color=white><h1>Terima Kasih Telah Logout</h1><br>";
	echo "Silahkan Login Kembali</font><br><br><br>" ;
		echo "<a href='login.php'><input type='submit' value='Log in' style='width: 50px; height:30px; border-radius: 10px'></a><br><center>";
 ?>