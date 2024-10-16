<?php
// include 'config.php';
include 'koneksi.php';

$id_siswa     = $_POST['id_siswa'];
$nisn         = $_POST['nisn'];
$nama_lengkap = $_POST['nama_lengkap'];
$jk           = $_POST['jk'];
$alamat       = $_POST['alamat'];

$queryFotoLama = "SELECT foto FROM siswa WHERE id_siswa = '$id_siswa'";
$result = $koneksi->query($queryFotoLama);
$row = $result->fetch_assoc();
$fotoLama = $row['foto'];

if (isset($_FILES['foto']) && $_FILES['foto']['error'] == UPLOAD_ERR_OK) {
    $targetDir = "img/";
    $foto = basename($_FILES['foto']['name']);
    $targetFilePath = $targetDir . $foto;

    $fileType = strtolower(pathinfo($targetFilePath, PATHINFO_EXTENSION));

    $allowedTypes = ['jpg', 'jpeg', 'png'];
    if (in_array($fileType, $allowedTypes)) {
        if (move_uploaded_file($_FILES['foto']['tmp_name'], $targetFilePath)) {
            if (!empty($fotoLama) && file_exists($targetDir . $fotoLama)) {
                unlink($targetDir . $fotoLama);
            }
            $query = "UPDATE siswa SET nisn = '$nisn', nama_lengkap = '$nama_lengkap', jk = '$jk', alamat = '$alamat', foto = '$foto' WHERE id_siswa = '$id_siswa'";
        } else {
            echo "Gagal meng-upload foto!";
            exit;
        }
    } else {
        echo "Format file tidak valid! Hanya PNG, JPEG, dan JPG yang diperbolehkan.";
        exit;
    }
} else {
    $query = "UPDATE siswa SET nisn = '$nisn', nama_lengkap = '$nama_lengkap', jk = '$jk', alamat = '$alamat' WHERE id_siswa = '$id_siswa'";
}
if ($koneksi->query($query)) {
    header("location:index.php");
} else {
    echo "Data Gagal Diupdate!";
}
