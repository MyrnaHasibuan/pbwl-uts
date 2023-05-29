<?php

require_once "app/detail.php";

$id = $_GET['id'];
$detail = new app\detail();

$row = $detail->edit($id);
?>

<h2>Edit Data</h2>

<form action="detail_proses.php" method="post">
    <input type="hidden" name="detail_id" value="<?php echo $row['detail_id']; ?>">
    <table>
        <tr>
            <td>Kode Pelanggan</td>
            <td>
            <select class="input-control" name="detail_transaksi_id">
                        <option value="">--Silahkan Pilih--</option>
                        <?php
                        require_once "inc/koneksi.php";
                            $transaksi = mysqli_query($conn, "SELECT * FROM tb_transaksi ORDER BY transaksi_id DESC");
                            while($data = mysqli_fetch_array($transaksi)){
                        ?>
                        <option value="<?php echo $data['transaksi_id'] ?>"><?php echo $data['transaksi_pelanggan_id']?></option>
                        <?php } ?>
            </select>        
            </td>
        </tr>
        <tr>
            <td>Jumlah</td>
            <td><input type="text" name="detail_jumlah" value="<?php echo $row['detail_jumlah']; ?>"></td>
        </tr>
        <tr>
            <td>Barang</td>
            <td>
            <select class="input-control" name="detail_barang_id">
                        <option value="">--Silahkan Pilih--</option>
                        <?php
                        require_once "inc/koneksi.php";
                            $barang = mysqli_query($conn, "SELECT * FROM tb_barang ORDER BY barang_id DESC");
                            while($data = mysqli_fetch_array($barang)){
                        ?>
                        <option value="<?php echo $data['barang_id'] ?>"><?php echo $data['barang_nama']?></option>
                        <?php } ?>
            </select>
            </td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form>