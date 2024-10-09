<?php
include 'config.php';
include 'koneksi.php';

// Mendapatkan data dari form
$id_siswa     = $_POST['id_siswa'];
$nisn         = $_POST['nisn'];
$nama_lengkap = $_POST['nama_lengkap'];
$jk           = $_POST['jk'];
$alamat       = $_POST['alamat'];

// Cek apakah ada foto yang di-upload
if (isset($_FILES['foto']) && $_FILES['foto']['error'] == UPLOAD_ERR_OK) {
    $targetDir = "img/";
    $foto = basename($_FILES['foto']['name']);
    $targetFilePath = $targetDir . $foto;

    // Upload foto ke folder img
    if (move_uploaded_file($_FILES['foto']['tmp_name'], $targetFilePath)) {
        // Jika berhasil upload, update foto di database
        $query = "UPDATE siswa SET nisn = '$nisn', nama_lengkap = '$nama_lengkap', jk = '$jk', alamat = '$alamat', foto = '$foto' WHERE id_siswa = '$id_siswa'";
    } else {
        echo "Gagal meng-upload foto!";
        exit;
    }
} else {
    // Jika tidak ada foto baru, update tanpa mengganti foto
    $query = "UPDATE siswa SET nisn = '$nisn', nama_lengkap = '$nama_lengkap', jk = '$jk', alamat = '$alamat' WHERE id_siswa = '$id_siswa'";
}

if ($koneksi->query($query)) {
    header("location:" . base_url());
} else {
    echo "Data Gagal Diupdate!";
}
