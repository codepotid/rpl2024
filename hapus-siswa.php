<?php
include 'config.php';
include 'koneksi.php';

// Mendapatkan ID dari parameter GET
$id = $_GET['id'];

// Ambil nama file foto sebelum menghapus pengguna
$query = "SELECT foto FROM siswa WHERE id_siswa = '$id'";
$result = $koneksi->query($query);

if ($result && $result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $foto = $row['foto'];

    // Hapus data siswa dari database
    $queryDelete = "DELETE FROM siswa WHERE id_siswa = '$id'";

    if ($koneksi->query($queryDelete)) {
        // Hapus file foto jika ada
        $filePath = 'img/' . $foto; // Ganti sesuai path file foto

        if (file_exists($filePath)) {
            unlink($filePath); // Hapus file foto
        }

        header("location:" . base_url());
    } else {
        echo "DATA GAGAL DIHAPUS!";
    }
} else {
    echo "DATA TIDAK DITEMUKAN!";
}
