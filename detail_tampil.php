<?php

require_once "app/detail.php";

$detail = new app\detail;
$rows = $detail->tampil();

?>

<h2>Data Detail</h2>

<a href="index.php?hal=detail_input" class="btn">Tambah Detail</a>

<table>
    <tr>
        <th>NO</th>
        <th>KODE PELANGGAN</th>
        <th>JUMLAH</th>
        <th>NAMA BARANG</th>
        <th>EDIT</th>
        <th>DELETE</th>
    </tr>
    <?php    
        require_once "inc/Koneksi.php";
        $pelanggan = mysqli_query($conn, "SELECT * FROM tb_detail
        INNER JOIN tb_transaksi ON tb_transaksi.transaksi_id = tb_detail.detail_transaksi_id
        INNER JOIN tb_barang ON tb_barang.barang_id = tb_detail.detail_barang_id");
        while($row = mysqli_fetch_array($pelanggan)){
    ?>
    <tr>
    <td><?php echo $row['detail_id']; ?></td>
    <td><?php echo $row['transaksi_pelanggan_id']; ?></td>
    <td><?php echo $row['detail_jumlah']; ?></td>
    <td><?php echo $row['barang_nama']; ?></td>
    <td><a href="index.php?hal=detail_edit&id=<?php echo $row['detail_id']; ?>" class="btn">Edit</a></td>
    <td><a href="index.php?hal=detail_delete&id=<?php echo $row['detail_id']; ?>" class="btn">Delete</a></td></tr>
    <?php } ?>
</table>