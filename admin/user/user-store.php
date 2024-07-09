<?php
     $id_role_user  = $_POST['id_role_user'];
     $nama_user     = $_POST['nama_user'];
     $username      = $_POST['username'];
     $password      = password_hash($_POST['password'], PASSWORD_BCRYPT);

     $profile_image = $_FILES['profile_image']['name'];
     $target_path = "../../assets/images/foto_user/"; // folder tempat simpan gambar

     //Pindahkan gambar yang diunggah Ke folder fotonya

     move_uploaded_file($_FILES['profile_image']['tmp_name'], $target_path . $profile_image);

     $query = $koneksi->query("INSERT INTO user 
                              VALUES('','$id_role_user','$nama_user','$username','$password','$profile_image')"); //
     if ($query) 
     {
          ?>
               <script>
                    window.alert('Data berhasil disimpan!');
                    window.location.href='?page=user';
               </script>
          <?php
     }
     else
     {
          ?>
               <script>
                    window.alert('Data gagal disimpan!');
                    window.location.href='?page=user-create';
               </script>
          <?php
     }
?>