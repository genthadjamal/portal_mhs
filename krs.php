<!DOCTYPE html>
<html lang="en">
<?php
include 'function/function.php';
login();
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <!-- Font Google  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- hvr -->
    <!-- <link href="css/demo-page.css" rel="stylesheet" media="all"> -->
    <link href="css/imagehover.min.css" rel="stylesheet" media="all">
    <!-- animate -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!-- ICON BOOSTRAP -->
    <script src="https://kit.fontawesome.com/b6af9b2e15.js" crossorigin="anonymous"></script>
    <!-- floating WA -->
    <!-- <link rel="stylesheet" href="css/wa.css">
    <a class='fixed-whatsapp' href='https://api.whatsapp.com/send?phone=6289504765415' rel='nofollow noopener' target='_blank' title='Whatsapp'> -->

    <title>Portal Mahasiswa</title>
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background: linear-gradient(292deg, rgba(39,76,175,1) 0%, rgba(47,109,162,1) 58%, rgba(38,183,233,1) 100%);">
        <div class="container">
            <a class="navbar-brand" href="#">
                <h3>PORTAL MHS</h3>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item mx-2">
                        <a class="nav-link" aria-current="page" href="index.php">Beranda</a>
                    </li>
                    <li class="nav-item dropdown mx-2">
                        <a class="nav-link active" href="krs.php">KRS</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="khs.php">KHS</a>
                    <li>
                        <div class="dropdown">
                            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-user"></i>
                            </a>

                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <li><a class="dropdown-item" href="#">Hi, <?= $_SESSION['username']; ?></a></li>
                                <li><a class="dropdown-item" href="login/edit-profil.php">Edit profil</a></li>
                                <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModal">Keluar <i class="fas fa-sign-out-alt"></i></a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- end navbar -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Keluar</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Yakin anda ingin Keluar ?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary"><a href="function/func_logout.php" style="text-decoration: none; color:whitesmoke">Oke</a></button>
                </div>
            </div>
        </div>
    </div>
    <!-- end navbar -->

    <section class="pt-5 pb-3">
        <div class="container pt-4 mt-4">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-xl-12 col-lg-7 mb-1">
                            <div class="card shadow mb-3">
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-info">PEMILIHAN KRS</h6>
                                </div>
                                <div class="card-body">
                                    <form class="d-flex" method="GET">
                                        <input class="form-control me-2" type="text" name="s_keyword" id="s_keyword" placeholder="Cari Mata Kuliah" aria-label="Search">
                                        <button class="btn btn-outline-success " id="search" name="search" type="submit">Cari</button>
                                    </form>
                                    <?php
                                    if (isset($_GET['s_keyword'])) {
                                        $keyword = $_GET['s_keyword'];
                                        $data = mysqli_query($connect, "SELECT * FROM matkul WHERE nama_matkul like '%" . $keyword . "%'");
                                    } else {
                                        $data = mysqli_query($connect, "SELECT * FROM matkul");
                                    }
                                    ?>
                                    <form action="function/func_khs.php" method="POST">
                                        <div class="form-group row mb-3 mt-2">
                                            <label for="" class="col-sm-2 col-form-label">NIM</label>
                                            <div class="col-sm-5">
                                                <input type="text" class="form-control" name="nim" value="<?= $_SESSION['nim']; ?>" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group row mb-3">
                                            <label for="" class="col-sm-2 col-form-label">Nama Mahasiswa</label>
                                            <div class="col-sm-5">
                                                <input type="text" class="form-control" name="nama" value="<?= $_SESSION['nama']; ?>" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group row mb-3">
                                            <label for="" class="col-sm-2 col-form-label">Program Studi</label>
                                            <div class="col-sm-5">
                                                <input type="text" class="form-control" name="prodi" value="<?= $_SESSION['prodi']; ?>" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group row mb-3">
                                            <label for="" class="col-sm-2 col-form-label">Semester</label>
                                            <div class="col-sm-5">
                                                <input type="text" class="form-control" name="semester" value="<?= $_SESSION['semester']; ?>" readonly>
                                            </div>
                                        </div>
                                        <!-- <div class="d-sm-flex align-items-center justify-content-between mb-4">
                                            <a class="btn btn-info" type="button" href="index.php?page=tambahmatkul" style="color: white;"> Pilih Matkul </a>
                                        </div> -->



                                </div>
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-info">Silahkan Pilih Penawaran Mata Kuliah</h6>
                                </div>

                                <div class="card-body">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>NO</th>
                                                <th>ID Matkul</th>
                                                <th>Nama Mata Kuliah</th>
                                                <th>Semester</th>
                                                <th>SKS</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php

                                            $awal = 0;
                                            $no = $awal + 1;
                                            while ($mhs = mysqli_fetch_array($data)) {
                                            ?>
                                                <tr>
                                                    <td> <?= $no++ ?></td>
                                                    <td> <?= $mhs['id_matkul'] ?></td>
                                                    <td> <?= $mhs['nama_matkul'] ?></td>
                                                    <td> <?= $mhs['semester'] ?></td>
                                                    <td><?= $mhs['sks']; ?></td>
                                                    <td>
                                                        <div>
                                                            <input class="form-check-input" type="checkbox" name="id_matkul[]" id="checkboxNoLabel" value="<?= $mhs['id_matkul'] ?>">
                                                        </div>

                                                    </td>

                                                </tr>
                                            <?php } ?>

                                        </tbody>
                                    </table>
                                    <div class="d-grid gap-2 col-7 mx-auto">
                                        <button type="submit" name="tambahmatkul" class="btn btn-primary">Kirim</button>
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="section-footer" style="background: linear-gradient(292deg, rgba(39,76,175,1) 0%, rgba(47,109,162,1) 58%, rgba(38,183,233,1) 100%); color:white;">

        <div>
            <div class="border-top justify-content-center  pt-4 pb-4" style="background: linear-gradient(292deg, rgba(39,76,175,1) 0%, rgba(47,109,162,1) 58%, rgba(38,183,233,1) 100%);">
                <center>
                    <div class="col-auto font-weight-light align-items-center" style="font-size: 12px;">Copyright by : Nala Indah Prasasti</div>
                </center>
            </div>
        </div>
    </footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>