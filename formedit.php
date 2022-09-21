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

    <script src="https://kit.fontawesome.com/592a0f4cdf.js" crossorigin="anonymous"></script>


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
            height: 1000px;
            background-color: #697184;
            font-family: sans-serif;
            position: fixed;
            border-bottom-right-radius:40px;
            border-top-right-radius:40px ;
            top: 0;
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
       aside button{
        font-size: 15px;
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
            padding-left: 90px;
            padding-right: 15px;
            margin-top: 10px;
            /* font-size: 20px; */
            
        }

        input{
            font-size: 20px;
            padding-left: 5px;
            /* outline: solid 1px  #F8B01A; */
            border: transparent;
        }
        input:focus{
            outline: 1px #F8B01A solid;
            border: transparent;
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
        h3 label{
            /* background-color: #F8B01A; */
            color: #697184;
            font-family: 'quicksand',sans-serif;
            font-size: 30px;
            margin-right: 190px;
            margin-top: 20px;
            position: absolute;
        }
        
        span{
            color: #F8B01A;
        }


        /* Form/Table */


        form{
            box-sizing: border-box;

            position: absolute;
            width: 845px;
            height: 390px;
            left: 383px;
            top: 189px;

            border: 1px solid #000000;
            border-radius: 20px;
        }

        .nama{
            position: absolute;
            font-family: 'Quicksand';
            font-style: normal;
            font-weight: 700;
            font-size: 20px;
            line-height: 22px;
            text-align: center;
        }
        .in{
            box-sizing: border-box;
            position: absolute;
            /* border: 1px solid #000000; */
        }

        /* baris1 */
        .id{
            width: 80px;
            height: 23px;
            left: 90px;
            top: 25px;
            
        }
        .semcol1{
            width: 80px;
            height: 23px;
            left: 170px;
            top: 25px;
        }
        .idsis{
            border: 1px solid #000000;
            width: 540px;
            height: 30px;
            left: 220px;
            top: 20px;
            border-radius: 5px;   

        }
        /* baris2 */
        .siswa{
            width: 80px;
            height: 23px;
            left: 90px;
            top: 85px;
        }
        .semcol2{
            width: 80px;
            height: 23px;
            left: 170px;
            top: 85px;
        }
        .sis input{
            border: 1px solid #000000;
            width: 540px;
            height: 30px;
            margin-left: 220px;
            margin-top: 75px;
            border-radius: 5px; 
            padding: 5px; 
            position: absolute; 

        }
        /*baris 3  */
        .kelas{
            width: 80px;
            height: 23px;
            left: 90px;
            top: 145px;
        }
        .semcol3{
            width: 80px;
            height: 23px;
            left: 170px;
            top: 145px;
        }
        .kel input{
            border: 1px solid #000000;
            width: 540px;
            height: 30px;
            margin-left: 220px;
            margin-top: 135px;
            border-radius: 5px; 
            padding: 5px;  
            position: absolute;
            /* z-index: 1; */

        }
        
        /* baris 4 */
        .jurusan{
            width: 80px;
            height: 23px;
            left: 90px;
            top: 215px;
        }
        .semcol4{
            width: 80px;
            height: 23px;
            left: 170px;
            top: 215px;
        }
        .jur input{
            border: 1px solid #000000;
            width: 540px;
            height: 30px;
            margin-left: 220px;
            margin-top: 200px;
            border-radius: 5px; 
            padding: 5px;  
            position: absolute;

        }
        
        /* button */

        .btn{
            margin-top: 300px;
            margin-left: 620px;
            /* box-sizing: border-box; */
            font-size: 20px;
        }
        .btn a{
            color: white;
            font-family: 'Quicksand',sans-serif;
            font-weight: 600;
            letter-spacing: 1px;
        }
        .btn button{
            border: none;
            background-color: #697184;
            border-radius: 5px;
            padding: 10px;
            width: 70px;
            font-size: 20px;
            /* color:white;  */
        }
        .btn input{
            border: none;
            background-color:#F8B01A;
            border-radius: 5px;
            padding: 10px;
            width: 70px;
            font-size: 20px;
            color: white;
            font-family: 'Quicksand',sans-serif;
            font-weight: 600;
            letter-spacing: 1px; 
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
    <h3><label for="">Edit Data Siswa</label></h3>
    <div class="Right">

        <form action="edit.php" method="post">
            <table>
                <tr>
                    <td class="nama siswa">Nama</td>
                    <td class="nama semcol2">:</td>
                    <td class="in sis"><Label><input value="<?php echo $sis['nama']?>" required="required" type="text" name="nama"></Label></td>
                </tr>
                <tr>
                    <td class="nama kelas">Kelas</td>
                    <td class="nama semcol3">:</td>
                    <td class="in kel"><Label><input value="<?php echo $sis['kelas']?>" required="required" type="text" name="kelas"></label></td>
                </tr>
                <tr>
                    <td class="nama jurusan">Jurusan</td>
                    <td class="nama semcol4">:</td>
                    <td class="in jur"><Label><input value="<?php echo $sis['jurusan']?>" required="required" type="text" name="jurusan"></Label></td>
            </tr>
    </table>
    <div class="btn">     
        <input type="submit" name="edit" value="Edit" onclick="return confirm('apakah anda yakin ingin mengubah data tersebut?')">
        <button><a href="interface.php"> Back</button></a>
    </div>
</form>
    </div>
</body>
</html>