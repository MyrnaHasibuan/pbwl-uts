<?php

require_once "inc/Koneksi.php";
require_once "app/transaksi.php";

$transaksi = new App\transaksi();

if (isset($_POST['btn_simpan'])) {
    $transaksi->simpan();
    echo '<script>alert("Data berhasil ditambah")</script>';
    echo '<script>window.location="index.php?hal=transaksi_tampil"</script>';
}

if (isset($_POST['btn_update'])) {
    $transaksi->update();
    echo '<script>alert("Data berhasil diubah")</script>';
    echo '<script>window.location="index.php?hal=transaksi_tampil"</script>';
}