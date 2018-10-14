<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body bgcolor="#123324">
				
</body>
</html>
<form method="POST" enctype="multipart/form-data"><center><font color="white"><br>
	<table>
		<tr>
			<td><h1>Description</h1></td>
		</tr>
		<tr>
			<td><textarea name="desc" rows="20" cols="80" placeholder="Masukkan Sesuatu"></textarea></td>
		</tr>
		<tr>
			<td>Upload Foto : <input type="file" name="gambar"></td>
		</tr>
		<tr>
			<td align="RIGHT">
			<BUTTON name="back" value='Kembali' style='width:70px; height:30px; border-radius: 10px'><a href="menu.php">Kembali</a></BUTTON>
			<input type="submit" name="submit" value="Kirim" style='width:50px; height:30px; border-radius:10px'>
			</td>
		</tr>
	</font></table>
</form>

<?php 
	session_start();
	

	if (isset($_GET['idPost'])) {
		$idPost= $_GET['idPost'];
		$sql = "SELECT * FROM posting where idPost='$idPost'";

		if ($koneksi -> query($sql)) {
			$result = $koneksi -> query($sql);
			$row = $result -> fetch_assoc();
		}
	}
	else{
		if (isset($_POST['submit'])) {
			if (isset($_SESSION["nim"]) && isset($_SESSION["password"])) {
				include 'koneksi.php';

				$qry = mysqli_query($koneksi,"SELECT nim,nama FROM kelolauser WHERE nim='$_SESSION[nim]'");
				$row = mysqli_fetch_array($qry);

				$nim = $row["nim"];
				$nama = $row["nama"];
				$desc = $_POST['desc'];
				$gambar = $_FILES["gambar"]["name"];

				if (str_word_count($desc)>=30 && !empty($desc)) {
					$sql = $koneksi -> query("
						INSERT INTO `posting`(`nim`,`nama`,`deskripsi`,`gambar`) 
						VALUES ('$nim','$nama','$desc','$gambar')");
					echo "<br>Upload Sukses";
				}
				else{
					echo "<h2>Attention :</h2>";
					echo "Isi Harus Lebih Dari 30 Kata";
				}
			} 
			else{
				echo "<h2> Attention :</h2>";
				echo "Maaf Anda Tidak Memiliki Akses";
			}
			
		}
	}
 ?>