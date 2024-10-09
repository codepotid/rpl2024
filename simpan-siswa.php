<?php
include 'config.php'; // gk usah boss
include 'koneksi.php';

$nisn         = $_POST['nisn'];
$nama_lengkap = $_POST['nama_lengkap'];
$jk           = $_POST['jk'];
$alamat       = $_POST['alamat'];

//images input
$allowed = array('gif', 'png', 'jpg', 'jpeg');
$foto = $_FILES['foto']['name'];

//rand (mengacak nama yang kita simpan di folder img)
$detik = date('s');
$menit = date('i');
$year = date('Y');
$urutan = rand(1, 100);
$randomNumber = intval($detik . $menit . $year . $urutan);

if ($foto == "") {
    //query insert data ke dalam database
    $query = "INSERT INTO siswa (nisn, nama_lengkap, alamat, jk, foto) VALUES ('$nisn', '$nama_lengkap', '$alamat', '$jk','')";
    if ($koneksi->query($query)) {
        // header("location:" . base_url());
        header("location:index.php");
    } else {
        echo "Data Gagal Disimpan!";
    }
} else {
    $namafilefoto = $randomNumber . '_' . $foto;

    $query = "INSERT INTO siswa (nisn, nama_lengkap, alamat, jk, foto) VALUES ('$nisn', '$nama_lengkap', '$alamat', '$jk', '$namafilefoto')";

    if ($koneksi->query($query)) {
        move_uploaded_file($_FILES['foto']['tmp_name'], 'img/' . $namafilefoto);
        // header("location:" . base_url());
        header("location:index.php");
    } else {
        echo "Data Gagal Disimpan!";
    }
}

exit;
