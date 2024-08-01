<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$id_pengarang = $_POST['id_pengarang'];
$nama_pengarang   = $_POST['nama_pengarang'];
$asal_negara     = $_POST['asal_negara'];

//query update data ke dalam database berdasarkan ID
$query = "UPDATE pengarang SET nama_pengarang= '$nama_pengarang', asal_negara = '$asal_negara' WHERE id_pengarang= '$id_pengarang'";
//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($connection->query($query)) {
    //redirect ke halaman index.php 
    header("location: index.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";

}

?>