<?php

include 'koneksi.php';



if(isset($_POST['save'])){
    $id = $_POST['id'];
    $kode_jenis = $_POST ['kode_jenis'];
    $nama_barang = $_POST ['nama_barang'];
    $jenis_barang = $_POST ['jenis_barang'];
    $stok = $_POST ['stok'];

    $sql= "INSERT INTO data_barang (id, kode_jenis, nama_barang, jenis_barang, stok) VALUES ('$id','$kode_jenis','$nama_barang','$jenis_barang','$stok')";
    $query = mysqli_query($connect, $sql);


    if($query){
        header('Location: tampilbar.php');
    }
    else{
        header('Location: simpanbar.php?status=gagal');
    }
}


?>