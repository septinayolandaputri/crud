<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$id_peminjaman  = $_POST['id_peminjaman'];
$nama_buku    = $_POST['nama_buku'];
$tanggal_peminjaman      = $_POST['tanggal_peminjaman'];
$tanggal_pengembalian = $_POST['tanggal_pengembalian'];

//query update data ke dalam database berdasarkan ID
$query = "UPDATE peminjaman SET nama_buku = '$nama_buku', tanggal_peminjaman = '$tanggal_peminjaman', tanggal_pengembalian = '$tanggal_pengembalian' WHERE id_peminjaman= '$id_peminjaman'";
//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($connection->query($query)) {
    //redirect ke halaman index.php 
    header("location: index.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";

}

?>