<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body bgcolor="#123324">
				
</body>
</html><form method="POST">
	<center>
		<h1><font color="white"> EDIT PROFILE </h1><br>

	<table style="padding: 100px 50px; background-color: #3f544a">
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><input type="text" name="nama" placeholder="Maximal 35 Karakter"></td>
		</tr>
		<tr>
			<td>Kelas</td>
			<td>:</td>
			<td><input type="radio" name="kelas" value="MI4101">MI4101 
				<input type="radio" name="kelas" value="MI4102">MI4102 
				<input type="radio" name="kelas" value="MI4103">MI4103 
				<input type="radio" name="kelas" value="MI4104">MI4104</td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td>:</td>
			<td><input type="radio" name="jk" value="Laki-laki">Pria &nbsp;
				<input type="radio" name="jk" value="Perempuan">Wanita</td>
		</tr>
		<tr>
			<td>Hobi</td>
			<td></td>
			<td><input type="checkbox" name="hobi" value="Renang">Renang
				<input type="checkbox" name="hobi" value="Badminton">Badminton
				<input type="checkbox" name="hobi" value="Editing">Basket
				<input type="checkbox" name="hobi" value="Ngoding">Ngoding <br>
			</td>
		<tr>
			<td>Fakultas</td>
			<td></td>
			<td><select name="fak" style="width: 160px">
				<option value="-1"> >Pilih Fakultas</option>
				<option value="Fakultas Ekonomi Bisnis"> Fakultas Ekonomi Bisnis</option>
				<option value="Fakultas Komunikasi Bisnis"> Fakultas Komunikasi Bisnis</option>
				<option value="Fakultas Ilmu Terapan">Fakultas Ilmu Terapan</option>
				<option value="Fakultas Industri Kreatif">Fakultas Industri Kreatif</option>
			</select></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td><textarea name="alamat" length="35"></textarea></td>
		</tr>
		<tr>
			<td>Password</td>
			<td>:</td>
			<td><input type="password" name="password"></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td align="right">
				<button style="width:70px;height:30px;border-radius:10px"><a href="menu.php">Menu</a></button>
				<input type='submit' name="simpan" value='Kirim' style='width:50px;height:30px;border-radius:10px'><br></td></font>
		</tr>
	</form>

<?php 
	session_start();

	if (isset($_SESSION["nim"]) && isset($_SESSION["password"])) {
		if (isset($_POST['simpan'])) {
			include 'koneksi.php';

			$nama1 = $_POST['nama'];
			$kelas1 = $_POST['kelas'];
			$jk1	= $_POST['jk'];
			$hobi1 = $_POST['hobi'];
			$fak1 = $_POST['fak'];
			$alamat1 = $_POST['alamat'];
			$pass1 = $_POST['pass'];

			$qryUpdt = mysqli_query($koneksi,"UPDATE kelolauser SET nama='$nama1',kelas='$kelas1',
				jeniskelamin='$jk1',hobi='$hobi1',fakultas='$fak1',alamat='$alamat1',password='$pass1'where nim='$_SESSION[nim]'");

			echo "Update Profile Sukses";
			
		}
		
	}
	else{
		echo "Maaf Anda Tidak Bisa Masuk Ke halaman ini";
	}
 ?>