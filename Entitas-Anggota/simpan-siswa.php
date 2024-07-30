<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$jenis_kelamin = $_POST['jenis_kelamin'];
$nama_anggota = $_POST['nama_anggota'];
$no_telepon = $_POST['no_telepon'];
$alamat = $_POST['alamat'];

//query insert data ke dalam database
$query = "INSERT INTO anggota (jenis_kelamin, nama_anggota, no_telepon, alamat) VALUES ('$jenis_kelamin','$nama_anggota', '$no_telepon','$alamat')";
var_dump($query);

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($connection->query($query)) {

    //redirect ke halaman index.php 
    header("location: index.php");

} else {
    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}

?>