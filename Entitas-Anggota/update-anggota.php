<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$id_anggota    = $_POST['id_anggota'];
$jenis_kelamin    = $_POST['jenis_kelamin'];
$nama_anggota       = $_POST['nama_anggota'];
$no_telepon = $_POST['no_telepon'];
$alamat       = $_POST['alamat'];

//query update data ke dalam database berdasarkan ID
$query = "UPDATE anggota SET jenis_kelamin = '$jenis_kelamin', nama_anggota = '$nama_anggota', no_telepon = '$no_telepon', alamat = '$alamat' WHERE id_anggota= '$id_anggota'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($connection->query($query)) {
    //redirect ke halaman index.php 
    header("location: index.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>