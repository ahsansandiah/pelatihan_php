<?php 
	include("config.php");

	if (isset($_POST['Submit'])) {
		//data dari form inputan
		$nama 		= $_POST['nama'];
		$alamat 	= $_POST['alamat'];
		$jurusan	= $_POST['jurusan'];

		//check data tidak kosong
		if (empty($nama) || empty($alamat) || empty($jurusan)) {
			if (empty($nama)) {
				echo "<font color='red'>Nama tidak boleh kosong.</font><br/>";
			}
			if (empty($alamat)) {
				echo "<font color='red'>Alamat tidak boleh kosong.</font><br/>";
			}
			if (empty($jurusan)) {
				echo "<font color='red'>Jurusan tidak boleh kosong.</font><br/>";
			}
			//kembali ke halaman sebelumnya
			echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
		} else {
			$result = mysqli_query($connect, "INSERT INTO mahasiswa(nama,alamat,jurusan) VALUES('$nama','$alamat','$jurusan')"); 
			//menampilkan pesan success
			echo "<font color='green'>Data berhasill ditambah.";
			echo "<br/><a href='index.php'>Lihat Semua Data</a>";
		}
	}
?>