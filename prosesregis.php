<?php 
error_reporting(0);
	
	include 'koneksi.php';
	
		if (isset($_POST['simpan'])) {
			include('koneksi.php');
			
			if ($koneksi) {
				$nama 		= $_POST['nama'];
				$nim  		= $_POST['nim'];
				$kelas		= $_POST['kelas'];
				$jk			= $_POST['jk'];
				$hobi		= $_POST['hobi'];
				$fakultas	= $_POST['fak'];
				$alamat		= $_POST['alamat'];
				$pass 		= $_POST['pass'];				
 				
				$query  =mysqli_query($koneksi, "SELECT * FROM kelolauser WHERE nim='$nim'");
				$row	=mysqli_fetch_array($query);
				$cari	=strpos($nama, is_numeric($nama));

 				if (strlen($nama)<=35) {
	  					if (strlen($nim)==10 && is_numeric($nim)==TRUE) {

	  						$sql = $koneksi->query("
							INSERT INTO `kelolauser` (`nim`, `nama`, `kelas`, `jeniskelamin`, `hobi`, `fakultas`,`alamat`,`password`)										  									
							VALUES ('$nim', '$nama', '$kelas', '$jk', '$hobi', '$fakultas','$alamat', '$pass')");

									echo "Registrasi Berhasil";
									echo "Silahkan <a href='login.php'><input type='submit' value='Login'></a>";
								}
								else{
									echo "Nim Harus 10 Karakter dan Harus Angka";
								}
							}
							else{
								echo "Nama Maksimal 35 Karakter";
							}
						}
						else{
							echo "Registrasi Gagal";
						}
					}

?>  