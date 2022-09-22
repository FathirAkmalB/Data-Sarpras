<?php
include 'koneksi.php';

if(isset($_POST['edit'])){
    $id = $_POST['id'];
    $kode_jenis = $_POST['kode_jenis'];
    $nama_barang = $_POST['nama_barang'];
    $jenis_barang = $_POST['jenis_barang'];
    $stok = $_POST['stok'];


    $sql = "UPDATE data_barang SET id = '$id', kode_jenis = '$kode_jenis', nama_barang = '$nama_barang', jenis_barang = '$jenis_barang', stok = '$stok' WHERE data_barang . id = '$id'";

    $query = mysqli_query($connect, $sql);
    if($query){
        header('Location: tampilbar.php');
    }
    else{
        header('Location: simpanbar.php?status=gagal');
    }
}
?>