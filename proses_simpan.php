<?php
include "koneksi.php";
$nis=$_POST['nis'];
$nama=$_POST['nama'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$telp=$_POST['telp'];
$alamat=$_POST['alamat'];
$foto =$_FILES['foto']['name'];
$tmp =$_FILES['foto']['tmp_name'];

$fotobaru=date('dmYHis').$foto;

$path ="images/".$fotobaru;

if (move_uploaded_file($tmp, $path)) {
	// cek gambar berhasil atau tidak
	$query ="INSERT INTO siswa VALUES('".$nis."','".$nama."','".$jenis_kelamin."','".$telp."','".$alamat."','".$fotobaru."')";
	$sql =mysqli_query($connect,$query);

	if ($sql) {
		header("location: index.php");
	}else{
		echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
		echo "<br><a href='form_simpan.php'>Kembali ke Form</a>";
	}
}else{
	echo "Maaf, Gambar gagal untuk diupload.";
	echo "<br><a href='form_simpan.php'>Kembali ke Form</a>";
}
?>


