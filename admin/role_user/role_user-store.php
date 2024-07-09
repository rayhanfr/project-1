<?php
     $nama_role_user    = $_POST['nama_role_user'];
     $query = $koneksi->query("INSERT INTO role_user VALUES('','$nama_role_user')");
     if ($query) 
     {
          ?>
               <script>
                    window.alert('Data berhasil disimpan!');
                    window.location.href='?page=role_user';
               </script>
          <?php
     }
     else
     {
          ?>
               <script>
                    window.alert('Data gagal disimpan!');
                    window.location.href='?page=role_user-create';
               </script>
          <?php
     }
?>