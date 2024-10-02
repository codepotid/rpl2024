<?php

include 'config.php';
include 'koneksi.php';

$id = $_GET['id'];

$query = "SELECT * FROM siswa WHERE id_siswa = $id LIMIT 1";

$result = mysqli_query($koneksi, $query);

$row = mysqli_fetch_array($result);

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Edit Siswa</title>
</head>

<body>

    <div class="container" style="margin-top: 20px">
        <h2 class="text-center mb-4">TUTORIAL CRUD SEDERHANA - <i>PHP NATIVE</i></h2>
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <a href="<?= base_url(); ?>">&laquo; Back To Home</a>
                <div class="card">
                    <div class="card-header">
                        EDIT SISWA
                    </div>
                    <div class="card-body">
                        <form action="update-siswa.php" method="POST">

                            <div class="form-group">
                                <input hidden name="id_siswa" value="<?php echo $row['id_siswa'] ?>">
                                <label>NISN</label>
                                <input type="text" name="nisn" value="<?php echo $row['nisn'] ?>" placeholder="Masukkan NISN Siswa" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Nama Lengkap</label>
                                <input type="text" name="nama_lengkap" value="<?php echo $row['nama_lengkap'] ?>" placeholder="Masukkan Nama Siswa" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Jenis Kelamin</label>
                                <select class="form-control" name="jk">
                                    <?php
                                    $jk = $row['jk'];
                                    $null = NULL;
                                    if ($jk == 'L') {
                                    ?>
                                        <option style="background-color: yellow;" selected value="<?= $jk; ?>">Laki - Laki</option>
                                        <option value="P">Perempuan</option>
                                        <option value="<?= $null; ?>">Rahasia</option>
                                    <?php
                                    } elseif ($jk == 'P') {
                                    ?>
                                        <option style="background-color: yellow;" selected value="<?= $jk; ?>">Perempuan</option>
                                        <option value="L">Laki - Laki</option>
                                        <option value="<?= $null; ?>">Rahasia</option>
                                    <?php
                                    } else {
                                    ?>
                                        <option style="background-color: yellow;" value="<?= $null; ?>">Rahasia</option>
                                        <option value="L">Laki - Laki</option>
                                        <option value="P">Perempuan</option>
                                    <?php
                                    }
                                    ?>

                                </select>
                            </div>

                            <div class="form-group">
                                <label>Alamat</label>
                                <textarea class="form-control" name="alamat" placeholder="Masukkan Alamat Siswa" rows="4"><?php echo $row['alamat'] ?></textarea>
                            </div>

                            <button type="submit" class="btn btn-success">UPDATE</button>
                            <button type="reset" class="btn btn-warning">RESET</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

</html>