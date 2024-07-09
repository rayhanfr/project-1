<?php
$id_user       = $_POST['id_user'];
$id_role_user  = $_POST['id_role_user'];
$nama_user     = $_POST['nama_user'];
$username      = $_POST['username'];
$password      = $_POST['password'];

if ($password == "") {
     $query_update = $koneksi->query("UPDATE user SET 
                                        id_role_user   = '$id_role_user',
                                        nama_user      = '$nama_user',
                                        username       = '$username'
                                        WHERE id_user  = '$id_user'
                               ");
}else{
     $password = password_hash($password, PASSWORD_BCRYPT);
     $query_update = $koneksi->query("UPDATE user SET 
                                        id_role_user   = '$id_role_user',
                                        nama_user      = '$nama_user',
                                        username       = '$username',
                                        password       = '$password'
                                        WHERE id_user  = '$id_user'
                               ");
}


if ($query_update) {
     ?>
          <script>
               window.alert('Data berhasil diupdate');
               window.location.href='?page=user';
          </script>
     <?php
}else{
     ?>
          <script>
               window.alert('Data gagal diupdate');
               window.location.href='?page=user';
          </script>
     <?php
}
?>