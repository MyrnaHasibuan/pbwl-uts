<?php

require_once "inc/Koneksi.php";
require_once "app/pelanggan.php";

$pelanggan = new App\pelanggan();

if (isset($_POST['btn_simpan'])) {
    $pelanggan->simpan();
    echo '<script>alert("Data berhasil ditambah")</script>';
    echo '<script>window.location="index.php?hal=pelanggan_tampil"</script>';
}

if (isset($_POST['btn_update'])) {
    $pelanggan->update();
    echo '<script>alert("Data berhasil diubah")</script>';
    echo '<script>window.location="index.php?hal=pelanggan_tampil"</script>';
}