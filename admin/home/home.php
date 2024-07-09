<?php
$querySelectMenu = $koneksi->query("SELECT * FROM menu");
$hitungSelectMenu = mysqli_num_rows($querySelectMenu);

$querySelectTransaksi = $koneksi->query("SELECT * FROM transaksi WHERE status_transaksi = 'selesai'");
$hitungSelectTransaksiSelesai = mysqli_num_rows($querySelectTransaksi);

$querySelectTransaksi = $koneksi->query("SELECT * FROM transaksi WHERE status_transaksi = 'onproses'");
$hitungSelectTransaksiOnproses = mysqli_num_rows($querySelectTransaksi);
?>
<center>
     <br>
     <h2>Selamat Datang <?= $_SESSION['nama_user'] ?></h2><br>
     <div class="row">
          <div class="col">
               <div class="card text-bg-light mb-3" style="max-width: 18rem;">
                    <div class="card-header text-bg-secondary">Menu Tersedia</div>
                    <div class="card-body">
                    <h2 class="card-title"><?= $hitungSelectMenu ?></h2>
                    <hr>
                    <p class="card-text">
                         <a class="nav-link link-primary" href="">Click here for detail</a>
                    </p>
                    </div>
               </div>
          </div>
          <div class="col">
               <div class="card text-bg-light mb-3" style="max-width: 18rem;">
                    <div class="card-header text-bg-warning">Transaksi On Proses</div>
                    <div class="card-body">
                    <h2 class="card-title"><?= $hitungSelectTransaksiOnproses ?></h2>
                    <hr>
                    <p class="card-text">
                         <a class="nav-link link-primary" href="">Click here for detail</a>
                    </p>
                    </div>
               </div>
          </div>
          <div class="col">
               <div class="card text-bg-light mb-3" style="max-width: 18rem;">
                    <div class="card-header text-bg-success">Transaksi Selesai</div>
                    <div class="card-body">
                    <h2 class="card-title"><?= $hitungSelectTransaksiSelesai  ?></h2>
                    <hr>
                    <p class="card-text">
                         <a class="nav-link link-primary" href="">Click here for detail</a>
                    </p>
                    </div>
               </div>
          </div>
     </div>
</center>