<?php
include('../login/login-session-cek.php');
?>
<br>
<center><h2>Transaksi</h2></center>
<!-- <a href="?page=transaksi-create">
     <button class="btn btn-success mb-2">Tambah Transaksi</button>
</a> -->
<!-- Button trigger modal -->
<button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Tambah Transaksi
</button>

<table class="table table-striped">
     <tr>
          <th>No</th>
          <th>Waktu Transaksi</th>
          <th>No. Invoice</th>
          <th>Grand Total Harga</th>
          <th>Nama Pembeli</th>
          <th>Petugas Kasir</th>
          <th>Status Transaksi</th>
          <th width="10%">--</th>
     </tr>
     <?php
     $no = 1;
     $query_select_tr = $koneksi->query(" SELECT * FROM transaksi 
                              JOIN user ON transaksi.id_user = user.id_user
                              ");
     while ($hasil_select_tr = $query_select_tr->fetch_object()) 
     {
          ?>
          <tr>
               <td><?= $no ?></td>
               <td><?= $hasil_select_tr->waktu_transaksi ?></td>
               <td><?= $hasil_select_tr->nomor_transaksi ?></td>
               <td>Rp. <?= number_format($hasil_select_tr->grand_total_harga,2,".",",") ?></td>
               <td><?= $hasil_select_tr->nama_pembeli ?></td>
               <td><?= $hasil_select_tr->nama_user ?></td>
               <td><?= $hasil_select_tr->status_transaksi ?></td>
               <td>
               <?php
               if ($hasil_select_tr->status_transaksi == 'selesai') {
                    ?>
                    <a target="_blank" style="text-decoration: none;" href="../assets/invoice/index.php?&id_transaksi=<?= $hasil_select_tr->id_transaksi ?>">
                         <button class="btn btn-sm btn-primary">Print</button>
                    </a>
                    <a style="text-decoration: none;" href="?page=transaksi_detail-show&id_transaksi=<?= $hasil_select_tr->id_transaksi ?>">
                         <button class="btn btn-sm btn-secondary">Detail</button>
                    </a>
                    <?php
               }else {
                    ?>
                    <a style="text-decoration: none;" href="?page=transaksi_detail-create&nomor_transaksi=<?= $hasil_select_tr->nomor_transaksi ?>">
                         <button class="btn  btn-sm"><i class="fa-solid fa-share" style="color: #f0e800;"></i></button>
                    </a>
                    <?php
               }
               ?>
               </td>
          </tr>
          <?php
          $no++;
     }
     ?>
</table>
<br>
<br>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Input Nama Pembeli</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
<form action="?page=transaksi-store" method="post">
<input style="text-align:center;" type="text" class="form-control" name="nama_pembeli" placeholder="Input Nama Pembeli"> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
</form>
      </div>
    </div>
  </div>
</div>