<?php

require_once "app/transaksi.php";

$id = $_GET['id'];
$transaksi = new app\transaksi();

$row = $transaksi->edit($id);
?>

<h2>Edit Data</h2>

<form action="transaksi_proses.php" method="post">
    <input type="hidden" name="transaksi_id" value="<?php echo $row['transaksi_id']; ?>">
    <table>
        <tr>
            <td>Nama Pelanggan</td>
            <td>
            <select class="input-control" name="transaksi_pelanggan_id">
                        <option value="">--Silahkan Pilih--</option>
                        <?php
                        require_once "inc/koneksi.php";
                            $pelanggan = mysqli_query($conn, "SELECT * FROM tb_pelanggan ORDER BY pelanggan_id DESC");
                            while($data = mysqli_fetch_array($pelanggan)){
                        ?>
                        <option value="<?php echo $data['pelanggan_id'] ?>"><?php echo $data['pelanggan_nama']?></option>
                        <?php } ?>
            </select>        
            </td>
        </tr>
        <tr>
            <td>Tanggal</td>
            <td><input type="date" name="transaksi_tanggal" value="<?php echo $row['transaksi_tanggal']; ?>"></td>
        </tr>
        <tr>
            <td>Kapster</td>
            <td><input type="text" name="transaksi_kasir" value="<?php echo $row['transaksi_kasir']; ?>"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form>