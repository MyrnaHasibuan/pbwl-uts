<?php

namespace Inc;

class koneksi {

    public object $db;

    public function __construct() {
        $this->db = new \PDO("mysql:host=localhost;dbname=dbtokohp", "root", "");
    }
}

$conn = mysqli_connect("localhost","root","","dbtokohp") or die(mysqli_connect_error());

?>