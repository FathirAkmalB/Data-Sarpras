<?php
include 'koneksi.php';

if(isset($_POST['ubah'])){
    $id_siswa = $_POST['id_siswa'];
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $jurusan = $_POST['jurusan'];


    $sql = "UPDATE data_siswa SET id_siswa = '$id_siswa', nama = '$nama', kelas = '$kelas', jurusan = '$jurusan' WHERE id_siswa = '$id_siswa'";

    $query = mysqli_query($connect, $sql);
    if($query){
        header('Location: interface.php');
    }
    else{
        header('Location: simpan.php?status=gagal');
    }
}
?>