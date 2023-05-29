<?php

require_once "app/pelanggan.php";

$id = $_GET['id'];
$pelanggan = new app\pelanggan();

$row = $pelanggan->edit($id);
?>

<h2>Edit Data</h2>

<form action="pelanggan_proses.php" method="post">
    <input type="hidden" name="pelanggan_id" value="<?php echo $row['pelanggan_id']; ?>">
    <table>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="pelanggan_nama" value="<?php echo $row['pelanggan_nama']; ?>"></td>
        </tr>
        <tr>
            <td>Nomor Hp</td>
            <td><input type="text" name="pelanggan_nomorhp" value="<?php echo $row['pelanggan_nomorhp']; ?>"></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><input type="text" name="pelanggan_alamat" value="<?php echo $row['pelanggan_alamat']; ?>"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form>