<?php

require_once "app/transaksi.php";

$id = $_GET['id'];

$transaksi = new App\transaksi();
$rows = $transaksi->delete($id);

?>

<div class="info">
      echo '<script>alert("Data berhasil dihapus")</script>';
      echo '<script>window.location="index.php?hal=transaksi_tampil"</script>';
</div>