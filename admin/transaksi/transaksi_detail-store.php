<?php
$nomor_transaksi = $_POST['nomor_transaksi'];

$query_select_transaksi = $koneksi->query("SELECT * FROM transaksi WHERE nomor_transaksi='$nomor_transaksi'");
$id_transaksi           = $query_select_transaksi->fetch_object()->id_transaksi ;

$id_menu           = $_POST['id_menu'];
$query_select_menu = $koneksi->query("SELECT * FROM menu WHERE id_menu='$id_menu'");
$harga_menu = $query_select_menu->fetch_object()->harga_menu ;

$jumlah_menu   = $_POST['jumlah_menu'];

$total_harga   = $harga_menu * $jumlah_menu ;

$query_count_dt = $koneksi->query("SELECT COUNT(*) AS cek_menu FROM detail_transaksi
                    WHERE id_transaksi = '$id_transaksi' AND id_menu = '$id_menu' ") ;
$hasil_count_dt = $query_count_dt->fetch_object()->cek_menu;

if ($hasil_count_dt > 0) {
     ?>
          <script>
               window.alert('Menu sudah dipesan. Silahkan rubah jumlahnya saja!');
               window.location.href='?page=transaksi_detail-create&nomor_transaksi=<?= $nomor_transaksi ?>';
          </script>
     <?php
}else{
     $query_insert_dt = $koneksi->query("INSERT INTO detail_transaksi 
     VALUES('','$id_transaksi','$id_menu','$jumlah_menu', '$total_harga') ");

     if ($query_insert_dt ) {
          ?>
          <script>
               // window.alert('Data berhasil disimpan!');
               window.location.href='?page=transaksi_detail-create&nomor_transaksi=<?= $nomor_transaksi ?>';
          </script>
          <?php
     }else{
          ?>
          <script>
               window.alert('Data gagal disimpan!');
               window.location.href='index.php?page=transaksi_detail-create&nomor_transaksi=<?= $nomor_transaksi ?>';
          </script>
          <?php     
     }
}


?>