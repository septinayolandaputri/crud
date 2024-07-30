<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$nama_buku = $_POST['nama_buku'];
$tanggal_peminjaman = $_POST['tanggal_peminjaman'];
$tanggal_pengembalian = $_POST['tanggal_pengembalian'];

//query insert data ke dalam database
$query = "INSERT INTO peminjaman (nama_buku, tanggal_peminjaman, tanggal_pengembalian) VALUES ('$nama_buku', '$tanggal_peminjaman', '$tanggal_pengembalian')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($connection->query($query)) {

    //redirect ke halaman index.php 
    header("location: index.php");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}

?>