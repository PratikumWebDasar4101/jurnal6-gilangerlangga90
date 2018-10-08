<?php

require_once('db.php');

	if(isset($_POST['nama'])){}

   	$nim				= $_POST['nim'];
	$nama 				= $_POST['nama'];
	$kelas				= $_POST['kelas'];
	$jenis_kelamin		= $_POST['jenis_kelamin'];
	$hobi				= $_POST['hobi'];
	$fakultas			= $_POST['fakultas'];
	$alamat				= $_POST['alamat'];


    $sql = "UPDATE mahasiswa SET nim = '$nim', nama = '$nama', kelas = '$kelas', jenis_kelamin = '$jenis_kelamin', hobi = '$hobi', fakultas = '$fakultas', alamat = 'alamat' WHERE id=$id";

    if (mysqli_query($conn, $sql)) {
    header('Location: tampil.php');
    }else {
    echo "Data gagal diupload! " . $sql . "<br?" . mysqli_error($conn);
}

mysqli_close($conn);

?>