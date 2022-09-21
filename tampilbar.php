<?php
    include 'koneksi.php' ;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Barang</title>
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- google font -->
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
            box-shadow: 2px 2px 12px rgb(0, 0, 0, 0.2);

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
        .dabar button{
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
            margin-top: 10px;
            /* font-size: 20px; */
       }
        .dasis button{
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
            margin-top: 40px;
            /* font-size: 20px; */
 
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
    <img src="" alt="">
    <div class="kanan">
    <h3><label for=""> Data Barang</label></h3> 
    <button><a href="barang.html" class="create">Create</a></button>
    <table border="1" cellpadding='10' cellspacing='0'>
        <tr>
            <th>No</th>
            <th>ID Barang</th>
            <th>Kode Jenis</th>
            <th>Nama Barang</th>
            <th>Jenis Barang</th>
            <th>Stok</th>
            <th>Action</th>
        </tr>
        <?php
        $sql = "SELECT * FROM data_barang";
        $query = mysqli_query ($connect,$sql);
        $no= 1;
        while ($bar = mysqli_fetch_array($query)){
        echo " 
            <tr>
            <td>$no</td>
            <td>$bar[id]</td>
            <td>$bar[kode_jenis]</td>
            <td>$bar[nama_barang]</td>
            <td>$bar[jenis_barang]</td>
            <td>$bar[stok]</td>
            <td>
                <a href='formeditbar.php?idbar=".$bar['id']."' class=\"edit\">Edit</a>
                <a href='hapusbar.php?idbar=".$bar['id']."'class=\"hapus\" onClick=\" return confirm('apakah anda yakin ingin menghapus data ini?');\">Hapus</a>
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