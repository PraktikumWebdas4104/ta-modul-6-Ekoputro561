<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body bgcolor="#123324">
				
</body>
</html>
<form method="POST">
	<h1><center><font color="white">APLIKASI TA6</font></center></h1>
	<table  border= 5 align="Center" bgcolor="#9da5a1"><tr><td align="Center">
	<h2>Login Akun</h2>
	<table>
		<tr>
			<td>Username (NIM)</td>
			<td></td>
			<td> &nbsp; &nbsp; &nbsp;<input type="text" name="nim"> &nbsp; &nbsp; &nbsp;</td>
		</tr>
		<tr>
			<td>Password</td>
			<td></td>
			<td> &nbsp; &nbsp; &nbsp;<input type="password" name="pass"> &nbsp; &nbsp; &nbsp;</td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td><input type="submit" name="submit" value="Login"> &nbsp;<a href="regis.php">Registrasi</a></td>
		</tr>
		<tr>
			<td><h2>&nbsp;</h2></td>
			<td></td>
			<td></td>
		</tr>
	</table>
</form>
</td></tr></table>

<?php
 	if (isset($_POST['submit'])) {
 		session_start();
 			
 			include 'koneksi.php';
 			$nim = $_POST['nim'];
 			$pass= $_POST['pass'];

 			$query = mysqli_query($koneksi,"SELECT nim, password FROM kelolauser WHERE nim ='$nim'");
 			$row = mysqli_fetch_array($query);

 			if ($nim == $row['nim'] && $pass == $row['password']) {
 					$_SESSION["nim"]=$row["nim"];
 					$_SESSION["password"]=$row["password"];
 					header("location:menu.php"); 				 					
 			}
 			else{
 				echo "Username Dan Password Yang Anda Masukkan Salah";
 			}
 		}	
	?>