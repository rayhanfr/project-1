<center>
<br>
<h2>Input Data User</h2>
<br>
<table width="400px">
     <tr>
          <td>
               <form action="?page=user-store" method="post" enctype="multipart/form-data">
                    <select name="id_role_user" class="form-control mb-2 text-center">
                         <option value="">-- Pilih Role --</option>
                         <?php
                         $query = $koneksi->query("SELECT * FROM role_user");
                         while ($result = $query->fetch_object()) {
                              ?>
                                   <option value="<?= $result->id_role_user ?>">
                                        <?= $result->nama_role_user ?>
                                   </option>
                              <?php
                         }
                         ?>
                    </select>
                    <input class="form-control mb-2 text-center" type="text" name="nama_user" 
                    placeholder="Nama User">
                    <input class="form-control mb-2 text-center" type="text" name="username" 
                    placeholder="Username">
                    <input class="form-control mb-2 text-center" type="password" name="password" 
                    placeholder="Password">
                    <input class="form-control" type="file" id="profile_image" name="profile_image">
                    <center><button class="btn btn-success" type="submit">Simpan</button></center>
               </form>
          </td>
     </tr>
</table>
</center>