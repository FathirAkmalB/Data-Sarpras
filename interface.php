<?php
    include 'koneksi.php' ;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
    <!-- Font Awesome -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <script src="https://kit.fontawesome.com/592a0f4cdf.js" crossorigin="anonymous"></script>

    <!-- Google Font -->
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
            width: 200px;
            height: 660px;
            background-color: #697184;
            font-family: sans-serif;
            position: fixed;
            border-bottom-right-radius:35px;
            border-top-right-radius:35px ;
        }
        .kanan{
            float: right;
        }
        .edit{
            font-size: 14px;
            /* right: 15px; */
            /* background-color: ; */
        }
        .hapus{
            font-size: 14px;
        }
        .create{
            color: white;
            padding: 1em;
            font-size: 15px;
            letter-spacing: 1px;
        }
        h3{
            font-size: 35px;
            text-align: center;
            margin-top: 20px;
            color: white;
            font-family: 'jost',sans-serif;
            /* background-color: aqua; */
        }
        span{
            color: #F8B01A;
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
            left: 40px;
            box-shadow: 5px 5px 8px rgb(0, 0, 0, 0.2);

        }
        tr:nth-child(odd){
            background-color: darkgray;
        }
        
        th{
            background-color: #697184;
            padding: 8px;
            color: white;
        }
        td{
            padding: 9px;
        }
        
        aside button{
            font-size: 15px;
        }
        .dasis button{
            text-align: center;
            font-family: 'Jost', sans-serif;
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
            /* font-size: 20px; */
       }
        .dabar button{
            text-align: center;
            font-family: 'jost', sans-serif;
            list-style: none;
            color: white;
            background-color: transparent;
            border-bottom-right-radius: 14px;
            border-top-right-radius: 14px;
            border: none;
            padding: 5px;
            padding-left: 100px;
            padding-right: 15px;
            margin-top: 10px;
            /* font-size: 20px; */
            /* cursor: pointer; */
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
            margin-left: 40px;
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

        form{
            position: absolute;
            display: flex;
            margin-left: 400px;
        }
        .put{
            height: 33px;
            margin-top: 113px;
            border-radius: 10px;
            margin-left: 180px;
        }

    </style>
</head>
<body>
    <aside>
        <h3>Star<span>BY</span></h3>
        <div class="nav">
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
    <button><a href="user.html" class="create">Create</a></button>
    <table border="1" cellpadding='10' cellspacing='0'>
        <tr>
            <th>No</th>
            <th>ID Siswa</th>
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
                <a href='formedit.php?idsis=".$sis['id_siswa']."' class=\"edit\">Edit</a>
                <a href='hapus.php?idsis=".$sis['id_siswa']."'class=\"hapus\" onClick=\" return confirm('apakah anda yakin ingin menghapus data ini?');\">Hapus</a>
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