<?php 
	include("config.php");

	if (isset($_POST['update'])) {
		$id 	 = $_POST['id'];
		$nama 	 = $_POST['nama'];
		$alamat  = $_POST['alamat'];
		$jurusan = $_POST['jurusan'];

		$update = mysqli_query($connect, "UPDATE mahasiswa SET nama='$nama', alamat='$alamat', jurusan='$jurusan' WHERE id=$id"); 


		if ($update) {
		
			echo 'Data berhasil di simpan! ';		//Pesan jika proses simpan sukses
			echo '<a href="edit.php?id='.$id.'">Kembali Edit</a> | <a href="index.php">Lihat Data</a>';	//membuat Link untuk kembali ke halaman edit
			
		} else {
			
			echo 'Gagal menyimpan data! ';		//Pesan jika proses simpan gagal
			echo '<a href="edit.php?id='.$id.'">Kembali</a>';	//membuat Link untuk kembali ke halaman edit
			
		}
	 
	} else {	//jika tidak terdeteksi tombol simpan di klik
	 
		//redirect atau dikembalikan ke halaman edit
		echo '<script>window.history.back()</script>';
	 
	}

?>