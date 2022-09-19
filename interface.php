<?php
    include 'koneksi.php' ;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pelanggan</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Quicksand&family=Roboto:wght@100;300;500&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" href="style.css"> -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@600&family=Lobster&family=Quicksand&family=Roboto:wght@100;300;500&display=swap" rel="stylesheet">
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            text-decoration: none;
        }
        aside{
           
            width: 300px;
            height: 1000px;
            background-color: #697184;
            font-family: sans-serif;
            position: fixed;
        }
        .kanan{
            float: right;
        }
        h3{
            font-size: 40px;
            text-align: center;
            margin-top: 20px;
            color: white;
            font-family: 'jost',sans-serif;
        }
        span{
            color: #F8B01A;
        }
        .dasis{
            margin-left: 0;
        }
        .dabar button{
            text-align: center;
            font-family: 'jost', sans-serif;
            list-style: none;
            color: white;
            background-color: #697184;
            border-bottom-right-radius: 14px;
            border-top-right-radius: 14px;
            border: none;
            padding: 5px;
            padding-left: 90px;
            padding-right: 15px;
            margin-top: 10px;
            font-size: 20px;
        }
        .dasis button{
            text-align: center;
            font-family: 'jost', sans-serif;
            list-style: none;
            color: white;
            background-color: #F8B01A;
            border-bottom-right-radius: 14px;
            border-top-right-radius: 14px;
            border: none;
            padding: 5px;
            padding-left: 90px;
            padding-right: 15px;
            margin-top: 40px;
            font-size: 20px;
       }
        table{
            font-family: 'Quicksand', sans-serif;
            border-color: #697184;
            /* padding: 15px; */
            margin-top: 40px;
            margin-right: 90px;
            width: 900px;
            text-align: center;
            position: relative;
        }
        

        th{
            background-color: #697184;
            padding: 10px;
            color: white;
        }
        td{
            padding: 10px;
        }
        h3 label{
            /* background-color: #F8B01A; */
            color: #697184;
            font-family: 'quicksand',sans-serif;
            font-size: 30px;
            margin-right: 90px;
            /* margin-top: 900px; */
        }
        .kanan label{
            margin-top: 40px;
            font-weight: 800;
            float: left;
        }
        .kanan button{
            margin-top: 110px;
            margin-right: 900px;
            /* margin-right: 200px; */
            padding: 7px;

            border-radius: 15px;
            color: white;
            font-family: 'jost', sans-serif;
            background-color: #F8B01A;
            border: none;
            padding-left: 25px;
            padding-right: 25px;
        }

        td a{
            padding: 10px;
            width: 60px;
            /* background-color: #F8B01A; */
        }
        td :last-child{
            background-color:#697184;
            padding-top: 6px;
            padding-bottom: 6px;
            padding-left: 20px;
            padding-right: 20px;
            border: none;
            border-radius: 10px;
            width: 70px;
            color: white;
            /* width: ; */
        }
        td a:first-child{
            background-color: #F8B01A;
            padding-top: 6px;
            padding-bottom: 6px;
            padding-left: 20px;
            padding-right: 20px;
            border: none;
            border-radius: 10px;
            width: 70px;
            color: white;
            /* width: 70px; */
        }

    </style>
</head>
<body>
    <aside>
        <h3>Star<span>BY</span></h3>
        <div>
            <div class="dasis">
                <a href="interface.php"><button>Data Siswa</button></a>
            </div>
            <div class="dabar">
                <a href="tampilbar.php"><button>Data Barang</button></a>
            </div>
        </div>
    </aside>
    <div class="kanan">
    <h3><label for=""> Data Siswa</label></h3> 
    <button><a href="user.html">Create</a></button>
    <table border="1" cellpadding='10' cellspacing='0'>
        <tr>
            <th>No</th>
            <th>Id Siswa</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Jurusan</th>
            <th>Action</th>
        </tr>
        <?php
        $sql = "SELECT * FROM data_siswa";
        $query = mysqli_query ($connect,$sql);
        $no= 1;
        while ($sis = mysqli_fetch_array($query)){
        echo " 
            <tr>
            <td>$no</td>
            <td>$sis[id_siswa]</td>
            <td>$sis[nama]</td>
            <td>$sis[kelas]</td>
            <td>$sis[jurusan]</td>
            <td>
                <a href='formedit.php?idsis=".$sis['id_siswa']."'>Edit</a>
                <a href='hapus.php?idsis=".$sis['id_siswa']."' onClick=\" return confirm('apakah anda yakin ingin menghapus data ini?');\">Hapus</a>
            </td>
            </tr>
        ";
        $no++;
            }
        ?>
    </table>
    </div>
</body>
</html>