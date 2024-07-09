<?php
$id_user = $_GET['id_user'];
$query = $koneksi->query("SELECT * FROM user WHERE id_user='$id_user'");
$hasil = $query->fetch_object();
?>
<br><center><h2>Edit Data User</h2><br>

<table width="400px">
     <tr>
          <td>
               <form action="?page=user-update" method="post">
                    <input type="text" name="id_user" value="<?= $id_user  ?>" hidden>
                    <select name="id_role_user" class="form-control mb-2 text-center">
                         <?php
                         $query = $koneksi->query("SELECT * FROM role_user");
                         while ($result = $query->fetch_object()) {
                              ?>
                              <option <?= $hasil->id_role_user == $result->id_role_user ? "selected": "";?> value="<?= $result->id_role_user ?>">
                                   <?= $result->nama_role_user ?>
                              </option>
                              <?php
                         }
                         ?>
                    </select>
                    <input class="form-control mb-2 text-center" type="text" name="nama_user" 
                    value="<?= $hasil->nama_user ?>" placeholder="Nama User">
                    <input class="form-control mb-2 text-center" type="text" name="username" 
                    value="<?= $hasil->username ?>"placeholder="Username">
                    <input class="form-control mb-1 text-center" type="password" name="password" 
                    placeholder="-- Isi Password --">
                    <div class="form-text mb-3">*Kosongkan password jika tidak diubah</div>
                    <center><button class="btn btn-success" type="submit">Simpan</button></center>
               </form>
          </td>
     </tr>
</table>
</center>
