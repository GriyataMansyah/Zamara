<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "db_zamara";

$koneksi = mysqli_connect($host, $user, $pass, $db);
if (!$koneksi) {
    die("Gagal konek : " . mysqli_error($koneksi));
}

$sql = 'SELECT *
FROM tb_laporan';

$query = mysqli_query($koneksi, $sql);

if (!$query) {
    die('SQL Error: ' . mysqli_error($koneksi));
}

