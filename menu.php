<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body bgcolor="#123324">
				
</body>
</html>

<?php 
error_reporting(0);
	session_start();

	if (isset($_SESSION['nim']) && isset($_SESSION['password'])) {
		include 'koneksi.php';
		
		$qry = mysqli_query($koneksi,"SELECT * FROM kelolauser WHERE nim ='$_SESSION[nim]'");
		$row  = mysqli_fetch_array($qry);

		
		echo "<center><br> <font color=white><h1>HALAMAN AWAL</h1> <hr style='width:40%'><br>";
		echo "<table><tr><td><b>Data Diri </b>";
		echo "<table style=' border-collapse: collapse; border; 3px solid #999;'><tr><td>";
		echo "<table style=' padding: 8px 15px; background-color:#9da5a1'>
				<tr>
					<th align='left'><br>NIM</th>
					<td><br>:</td>
					<td><br>&nbsp;$row[nim]</td>
				</tr>
				<tr>
					<th align='left'>Nama</th>
					<td>:</td>
					<td>&nbsp;$row[nama]</td>
				</tr>
				<tr>
					<th align='left'>Kelas</th>
					<td>:</td>
					<td>&nbsp;$row[kelas]</td>
				</tr>
				<tr>
					<th align='left'>Jenis Kelamin</th>
					<td>:</td>
					<td>&nbsp;$row[jeniskelamin]</td>
				</tr>
				<tr>
					<th align='left'>Hobi</th>
					<td>:</td>
					<td>&nbsp;$row[hobi]</td>
				</tr>
				<tr>
					<th align='left'>Fakultas</th>
					<td>:</td>
					<td>&nbsp;$row[fakultas]</td>
				</tr>
				<tr>
					<th align='left'>Alamat<br><br></th>
					<td>:<br><br></td>
					<td>&nbsp;$row[alamat]<br><br></td>
				</tr>
			  </table>";
		echo "</td></tr></table>";
		echo "</td><td>
				<a href='posting.php'>
				<input type='submit' value='POST' name='submit' style='width:100px;height:50px;background-color:#16518c;color:white;border-radius:15px'></a><br>
				<a href='daftarposting.php'>
				<input type='submit' value='SHOW POST' name='submit' style='width:100px;height:50px;background-color:#16518c;color:white;border-radius:15px'></a><br>
				<a href='semuaposting.php'>
				<input type='submit' value='ALL POST' name='submit' style='width:100px;height:50px;background-color:#16518c;color:white;border-radius:15px'></a><br>
				<a href='edit.php'>
				<input type='submit' value='Edit' name='submit' style='width:100px;height:33px;background-color:#49c7dd;color:white;border-radius:15px'></a><br>
				<a href='logout.php'>
				<input type='submit' value='Log Out' name='submit' style='width:100px;height:33px;background-color:#c61b40;color:white;border-radius:15px'></a></center>

				</tr></table><br><hr style='width:40%;'>";
		echo "<h1 style='background-color:#9da5a1;width:60%; color:white; height:20px'></h1>";

	}
	else{
		echo "Maaf Anda tidak memiliki akses ke halaman ini";
		echo "<br> Silahkan <a href='login.php'>Login</a>Kembali";
	}
?>



