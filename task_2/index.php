<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Tugas 2 Lusi Lesmana Tamba
    </title>
    
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <!--bg1 untuk background-->
    <div class="bg1">
        <!--bg2 untuk kotak ditengah background-->
        <div class="bg2">
            <div class="judul">
                <h1> Salad Sayur Fresh And Healthy</h1>
            </div>
            <style>
            table, th, td{
                border:0px solid black;
            }
            </style>
            <body>
            <table class="table" align="center">

            <tr>
                <td><img src="bound.jpg" alt="Bound Salad" width="300" height="225"></td>
                <td><img src="caesar.jpeg" alt="Caesar Salad" width="300" height="225"></td>
                <td><img src="green.jpg" alt="Green Salad" width="300" height="225"></td>
                <td><img src="vegetable.jpeg" alt="Vegetable Salad" width="300" height="225"></td>
            </tr>
            <tr>
                <td>Salad Bound (75k) </td>
                <td>Salad Caesar (100k)</td>
                <td>Salad Green (55k)</td>
                <td>Salad Vegetable (50k)</td>
            </tr>
            </table>
            <!--form untuk inputan, merujuk pada file detail yaitu tabel.php-->
            <form action="tabel.php" method="GET" class="info">
                <table class=table_form>
                <h2>Mulai Hidup Sehat Dengan Makanan Bergizi</h2>
                <style>
                table, th, td{
                    border:0px solid black;
                }
                </style>
                <body>
                <table class="table2" align="center">
                <tr>
                    <td>Nama pemesan    </td>
                    <td> <input type="text" class="isian" name="nama" placeholder="masukkan nama anda  " ></td>
                </tr>
                <tr>
                <tr>
                    <td>Kontak  </td>
                    <td> <input type="text" class="isian" name="nowa" placeholder="masukkan No. Whatsapp " ></td>
                </tr>
                <tr>
                    <td>Alamat Pengiriman   </td>
                    <td> <input type="text" class="isian" name="alamat" placeholder="Masukkan Alamat anda" ></td>
                </tr>
                <tr>
                    <td> <p>Pilih Menu </p></td>
                    <td>
                    <input type="radio" id="Bound Salad " name="menu" value="Bound Salad">
                    <label for="Bound Salad">Bound Salad</label>
                    <br>
                    <input type="radio" id="Green Salad" name="menu" value="Green Salad">
                    <label for="Green Salad">Green Salad</label>
                    <br>
                    <input type="radio" id="Caesar Salad" name="menu" value="Caesar Salad">
                    <label for="Caesar Salad">Caesar Salad</label>
                    <br>
                    <input type="radio" id="Vegetable Salad" name="menu" value="Vegetable Salad">
                    <label for="Vegetable Salad">Vegetable Salad</label>
                    </td>
                </tr>
                <tr>
                    <td>Jumlah Pesanan  </td> 
                    <td> <input type="text" class="isian" name="Jumlah" placeholder="masukkan banyaknya pesanan anda " ></td>
               
                </tr>
                <tr>
                   <td colspan="2" align="center">
                   <form action="pesanan.php" method="GET" id="Submit">
                   <input type="submit" name="tombol" value="Pesan"/>
                   </form>
                   </td>
                </tr>
            </table>
            </body>
        </div>
        <footer class="footer">
        <a href='#top'> Back to Top Page </a>
        <p>Copyright &#169 2022 - Lusi Lesmana Tamba</p>
    </footer>


                

            </body>

            
           

        



        
</body>
</html>