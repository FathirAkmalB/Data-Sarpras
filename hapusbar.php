<?php

include 'koneksi.php';



$id = $_GET['idbar'];

    $sql= "DELETE FROM data_barang WHERE id='$id'";
    $query = mysqli_query($connect, $sql);


    if($query){
        header('Location: tampilbar.php');
    }
    else{
        header('Location: hapusbar.php?status=gagal');
    }



?>