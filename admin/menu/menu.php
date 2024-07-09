<?php
include('../login/login-session-cek.php');
?>
<br>
<center><h2>Data Menu Restoran 123</h2></center>
<a href="?page=menu-create">
     <button class="btn btn-success mb-2">Tambah Menu</button>
</a>
<table class="table table-striped">
     <tr>
          <th>No</th>
          <th>Kategori Menu</th>
          <th>Nama Menu</th>
          <th>Deskripsi Menu</th>
          <th>Harga Menu</th>
          <th>Status Menu</th>
          <th>Photo Menu</th>
          <th>--</th>
     </tr>
     <?php
     $no = 1;
     $query = $koneksi->query(" SELECT * FROM menu JOIN kategori_menu 
                              ON menu.id_kategori_menu = kategori_menu.id_kategori_menu");
     while ($hasil = $query->fetch_object()) 
     {
          ?>
          <tr>
               <td><?= $no ?></td>
               <td><?= $hasil->nama_kategori_menu ?></td>
               <td><?= $hasil->nama_menu ?></td>
               <td><?= $hasil->deskripsi_menu ?></td>
               <td><?= $hasil->harga_menu ?></td>
               <td><?= $hasil->status_menu ?></td>
               <td >
                    <img width="100" class="img-fluid" src="../../assets/images/menu/<?= $hasil->photo_menu ?>" alt="gambar-kategori">
               </td>
               <td>|
                    <a style="text-decoration:none" href="?page=menu-edit&id_menu=<?= $hasil->id_menu?>">
                    <i class="fa-solid fa-pen-to-square fa-sm" style="color: #005eff;"></i>
                    </a>
                    |
                    <a style="text-decoration:none" href="?page=menu-delete&id_menu=<?= $hasil->id_menu ?>">
                         <i class="fa-solid fa-trash fa-sm" style="color: #ff0000;"></i>
                    </a>|
               </td>
          </tr>
          <?php
          $no++;
     }
     ?>
</table>
<br>
<br>