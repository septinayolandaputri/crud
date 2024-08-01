<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$tanggal_pengembalian = $_POST['tanggal_pengembalian'];
$jumlah_dipinjam = $_POST['jumlah_dipinjam'];

//query insert data ke dalam database
$query = "INSERT INTO pengembalian (tanggal_pengembalian, jumlah_dipinjam) VALUES ('$tanggal_pengembalian', '$jumlah_dipinjam')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($connection->query($query)) {

    //redirect ke halaman index.php 
    header("location: index.php");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}

?>