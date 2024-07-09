<?php
include("config/koneksi.php");
if (isset($_GET['nama_kategori_menu'])) 
{
     $nama_kategori_menu =  $_GET['nama_kategori_menu'];
     $query = $koneksi->query("SELECT * FROM menu JOIN kategori_menu ON menu.id_kategori_menu = kategori_menu.id_kategori_menu
                              WHERE kategori_menu.nama_kategori_menu = '$nama_kategori_menu'");
     while ($result = $query->fetch_object()) {
          ?>
          <!DOCTYPE html>
          <html lang="en">
               <head>
                    <meta charset="UTF-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <title>Document</title>
               </head>
               <body>
                    Nama Menu : <?= $result->nama_menu ?> <br>
                    Deskripsi Menu : <?= $result->deskripsi_menu ?> <br>
                    Harga Menu : <?= $result->harga_menu ?> <br>
                    Status Menu : <?= $result->status_menu ?> <br>
                    </body>
          </html>
          <?php
     }
}else{
     header("Location:index.php");
     exit();
}
?>