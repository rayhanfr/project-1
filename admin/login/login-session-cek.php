<?php
if (empty($_SESSION['login'])) {
     ?>
          <script>
               // window.alert('Anda BELUM LOGIN ! !');
               window.location.href='../login/login.php';
          </script>
     <?php
}
?>

