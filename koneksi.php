<?php
$koneksi = new mysqli('localhost', 'root', '','dbsmartphone');
if ($koneksi->connect_error) {
    die("Koneksi Gagal: " . $koneksi->connect_error);
} 
?>