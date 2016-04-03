<?php 
	include("config.php");

	$result = mysqli_query($connect, "SELECT * FROM mahasiswa ORDER BY id DESC");

?>

<!DOCTYPE html>
<html>
<head>
	<title>Data Mahasiswa</title>
</head>
<body>
	<a href="add.html">Add New Data</a><br/><br/>
	<table width='80%' border=0>
		<tr bgcolor='#CCCCCC'>
			<td>Nama</td>
			<td>Alamat</td>
			<td>Jurusan</td>
			<td></td>
		</tr>
		<?php 
			while ($data = mysqli_fetch_assoc($result)) {
				echo "<tr>";
					echo "<td>".$data['nama']."</td>";
					echo "<td>".$data['alamat']."</td>";
					echo "<td>".$data['jurusan']."</td>";
					echo "<td><a href=\"edit.php?id=$data[id]\">Edit</a> | <a href=\"delete.php?id=$data[id]\" onClick=\"return confirm('Apakah anda yakin?')\">Delete</a></td>";
				echo "</tr>";
			}
		?>
	</table>
</body>
</html>