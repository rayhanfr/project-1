<!-- Halaman Proses Delete Data Kategori Menu (kategori_menu-delete.php) -->
<?php
$id_kategori_menu = $_GET['id_kategori_menu'];

$target_lokasi = "../../assets/images/kategori_menu/";
$query = $koneksi->query("SELECT photo_kategori_menu FROM kategori_menu 
                              WHERE id_kategori_menu = '$id_kategori_menu'");
$nama_foto_lama = $query->fetch_object()->photo_kategori_menu;
unlink($target_lokasi.$nama_foto_lama);

$query_delete = $koneksi->query("DELETE FROM kategori_menu 
               WHERE id_kategori_menu = '$id_kategori_menu'");

if ($query_delete) {
     ?>
          <script>
               window.alert('Data berhasil di DELETE !');
               window.location.href='?page=kategori_menu';
          </script>
     <?php
}else{
     ?>
          <script>
               window.alert('Data gagal di DELETE !');
               window.location.href='?page=kategori_menu';
          </script>
     <?php
}
?>