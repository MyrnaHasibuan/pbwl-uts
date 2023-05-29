<?php

require_once "app/pelanggan.php";

$pelanggan = new app\pelanggan;
$rows = $pelanggan->tampil();

?>

<h2>Data Pelanggan</h2>

<a href="index.php?hal=pelanggan_input" class="btn">Tambah Pelanggan</a>

<table>
    <tr>
        <th>NO</th>
        <th>NAMA</th>
        <th>NOMOR HP </th>
        <th>ALAMAT</th>
        <th>EDIT</th>
        <th>DELETE</th>
    </tr>
    <?php foreach ($rows as $row) { ?>
    <tr>
        <td><?php echo $row['pelanggan_id']; ?></td>
        <td><?php echo $row['pelanggan_nama']; ?></td>
        <td><?php echo $row['pelanggan_nomorhp']; ?></td>
        <td><?php echo $row['pelanggan_alamat']; ?></td>
        <td><a href="index.php?hal=pelanggan_edit&id=<?php echo $row['pelanggan_id']; ?>" class="btn">Edit</a></td>
        <td><a href="index.php?hal=pelanggan_delete&id=<?php echo $row['pelanggan_id']; ?>" class="btn">Delete</a></td>
    </tr>
    <?php } ?>
</table>
