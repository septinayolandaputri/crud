<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$nama_penerbit = $_POST['nama_penerbit'];
$asal_negara = $_POST['asal_negara'];


//query insert data ke dalam database
$query = "INSERT INTO penerbit (nama_penerbit, asal_negara) VALUES ('$nama_penerbit', '$asal_negara')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($connection->query($query)) {

    //redirect ke halaman index.php 
    header("location: index.php");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}

?>