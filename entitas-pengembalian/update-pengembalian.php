<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$id_pengembalian  = $_POST['id_pengembalian'];
$tanggal_pengembalian = $_POST['tanggal_pengembalian'];
$jumlah_dipinjam      = $_POST['jumlah_dipinjam'];

//query update data ke dalam database berdasarkan ID
$query = "UPDATE pengembalian SET tanggal_pengembalian = '$tanggal_pengembalian', jumlah_dipinjam = '$jumlah_dipinjam' WHERE id_pengembalian= '$id_pengembalian'";
//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($connection->query($query)) {
    //redirect ke halaman index.php 
    header("location: index.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";

}

?>