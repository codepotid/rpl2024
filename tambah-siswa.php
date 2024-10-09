<?php include 'config.php'; ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Tambah Siswa</title>
</head>

<body>

    <div class="container" style="margin-top: 20px">
        <h2 class="text-center mb-4">TUTORIAL CRUD SEDERHANA - <i>PHP NATIVE</i></h2>
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <a class="btn btn-danger mb-2" href="index.php">&laquo; Back To Home</a>
                <div class="card">
                    <div class="card-header">
                        TAMBAH SISWA
                    </div>
                    <div class="card-body">
                        <form action="simpan-siswa.php" method="POST" enctype="multipart/form-data">

                            <div class="form-group">
                                <label>NISN</label>
                                <input type="text" name="nisn" placeholder="Masukkan NISN Siswa" class="form-control" required="required">
                            </div>

                            <div class="form-group">
                                <label>Nama Lengkap</label>
                                <input type="text" name="nama_lengkap" placeholder="Masukkan Nama Siswa" class="form-control" required="required">
                            </div>

                            <div class="form-group">
                                <label>Jenis Kelamin</label>
                                <select class="form-control" name="jk" required="required">
                                    <option selected disabled>--Pilih Alat Kelaminmu--</option>
                                    <hr>
                                    <option value="L">Laki - laki</option>
                                    <option value="P">Perempuan</option>
                                    <option value="lainnya">Rahasia</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Alamat</label>
                                <textarea class="form-control" name="alamat" placeholder="Masukkan Alamat Siswa" rows="4" required="required"></textarea>
                            </div>

                            <div class="form-group">
                                <label>Foto</label>
                                <input class="form-control" type="file" name="foto">
                                <small class="text-muted">Kosongkan jika tidak / belum punya foto</small>
                            </div>

                            <button type="submit" class="btn btn-success">SIMPAN</button>
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