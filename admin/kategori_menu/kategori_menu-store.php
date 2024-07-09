<!-- Halaman Proses Insert Data Kategori Menu (kategori_menu-store.php) -->

<?php
     $nama_kategori_menu = $_POST['nama_kategori_menu'];
     $nama_foto          = $_FILES['photo_kategori_menu']['name'];

     // Folder tempat penyimpanan gambar foto
     $target_lokasi      ="../../assets/images/kategori_menu/";

     // Pindahkan gambar yang diupload ke lokasi tujuan
     move_uploaded_file($_FILES['photo_kategori_menu']['tmp_name'],$target_lokasi.$nama_foto);

     $query = $koneksi->query("INSERT INTO kategori_menu VALUES('','$nama_kategori_menu','$nama_foto')");
     if ($query) 
     {
          ?>
               <script>
                    window.alert('Data berhasil disimpan!');
                    window.location.href='?page=kategori_menu';
               </script>
          <?php
     }
     else
     {
          ?>
               <script>
                    window.alert('Data gagal disimpan!');
                    window.location.href='?page=kategori_menu-create';
               </script>
          <?php
     }
?>