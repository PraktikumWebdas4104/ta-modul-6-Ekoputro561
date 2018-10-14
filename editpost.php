<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body bgcolor="#123324">
				
</body>
</html>
<form method="POST" enctype="multipart/form-data"><center><br>
	<table>
		<tr>
			<td><h2>EDIT POSTINGAN </h2></td>
		</tr>
	</table>
	<tr>
		<td><textarea name="desc" rows="20" cols="80" placeholder="Ketikan Sesuatu...."></textarea></td>
	</tr>
	<tr>
		<td><input type="file" name="gambar">Upload Foto</td>
	</tr>
	<tr>
		<td align="right" style="width: 100%; height: 60px; background-color: brown; text-align: center;">
			<button name="back" value="Kembali" style="width: 50px; height: 30px; border-radius: 10px"><a href="menu.php"> Kembali 			 </a></button>
			<input type="submit" name="editp" value="Kirim" style="width:70px; height:30px; border-radius: 10px">
		</td>
	</tr>
	
</form>

<?php 
	session_start();

	if (isset($_SESSION["nim"]) && isset($_SESSION["password"])) {
		if (isset($_POST['editp'])) {
			include 'koneksi.php';

			$id = $_GET['idPost'];
			$desc = $_GET['desc'];
			$gambar = $FILES['gambar']['name'];

			$qryUpdt = mysqli_query($koneksi,"UPDATE posting SET deskripsi='$desc',foto='$foto'
												WHERE idPost='$id'");

			echo "Update Post Sukses";
			
		}
		
	}
	else{
		echo "Maaf Anda Tidak Memiliki Akses";
	}
 ?>