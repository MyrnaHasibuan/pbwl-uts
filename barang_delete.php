<?php

require_once "app/barang.php";

$id = $_GET['id'];

$barang = new App\barang();
$rows = $barang->delete($id);

?>

<div class="info">
      echo '<script>alert("Data berhasil dihapus")</script>';
      echo '<script>window.location="index.php?hal=barang_tampil"</script>';
</div>