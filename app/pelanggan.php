<?php

namespace App;
use Inc\Koneksi as Koneksi;

class pelanggan extends Koneksi {

    public function tampil()
    {
        $sql = "SELECT * FROM tb_pelanggan";
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
        $pelanggan_id = $_POST['pelanggan_id'];
        $pelanggan_nama = $_POST['pelanggan_nama'];
        $pelanggan_nomorhp = $_POST['pelanggan_nomorhp'];
        $pelanggan_alamat = $_POST['pelanggan_alamat'];


        $sql = "INSERT INTO tb_pelanggan (pelanggan_nama, pelanggan_nomorhp, pelanggan_alamat)
        VALUES (:pelanggan_nama, :pelanggan_nomorhp, :pelanggan_alamat)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":pelanggan_nama", $pelanggan_nama);
        $stmt->bindParam(":pelanggan_nomorhp", $pelanggan_nomorhp);
        $stmt->bindParam(":pelanggan_alamat", $pelanggan_alamat);
        $stmt->execute();
    }

    public function edit($id)
    {

        $sql = "SELECT * FROM tb_pelanggan WHERE pelanggan_id=:pelanggan_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":pelanggan_id", $id);
        $stmt->execute();

        $row = $stmt->fetch();

        return $row;
    }

    public function update()
    {
        $pelanggan_id = $_POST['pelanggan_id'];
        $pelanggan_nama = $_POST['pelanggan_nama'];
        $pelanggan_nomorhp = $_POST['pelanggan_nomorhp'];
        $pelanggan_alamat = $_POST['pelanggan_alamat'];

        $sql = "UPDATE tb_pelanggan SET pelanggan_nama=:pelanggan_nama, pelanggan_nomorhp=:pelanggan_nomorhp,
        pelanggan_alamat=:pelanggan_alamat WHERE pelanggan_id=:pelanggan_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":pelanggan_nama", $pelanggan_nama);
        $stmt->bindParam(":pelanggan_nomorhp", $pelanggan_nomorhp);
        $stmt->bindParam(":pelanggan_alamat", $pelanggan_alamat);
        $stmt->bindParam(":pelanggan_id", $pelanggan_id);
        $stmt->execute();
}

    public function delete($id)
    {

        $sql = "DELETE FROM tb_pelanggan WHERE pelanggan_id=:pelanggan_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":pelanggan_id", $id);
        $stmt->execute();
    }
}