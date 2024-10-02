<?php
include 'config.php';
include 'koneksi.php';

$nisn         = $_POST['nisn'];
$nama_lengkap = $_POST['nama_lengkap'];
$jk           = $_POST['jk'];
$alamat       = $_POST['alamat'];

//images input
$allowed = array('gif', 'png', 'jpg', 'jpeg');
$foto = $_FILES['foto']['name'];

//rand
$detik = date('s');
$menit = date('i');
$year = date('Y');
$urutan = rand(1, 100);
$randomNumber = intval($detik . $menit . $year . $urutan);

if ($foto == "") {
    //query insert data ke dalam database
    $query = "INSERT INTO siswa (nisn, nama_lengkap, alamat, jk, foto) VALUES ('$nisn', '$nama_lengkap', '$alamat', '$jk','')";
} else {
    $namafilefoto = $randomNumber . '_' . $foto;
    move_uploaded_file($_FILES['foto']['tmp_name'], 'img/' . $namafilefoto);

    $query = "INSERT INTO siswa (nisn, nama_lengkap, alamat, jk, foto) VALUES ('$nisn', '$nama_lengkap', '$alamat', '$jk','$namafilefoto')";
}



if ($koneksi->query($query)) {

    header("location:" . base_url());
} else {

    echo "Data Gagal Disimpan!";
}
exit;
