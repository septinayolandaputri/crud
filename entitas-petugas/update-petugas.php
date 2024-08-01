<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$id_petugas    = $_POST['id_petugas'];
$nama_petugas    = $_POST['nama_petugas'];
$jenis_kelamin      = $_POST['jenis_kelamin'];
$no_telepon = $_POST['no_telepon'];
$alamat       = $_POST['alamat'];

//query update data ke dalam database berdasarkan ID
$query = "UPDATE petugas SET nama_petugas = '$nama_petugas', jenis_kelamin = '$jenis_kelamin', no_telepon = '$no_telepon', alamat = '$alamat' WHERE id_petugas = '$id_petugas'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($connection->query($query)) {
    //redirect ke halaman index.php 
    header("location: index.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>