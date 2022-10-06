<?php
$nama= $_GET["nama"];
$nowa = $_GET["nowa"];
$alamat = $_GET["alamat"];
$menu = $_GET["Bound Salad"]."-".$_GET["Green Salad"]."-".$_GET["Caesar Salad"]."-".$_GET["Vegetables Salad"];
$jumlah = $_GET["gender"]
?> 

<!DOCTYPE html>
<html lang="en">
    <style>
    </style>

    <head>
        <meta charset="uft-8">
        <meta name="viewpoint" content="width-device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">
        <title>
            Tugas Minggu 5 Lusi Lesmana Tamba
        </title>
        <!--link untuk menaukan css file-->
        <link rel="stylesheet" type="text/css" href="style_p.css">
    </head>


    <body>
        <!--konteiner untuk background-->
        <div class="Container"><br>
        <h2 class="judul">Daftar Pesanan </h2>

        <!--bagian tabel-->
        <div class="tabel">

        <!--tabel yang digunakan-->
        <table>

          <!--baris header-->
          <tr>
            <th>Nama</th>
            <th>Kontak</th>
            <th>Alamat</th>
            <th>Pesanan </th>
            <th>Jumlah </th>
          </tr>

          <!--baris palsu agar terlihat sebagai data yang sudah ada-->
          <tr>
            <td>Frans</td>
            <td>0822456787644</td>
            <td>jln.surabaya no.2</td>
            <td>Bound Salad</td>
            <td>2</td>
          </tr>

          <!--baris palsu agar terlihat sebagai data yang sudah ada-->
          <tr>
            <td>Restina</td>
            <td>081367892354</td>
            <td>Jln.Parongil no. 14</td>
            <td>Vegetable Salad</td>
            <td>1</td>
          </tr>

          <!--baris palsu agar terlihat sebagai data yang sudah ada-->
          <tr>
            <td>Lusi Tamba</td>
            <td>081348703928</td>
            <td>Jln.Husein Hamzah No. 13</td>
            <td>Caesar Salad</td>
            <td>3</td>
          </tr>

          <!--baris akan menampilkan isi variabel yang telah mengkap data dari variabl get-->
          <tr>
            <td><?= $nama?></td>
            <td><?=$nowa;?></td>
            <td><?=$alamat;?></td>
            <td><?=$menu?></td>
            <td><?=$jumlah;?></td>
          </tr>
          
        </table>
        </div>
        </div>
     
        
    </body>
    
    </html>