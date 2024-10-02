<?php
include 'config.php';
include 'koneksi.php';

//get id
$id = $_GET['id'];

$query = "DELETE FROM siswa WHERE id_siswa = '$id'";

if ($koneksi->query($query)) {
    header("location:" . base_url());
} else {
    echo "DATA GAGAL DIHAPUS!";
}
