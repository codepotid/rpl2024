# Koneksi

## Nama database `pn_projectrpl24`

Berikut adalah Codingannya pn_projectrpl24.sql
jika nama db nya anda ganti tidak apa apa... tapi sesuaikan di file koneksi.php

```
-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 19 Okt 2024 pada 01.39
-- Versi server: 8.0.30
-- Versi PHP: 8.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

/_!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT _/;
/_!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS _/;
/_!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION _/;
/_!40101 SET NAMES utf8mb4 _/;

--
-- Database: `pn_projectrpl24`
--

---

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
`id_siswa` int NOT NULL,
`nisn` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
`nama_lengkap` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
`alamat` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
`jk` enum('L','P','lainnya') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
`foto` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `nisn`, `nama_lengkap`, `alamat`, `jk`, `foto`) VALUES
(4, '12344455', 'Miftakhul Jannah', 'asda2213jjjasnn', 'lainnya', 'bukti.jpeg'),
(5, '12345665', 'asdalnjk', 'sdlmj', 'lainnya', 'Gb. 5.png');

---

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
`id_user` int NOT NULL,
`nama_lengkap` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
`email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
`password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama_lengkap`, `email`, `password`) VALUES
(1, 'Dicky', 'driverscript19@gmail.com', '$2y$10$itLHchHn11Rb4sSFfbecoeA6uNCaaQp6uG3sgp1VAgWrwfGHvuIWa'),
(2, 'fahri gaplek', 'fahrigaplek@gmail.com', '$2y$10$he/ncSmCxU18UfUVJj8i.Oc1i6DdOvbuP5mA/g6DPkf9AFCCc2Ym2');
(3, 'Administrator', 'admin@gmail.com', '$2y$10$T7jZoa7c4imhKBUSuFinV.5vOFlQC3AThEIw4rrh9wGGBHWADU0ji');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
ADD PRIMARY KEY (`id_siswa`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
ADD PRIMARY KEY (`id_user`),
ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `siswa`
--
ALTER TABLE `siswa`
MODIFY `id_siswa` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
MODIFY `id_user` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/_!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT _/;
/_!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS _/;
/_!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION _/;
```
