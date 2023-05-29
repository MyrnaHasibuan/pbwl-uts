<?php

require_once "app/pelanggan.php";

$id = $_GET['id'];

$pelanggan = new App\pelanggan();
$rows = $pelanggan->delete($id);

?>

<div class="info">
      echo '<script>alert("Data berhasil dihapus")</script>';
      echo '<script>window.location="index.php?hal=pelanggan_tampil"</script>';
</div>