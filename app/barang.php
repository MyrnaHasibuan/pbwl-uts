<?php

namespace App;
use Inc\Koneksi as Koneksi;

class barang extends Koneksi {

    public function tampil()
    {
        $sql = "SELECT * FROM tb_barang";
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
        $barang_nama = $_POST['barang_nama'];
        $barang_harga = $_POST['barang_harga'];
        $barang_id = $_POST['barang_id'];

        $sql = "INSERT INTO tb_barang (barang_nama, barang_harga) VALUES (:barang_nama, :barang_harga)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":barang_nama", $barang_nama);
        $stmt->bindParam(":barang_harga", $barang_harga);
        $stmt->execute();
    }

    public function edit($id)
    {

        $sql = "SELECT * FROM tb_barang WHERE barang_id=:barang_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":barang_id", $id);
        $stmt->execute();

        $row = $stmt->fetch();

        return $row;
    }

    public function update()
    {
        $barang_nama = $_POST['barang_nama'];
        $barang_harga = $_POST['barang_harga'];
        $barang_id = $_POST['barang_id'];

        $sql = "UPDATE tb_barang SET barang_nama=:barang_nama, barang_harga=:barang_harga
        WHERE barang_id=:barang_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":barang_nama", $barang_nama);
        $stmt->bindParam(":barang_harga", $barang_harga);
        $stmt->bindParam(":barang_id", $barang_id);
        $stmt->execute();

    }

    public function delete($id)
    {

        $sql = "DELETE FROM tb_barang WHERE barang_id=:barang_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":barang_id", $id);
        $stmt->execute();
    }

}