<?php

include 'koneksi.php';



$id_siswa = $_GET['idsis'];

    $sql= "DELETE FROM data_siswa WHERE id_siswa='$id_siswa'";
    $query = mysqli_query($connect, $sql);


    if($query){
        header('Location: interface.php');
    }
    else{
        header('Location: hapus.php?status=gagal');
    }



?>