CREATE TABLE tb_barang(
    barang_id INT (11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    barang_nama VARCHAR (50) NOT NULL,
    barang_harga VARCHAR (50) NOT NULL
);

CREATE TABLE tb_detail(
    detail_id INT (11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    detail_transaksi_id INT (11) NOT NULL,
    detail_jumlah VARCHAR (11) NOT NULL,
    detail_barang_id INT (11) NOT NULL
);
CREATE TABLE tb_pelanggan(
    pelanggan_id INT (11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    pelanggan_nama VARCHAR (50) NOT NULL,
    pelanggan_nomorhp VARCHAR (50) NOT NULL,
    pelanggan_alamat VARCHAR (50) NOT NULL
);
CREATE TABLE tb_transaksi(
    transaksi_id INT (11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    transaksi_pelanggan_id INT (11) NOT NULL,
    transaksi_tanggal DATE NOT NULL,
    transaksi_kasir VARCHAR (15),
    FOREIGN KEY (pelanggan_id) REFERENCES tb_pelanggan(pelanggan_id)
);
CREATE TABLE tb_admin (
    admin_id INT(11) NOT NULL AUTO_INCREMENT,
    admin_name VARCHAR(50),
    username VARCHAR(50),
    password VARCHAR(100),
    PRIMARY KEY (admin_id)
);