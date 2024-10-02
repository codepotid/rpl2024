<?php
include 'config.php';
include 'koneksi.php';

//get data dari form
$id_siswa     = $_POST['id_siswa'];
$nisn         = $_POST['nisn'];
$nama_lengkap = $_POST['nama_lengkap'];
$jk           = $_POST['jk'];
$alamat       = $_POST['alamat'];

//query update data ke dalam database berdasarkan ID
$query = "UPDATE siswa SET nisn = '$nisn', nama_lengkap = '$nama_lengkap', jk = '$jk', alamat = '$alamat' WHERE id_siswa = '$id_siswa'";

if ($koneksi->query($query)) {
    header("location:" . base_url());
} else {
    echo "Data Gagal Diupate!";
}
