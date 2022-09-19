<?php

include 'koneksi.php';



if(isset($_POST['save'])){
    $id_siswa = $_POST ['id_siswa'];
    $nama = $_POST ['nama'];
    $kelas = $_POST ['kelas'];
    $jurusan = $_POST ['jurusan'];

    $sql= "INSERT INTO data_siswa (id_siswa, nama, kelas, jurusan) VALUES ('$id_siswa','$nama','$kelas','$jurusan')";
    $query = mysqli_query($connect, $sql);


    if($query){
        header('Location: interface.php');
    }
    else{
        header('Location: simpan.php?status=gagal');
    }
}


?>