<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$id_buku  = $_POST['id_buku'];
$nama_buku    = $_POST['nama_buku'];
$tahun_penerbit      = $_POST['tahun_penerbit'];

//query update data ke dalam database berdasarkan ID
$query = "UPDATE buku SET nama_buku = '$nama_buku', tahun_penerbit = '$tahun_penerbit' WHERE id_buku= '$id_buku'";
//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($connection->query($query)) {
    //redirect ke halaman index.php 
    header("location: index.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";

}

?>