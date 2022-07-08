<html>
<head>
	<title> APLIKASI CRUD SEDERHANA </title>	
</head>
<body>
	<h1><center>DATA SISWA</center></h1>
	<a href="form_simpan.php">Tambah Data</a><br><br>
	<table border="1" width="100%">
	<tr>
		<th>FOTO</th>
		<th>NIS</th>
		<th>NAMA</th>
		<th>JENIS KELAMIN</th>
		<th>TELEPON</th>
		<th>ALAMAT</th>
		<th colspan="2" >AKSI</th>
	</tr>	
	<?php 
		include "koneksi.php";
	$query ="select * from siswa";
	$sql   =mysqli_query($connect,$query);
	while ($data=mysqli_fetch_array($sql)){
	echo "<tr>";
	echo "<td><img src='images/".$data['foto']."' width='100' height='100'> </td>";
	echo "<td>".$data['nis']."</td>";
	echo "<td>".$data['nama']."</td>";
	echo "<td>".$data['jenis_kelamin']."</td>";
	echo "<td>".$data['telp']."</td>";
	echo "<td>".$data['alamat']."</td>";
	echo "<td><a href='form_ubah.php?nis=".$data['nis']."'>Ubah</a></td>";
	echo "<td><a href='proses_hapus.php?nis=".$data['nis']."'>Hapus</a></td>";
	echo "</tr>";
	}
	?>
	</table>
</body>
</html>