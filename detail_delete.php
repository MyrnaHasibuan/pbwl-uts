<?php

require_once "app/detail.php";

$id = $_GET['id'];

$detail = new App\detail();
$rows = $detail->delete($id);

?>

<div class="info">
      echo '<script>alert("Data berhasil dihapus")</script>';
      echo '<script>window.location="index.php?hal=detail_tampil"</script>';
</div>