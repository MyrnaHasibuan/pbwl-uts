<?php

require_once "app/transaksi.php";

$transaksi = new app\transaksi;
$rows = $transaksi->tampil();

?>

<h2>Data Transaksi</h2>

<a href="index.php?hal=transaksi_input" class="btn">Tambah Transaksi</a>

<table>
    <tr>
        <th>NO</th>
        <th>NAMA PELANGGAN</th>
        <th>TANGGAL</th>
        <th>KASIR</th>
        <th>EDIT</th>
        <th>DELETE</th>
    </tr>
    <?php    
        require_once "inc/Koneksi.php";
        $nama = mysqli_query($conn, "SELECT * FROM tb_transaksi
        INNER JOIN tb_pelanggan ON tb_pelanggan.pelanggan_id = tb_transaksi.transaksi_pelanggan_id");
        while($row = mysqli_fetch_array($nama)){
    ?>
    <tr>
    <td><?php echo $row['transaksi_id']; ?></td>
    <td><?php echo $row['pelanggan_nama']; ?></td>
    <td><?php echo $row['transaksi_tanggal']; ?></td>
    <td><?php echo $row['transaksi_kasir']; ?></td>
    <td><a href="index.php?hal=transaksi_edit&id=<?php echo $row['transaksi_id']; ?>" class="btn">Edit</a></td>
    <td><a href="index.php?hal=transaksi_delete&id=<?php echo $row['transaksi_id']; ?>" class="btn">Delete</a></td></tr>
    <?php } ?>
</table>
