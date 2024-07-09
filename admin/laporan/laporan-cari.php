<?php
$tgl_awal = $_POST['tgl_awal'];
$tgl_akhir = $_POST['tgl_akhir'];

// Query select untuk menampilkan semua transaksi berdasarkan tanggal awal dan akhir
$query_select_tr = $koneksi->query("SELECT * FROM transaksi JOIN user ON transaksi.id_user = user.id_user WHERE waktu_transaksi 
                                   BETWEEN '$tgl_awal 00:00:00' AND '$tgl_akhir 23:59:59' ");

// Menghitung jumlah transaksi dari hasil query select transaksi berdasarkan tanggal awal dan akhir
$jumlahTransaksi = mysqli_num_rows($query_select_tr);

// Query SUM mengitung total Grand Total Harga berdasarkan tanggal awal dan akhir
$query_select_sum = $koneksi->query("SELECT SUM(grand_total_harga) AS totalPendapatan FROM transaksi WHERE waktu_transaksi 
                                   BETWEEN '$tgl_awal 00:00:00' AND '$tgl_akhir 23:59:59'
");
$totalPendapatan = $query_select_sum->fetch_object()->totalPendapatan;
?>
<br> 
<center>
     <img width="5%" src="../../assets/image/logo.png" alt="logo-resto-mawar">
     <p><span style="font-size: xx-large;">Resto Mawar</span>
     <br>Laporan Transaksi Penjualan<br>Periode <?= $tgl_awal ?> - <?= $tgl_akhir ?></p>
     <a href="../laporan/laporan-print.php?tgl_awal=<?= $tgl_awal ?>&tgl_akhir=<?= $tgl_akhir ?>" target="_blank">
          <button class="btn btn-secondary">Print</button>
     </a>
</center>
<br>
<table>
     <tr>
          <td>Total Pendapatan</td> <td> : Rp. <?= number_format($totalPendapatan,2,",",".") ?> <td>
     </tr>
     <tr>
          <td>Jumlah Transaksi</td> <td> : <?=$jumlahTransaksi ?> Transaksi <td>
     </tr>
</table>
<br>
<table class="table table-striped">
     <tr>
          <td>No</td>
          <td>Waktu Transaksi</td>
          <td>Nomor Invoice</td>
          <td>Grand Total Harga</td>
          <td>Nama Pembeli</td>
          <td>Satus Transaksi</td>
     </tr>
     <?php
  
     $no = 1;
     while ($hasil_select_tr = $query_select_tr->fetch_object()) {
     ?>
     <tr>
          <td><?= $no ?></td>
          <td><?= $hasil_select_tr->waktu_transaksi ?></td>
          <td><?= $hasil_select_tr->nomor_transaksi ?></td>
          <td>Rp. <?= number_format($hasil_select_tr->grand_total_harga,2,",",".") ?></td>
          <td><?= $hasil_select_tr->nama_pembeli ?></td>
          <td><?= $hasil_select_tr->status_transaksi ?></td>
     </tr>
     <?php
     $no++;
     }
     ?>
     <tr>
          <td colspan="3" style="text-align: right;"><h4>Total Pendapatan</h4></td>
          <td colspan="2"><h4>Rp. <?= number_format($totalPendapatan,2,",",".") ?></h4></td>
          <td colspan="2"></td>
     </tr>
</table>
<style>
     .ttd-petugas{
          float: right;
          text-align: left;
          width: 250px;
     }
</style>
<div class="ttd-petugas">
     <p>
          Bekasi, <?= date("d M Y"); ?><br>
          <?php echo $_SESSION['role'] ?> 
          <br><br><br>
          <?php echo $_SESSION['nama_user'] ?> 
     </p>
</div>