<?php
$id_menu = $_GET['id_menu'];
$query = $koneksi->query("SELECT * FROM menu JOIN kategori_menu 
                         ON menu.id_kategori_menu = kategori_menu.id_kategori_menu 
                         WHERE id_menu = '$id_menu'");
$hasil_menu = $query->fetch_object();
?>
<br><center><h2>Edit Data Menu</h2><br>
<table width="400px">
     <tr>
          <td>
          <form action="?page=menu-update" method="post">
                    <input type="text" value="<?= $hasil_menu->id_menu ?>" name="id_menu" hidden>
                    <select class="form-control mb-2" name="id_kategori_menu">
                         <option value="<?= $hasil_menu->id_kategori_menu ?>">
                              <?= $hasil_menu->nama_kategori_menu ?>
                         </option>
                    <?php
                         $select_kategori = $koneksi->query("SELECT * FROM kategori_menu");
                         while ($hasil_kategori = $select_kategori->fetch_object()) {
                    ?>
                         <option value="<?= $hasil->id_kategori_menu ?>">
                              <?= $hasil_kategori->nama_kategori_menu ?>
                         </option>
                    <?php
                         }
                    ?>
                    </select>
                    <input value="<?= $hasil_menu->nama_menu ?>" class="form-control mb-2" type="text" name="nama_menu" placeholder="Nama Menu">
                    <input value="<?= $hasil_menu->deskripsi_menu ?>" class="form-control mb-2" type="text" name="deskripsi_menu" placeholder="Deskripsi Menu">
                    <input value="<?= $hasil_menu->harga_menu ?>" class="form-control mb-2" type="number" name="harga_menu" placeholder="Harga Menu">
                    <select class="form-control mb-2" name="status_menu">
                         <option value="tersedia" <?= $hasil_menu->status_menu == 'tersedia' ? 'selected':'' ?> >
                              Tersedia
                         </option>
                         <option value="habis" <?= $hasil_menu->status_menu == 'habis' ? 'selected':'' ?> >
                              Habis
                         </option>
                    </select>
                    <center><button class="btn btn-success" type="submit">Simpan</button></center>
               </form>
          </td>
     </tr>
</table>
</center>
