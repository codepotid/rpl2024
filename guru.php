<?php include 'koneksi.php'; ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <title>Data Guru</title>
</head>

<body>
    <div class="container" style="margin-top: 20px">
        <h2 class="text-center mb-4">TUTORIAL CRUD SEDERHANA - <i>PHP NATIVE</i></h2>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        DATA GURU
                    </div>
                    <div class="card-body">
                        <a href="tambah-siswa.php" class="btn btn-md btn-success" style="margin-bottom: 10px">TAMBAH DATA</a>
                        <table class="table table-bordered" id="myTable">
                            <thead>
                                <tr>
                                    <th scope="col">NO.</th>
                                    <th scope="col">NISN</th>
                                    <th scope="col">NAMA LENGKAP</th>
                                    <th scope="col">JK</th>
                                    <th scope="col">ALAMAT</th>
                                    <th scope="col">Foto</th>
                                    <th scope="col">AKSI</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                $query = mysqli_query($koneksi, "SELECT * FROM siswa");
                                while ($row = mysqli_fetch_array($query)) {
                                ?>

                                    <tr>
                                        <td class="text-center align-middle"><?php echo $no++ ?></td>
                                        <td class="text-center align-middle"><?php echo $row['nisn'] ?></td>
                                        <td class="text-center align-middle"><?php echo $row['nama_lengkap'] ?></td>
                                        <td class="text-center align-middle">
                                            <?php
                                            // $jknull = $row['jk'];
                                            if ($row['jk'] == '') {
                                                echo 'Rahasia';
                                            } else {
                                                echo $row['jk'];
                                            }
                                            ?>
                                        </td>
                                        <td class="align-middle"><?= $row['alamat'] ?></td>
                                        <td class="align-middle">
                                            <?php if ($row['foto'] == "") {
                                                echo 'kosong'; ?>
                                            <?php } else { ?>
                                                <img src="img/<?= $row['foto'] ?>" style="width: fit-content; height: 100px">
                                            <?php } ?>
                                        </td>
                                        <td class="text-center align-middle">
                                            <a href="edit-siswa.php?id=<?php echo $row['id_siswa'] ?>" class="btn btn-sm btn-primary">EDIT</a>
                                            <a href="hapus-siswa.php?id=<?php echo $row['id_siswa'] ?>" class="btn btn-sm btn-danger">HAPUS</a>
                                        </td>
                                    </tr>

                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
        <script>
            $(document).ready(function() {
                $('#myTable').DataTable();
            });
        </script>
</body>

</html>