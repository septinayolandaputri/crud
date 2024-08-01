<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$nama_buku = $_POST['nama_buku'];
$tahun_penerbit = $_POST['tahun_penerbit'];


//query insert data ke dalam database
$query = "INSERT INTO buku (nama_buku, tahun_penerbit) VALUES ('$nama_buku', '$tahun_penerbit')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($connection->query($query)) {

    //redirect ke halaman index.php 
    header("location: index.php");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}

?>