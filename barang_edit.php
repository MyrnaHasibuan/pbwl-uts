<?php

require_once "app/barang.php";

$id = $_GET['id'];
$barang = new app\barang();

$row = $barang->edit($id);
?>

<h2>Edit Barang</h2>

<form action="barang_proses.php" method="post">
    <input type="hidden" name="barang_id" value="<?php echo $row['barang_id']; ?>">
    <table>
        <tr>
            <td>Harga Barang</td>
            <td><input type="text" name="barang_nama" value="<?php echo $row['barang_nama']; ?>"></td>
        </tr>
        <tr>
            <td>Harga Barang</td>
            <td><input type="text" name="barang_harga" value="<?php echo $row['barang_harga']; ?>"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form>