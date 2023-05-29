<?php

require_once "app/barang.php";

$barang = new app\barang;
$rows = $barang->tampil();

?>

<h2> DATA BARANG</h2>

<a href="index.php?hal=barang_input" class="btn">Tambah Barang</a>

<table>
    <tr>
        <th>NO</th>
        <th>NAMA BARANG</th>
        <th>HARGA BARANG</th>
        <th>EDIT</th>
        <th>DELETE</th>
    </tr>
    <?php foreach ($rows as $row) { ?>
    <tr>
        <td><?php echo $row['barang_id']; ?></td>
        <td><?php echo $row['barang_nama']; ?></td>
        <td><?php echo $row['barang_harga']; ?></td>
        <td><a href="index.php?hal=barang_edit&id=<?php echo $row['barang_id']; ?>" class="btn">Edit</a></td>
        <td><a href="index.php?hal=barang_delete&id=<?php echo $row['barang_id']; ?>" class="btn">Delete</a></td>
    </tr>
    <?php } ?>
</table>
