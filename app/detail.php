<?php

namespace App;
use Inc\Koneksi as Koneksi;

class detail extends Koneksi {

    public function tampil()
    {
        $sql = "SELECT * FROM tb_detail";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();

        $data = [];

        while ($rows = $stmt->fetch()) {
            $data[] = $rows;
        }

        return $data;
    }

    public function simpan()
    {
        $detail_transaksi_id = $_POST['detail_transaksi_id'];
        $detail_jumlah = $_POST['detail_jumlah'];
        $detail_barang_id = $_POST['detail_barang_id'];
        $detail_id = $_POST['detail_id'];

        $sql = "INSERT INTO tb_detail (detail_transaksi_id, detail_jumlah, detail_barang_id)
        VALUES (:detail_transaksi_id, :detail_jumlah, :detail_barang_id)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":detail_transaksi_id", $detail_transaksi_id);
        $stmt->bindParam(":detail_barang_id", $detail_barang_id);
        $stmt->bindParam(":detail_jumlah", $detail_jumlah);
        $stmt->execute();
    }

    public function edit($id)
    {

        $sql = "SELECT * FROM tb_detail WHERE detail_id=:detail_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":detail_id", $id);
        $stmt->execute();

        $row = $stmt->fetch();

        return $row;
    }

    public function update()
    {
        $detail_transaksi_id = $_POST['detail_transaksi_id'];
        $detail_jumlah = $_POST['detail_jumlah'];
        $detail_barang_id = $_POST['detail_barang_id'];
        $detail_id = $_POST['detail_id'];

        $sql = "UPDATE tb_detail SET detail_transaksi_id=:detail_transaksi_id, detail_jumlah=:detail_jumlah,
        detail_barang_id=:detail_barang_id WHERE detail_id=:detail_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":detail_transaksi_id", $detail_transaksi_id);
        $stmt->bindParam(":detail_barang_id", $detail_barang_id);
        $stmt->bindParam(":detail_jumlah", $detail_jumlah);
        $stmt->bindParam(":detail_id", $detail_id);
        $stmt->execute();
    }

    public function delete($id)
    {

        $sql = "DELETE FROM tb_detail WHERE detail_id=:detail_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":detail_id", $id);
        $stmt->execute();
    }
}