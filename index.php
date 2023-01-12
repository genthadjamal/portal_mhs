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
                        <a class="nav-link active" aria-current="page" href="index.php">Beranda</a>
                    </li>
                    <li class="nav-item dropdown mx-2">
                        <a class="nav-link" href="krs.php">KRS</a>
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
    <section class="pt-5 pb-3">
        <div class="container pt-4 mt-4">
            <h4>Portal Akademik</h4>&nbsp;<p>Selamat Datang di Portal Akademik Universitas XYZ</p>
            <div class="row">
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-xl-12 col-lg-7 mb-1">
                            <div class="card shadow mb-3">
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-info">INFO PENGUMUMAN</h6>
                                </div>
                                <div class="card-body">
                                    <p><b>Pengumuman</b></p>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur delectus iusto doloremque velit fugit iure explicabo adipisci labore, quia beatae veritatis possimus numquam distinctio quis vel nulla, fuga accusamus illum? Voluptates voluptatibus similique veniam sed voluptas accusamus dicta placeat mollitia! Eligendi velit beatae illum quas quod? Similique ratione sit distinctio!</p>
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officia fugit molestias quod culpa eveniet cumque aliquam sed exercitationem doloremque ex in suscipit eum quaerat veniam, neque minus libero corrupti beatae! Consequuntur expedita, molestias quod natus sed porro quidem laudantium tempore ducimus voluptates soluta nihil nulla perspiciatis voluptate ullam mollitia! Amet minima veniam obcaecati illo a qui dicta itaque, dolorum exercitationem consequuntur est quis rem accusamus id doloremque debitis animi in! Id aperiam eligendi ad atque quasi accusamus, excepturi illo perspiciatis quod consequatur in adipisci, obcaecati aspernatur cupiditate, sunt asperiores quaerat laborum beatae veritatis illum quas deleniti commodi distinctio eos. Laborum.</p>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo placeat beatae obcaecati veritatis reiciendis repellat rem illum. Dignissimos minus fuga cupiditate dolorem? Fuga dolor ullam accusantium sit optio soluta non?</p>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis, distinctio nobis et adipisci in recusandae vitae quam eos accusantium nulla unde! Sit eligendi voluptatum tempora temporibus suscipit obcaecati nesciunt quas autem, molestias possimus, quae ut commodi doloremque exercitationem, deserunt ducimus rem debitis voluptatibus officia sunt adipisci non! Reprehenderit, modi doloribus!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-xl-12 col-lg-7 mb-1">
                            <div class="card shadow mb-3">
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-info">INFO AKADEMIK</h6>
                                </div>
                                <div class="card-body">
                                    <div class="card shadow mb-3">
                                        <div class="card-body">
                                            <h5><b>BAYAR SPP TAHAP II</b> </h5>
                                            <p>24 Oktober 2022 - 07 Januari 2023</p>
                                        </div>
                                    </div>
                                    <div class="card shadow mb-3">
                                        <div class="card-body">
                                            <h5><b>MASA PERKULIAHAN II</b> </h5>
                                            <p>21 November 2022 - 07 Januari 2023</p>
                                        </div>
                                    </div>
                                    <div class="card shadow mb-3">
                                        <div class="card-body">
                                            <h5><b>UJIAN AKHIR SEMESTER</b> </h5>
                                            <p>16 Januari 2023 - 28 Januari 2023</p>
                                        </div>
                                    </div>
                                </div>

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