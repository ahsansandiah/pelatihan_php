<?php 
	include("config.php");

	$id = $_GET['id'];

	$result = mysqli_query($connect, "SELECT * FROM mahasiswa WHERE id=$id");

	$data = mysqli_fetch_assoc($result);

?>

<html>
<head>	
	<title>Edit Data</title>
</head>

<body>
	<a href="index.php">Home</a>
	<br/><br/>
	
	<form name="form1" method="post" action="update.php">
		<table border="0">
			<tr> 
				<td>Nama</td>
				<td><input type="text" name="nama" value=<?php echo $data['nama']; ?>></td>
			</tr>
			<tr> 
				<td>Alamat</td>
				<td><input type="text" name="alamat" value=<?php echo $data['alamat']; ?>></td>
			</tr>
			<tr> 
				<td>Jurusan</td>
				<td><input type="text" name="jurusan" value=<?php echo $data['jurusan']; ?>></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $id; ?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>