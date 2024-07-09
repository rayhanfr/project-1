<!-- Halaman View Form Insert Data Kategori Menu (kategori_menu-create.php) -->

<center>
<br>
<h2>Input Katagori Menu</h2>
<br>
<table width="400px">
     <tr>
          <td>
               <form action="?page=kategori_menu-store" method="post" enctype="multipart/form-data">

                    <input class="form-control mb-2" type="text" name="nama_kategori_menu" 
                    placeholder="Nama Kategori Menu">

                    <input class="form-control" type="file" name="photo_kategori_menu">
                    <div class="text-form mb-3">*Masukan File Gambar</div>

                    <div class="d-grid">
                         <button class="btn btn-success" type="submit">Simpan</button>
                    </div>

               </form>
          </td>
     </tr>
</table>
</center>