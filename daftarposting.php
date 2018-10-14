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

	if (isset($_SESSION["nim"]) && isset($_SESSION["password"])) {
		include 'koneksi.php';
		$qry = mysqli_query($koneksi,"SELECT * FROM posting where nim='$_SESSION[nim]'");

		echo "<center><h1><font color=white> POST</h1><br>";
		echo "<table border=1 style='border 3px solid; width:60%;'>
				<tr>
					<th>ID</th>
					<th>Nim</th>
					<th>Nama</th>
					<th>Postingan</th>
					<th>Foto</th>
					<th>Action</th>
				</tr>";
			foreach ($qry as $row ) {
				echo "<tr>
						<td>$row[idPost]</td>
						<td>$row[nim]</td>
						<td>$row[nama]</td>
						<td>$row[deskripsi]</td>
						<td>$row[gambar]</td>
						<td <a href='editpost.php?idPost=$row[idPost]'>Edit</a></td>
					</tr>";
				
			}
			echo "<tr><td colspan =6 align='center'><button style='width: 70px;height:30px; border-radius:10px'><a href='menu.php'> Menu</a></button></font></table>";
		}
		else{
			echo "Anda Tidak Memiliki Akses";
		}
 ?>