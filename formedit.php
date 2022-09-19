<?php

include 'koneksi.php';


$id_siswa = $_GET['idsis'];
$sql = "SELECT * FROM data_siswa WHERE id_siswa ='$id_siswa'";
$query= mysqli_query($connect,$sql);
$sis = mysqli_fetch_assoc($query);

if(mysqli_num_rows($query) < 1){
    die("Data tidak ditemukan");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Siswa</title>
</head>
<body>
    <form action="edit.php" method="post">
        <h3>Edit Data Siswa</h3>
        <table>
        <tr>
            <td>Id Siswa</td>
            <td>:</td>
            <td><Label><input value="<?php echo $sis['id_siswa']?>" required="required" type="hidden" name="id_siswa"></Label></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><Label><input value="<?php echo $sis['nama']?>" required="required" type="text" name="nama"></Label></td>
                </tr>
            <tr>
                <td>Kelas</td>
                <td>:</td>
                <td><Label><input value="<?php echo $sis['kelas']?>" required="required" type="text" name="kelas"></label></td>
            </tr>
            <tr>
                <td>Jurusan</td>
                <td>:</td>
                <td><Label><input value="<?php echo $sis['jurusan']?>" required="required" type="text" name="jurusan"></Label></td>
            </tr>
    </table>
    <input type="submit" name="edit" value="edit" onclick="return confirm('apakah anda yakin ingin mengubah data tersebut?')">
</form>
</body>
</html>