<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body bgcolor="#123324">
				
</body>
</html>

<form method="POST" enctype="multipart/from-data">
	
<center><font color="white"><h2>REGISTRASI AKUN</h2>
	<table>
		<tr>
			<td>Nama</td>
			<td></td>
			<td><input type="text" name="nama" placeholder="Max 35 Karakter"></td>
		</tr>
		<tr>
			<td>Nim</td>
			<td></td>
			<td><input type="text" name="nim" placeholder="Harus 10 Karakter"></td>
		</tr>
		<tr>
			<td>Kelas</td>
			<td></td>
			<td><input type="radio" name="kelas" value="41-01">41-01
				<input type="radio" name="kelas" value="41-02">41-02
				<input type="radio" name="kelas" value="41-03">41-03
				<input type="radio" name="kelas" value="41-04">41-04</td>
			</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td></td>
			<td><input type="radio" name="jk" value="pria"> Pria &nbsp;
				<input type="radio" name="jk" value="wanita"> Wanita</td>
		</tr>
		<tr>
			<td>Hobi</td>
			<td></td>
			<td><input type="checkbox" name="hobi" value="Renang">Renang
				<input type="checkbox" name="hobi" value="Badminton">Badminton
				<input type="checkbox" name="hobi" value="Editing">Basket
				<input type="checkbox" name="hobi" value="Ngoding">Ngoding <br>
			</td>
		</tr>
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
			<td></td>
			<td><textarea name="alamat" length="35"></textarea></td>
		</tr>
		<tr>
			<td>Password</td>
			<td></td>
			<td><input type="Password" name="pass"></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td align="right">
				<button style="width:50px;height:30px;border-radius:10px"><a href="login.php">Login</a></button>
				<input type="submit" name="simpan" style="width:50px;height:30px;border-radius:10px"></td>
		</font></center></tr>
 	</table>
	
</form>
 <?php
	if(isset($_POST['simpan'])) {
		include 'prosesregis.php';
	
}
   ?>