<?php

require_once "inc/Koneksi.php";
require_once "app/detail.php";

$detail = new App\detail();

if (isset($_POST['btn_simpan'])) {
    $detail->simpan();
    echo '<script>alert("Data berhasil ditambah")</script>';
    echo '<script>window.location="index.php?hal=detail_tampil"</script>';
}

if (isset($_POST['btn_update'])) {
    $detail->update();
    echo '<script>alert("Data berhasil diubah")</script>';
    echo '<script>window.location="index.php?hal=detail_tampil"</script>';
}