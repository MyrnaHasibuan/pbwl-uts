<?php

require_once "inc/Koneksi.php";
require_once "app/barang.php";

$barang = new App\barang();

if (isset($_POST['btn_simpan'])) {
    $barang->simpan();
    echo '<script>alert("Data berhasil ditambah")</script>';
    echo '<script>window.location="index.php?hal=barang_tampil"</script>';
}

if (isset($_POST['btn_update'])) {
    $barang->update();
    echo '<script>alert("Data berhasil diubah")</script>';
    echo '<script>window.location="index.php?hal=barang_tampil"</script>';
}