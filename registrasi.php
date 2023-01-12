<!DOCTYPE html>
<html lang="en">

<head>
    <!-- PHP -->
    <!-- <?php include('func_login.php'); ?> -->
    <!-- END PHP -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- BOOSTRAP CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <title>Registrasi Anggota</title>
</head>

<body style="background-color: #4BB59B;">
    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card bg-light p-5 shadow p-3">
                        <!-- <div class="text-center mb-3">
                            <a href="../../index.php" target="_blank"><img src="../images/logo-full.png" alt="" width="250px"></a>
                        </div> -->
                        <h5 class="text-center mb-4 text-muted">Registrasi Anggota</h5>
                        <form action="function/func_register.php" method="POST" enctype="multipart/form-data">
                            <!-- Email input -->
                            <div class="form-outline mb-3">
                                <label class="form-label" for="id_anggota">NIM</label>
                                <input type="text" id="nim" name="nim" placeholder="masukkan nim" class="form-control" required />
                            </div>
                            <div class="form-outline mb-3">
                                <label class="form-label" for="nama">Nama</label>
                                <input type="text" id="nama" name="nama" placeholder="masukkan nama" class="form-control" required />
                            </div>
                            <div class="form-outline mb-3">
                                <label class="form-label" for="username">Username</label>
                                <input type="text" id="username" name="username" placeholder="masukkan username" class="form-control" required />
                            </div>
                            <div class="form-outline mb-3">
                                <label class="form-label" for="alamat">Prodi</label>
                                <input type="text" id="prodi" name="prodi" placeholder="masukkan prodi" class="form-control" required />
                            </div>
                            <div class="form-outline mb-3">
                                <label class="form-label" for="alamat">Semester</label>
                                <input type="text" id="semester" name="semester" placeholder="masukkan semester" class="form-control" required />
                            </div>
                            <div class="form-outline mb-3">
                                <label class="form-label" for="notelp">Jenis Kelamin</label>
                                <input type="text" id="jenis_kelamin" name="jenis_kelamin" placeholder="masukkan jenis kelamin" class="form-control" required />
                            </div>
                            <div class="form-outline mb-3">
                                <label class="form-label" for="notelp">Password</label>
                                <input type="password" id="password" name="password" placeholder="masukkan password" class="form-control" minlength="6" required />
                            </div>
                            <div class="form-outline mb-3">
                                <label class="form-label" for="notelp">Konfirmasi Password</label>
                                <input type="password" id="password2" name="password2" placeholder="masukkan password" class="form-control" minlength="6" required />
                            </div>
                            <!-- Submit button -->
                            <div class="d-grid gap-2 col-7 mx-auto">
                                <button type="submit" name="register" class="btn btn-primary">Daftar</button>
                            </div>
                            <div class="d-grid gap-2 col-7 mx-auto mt-2">
                                <a class="btn btn-secondary" href="javascript:history.back()">Kembali</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    </section>
    <!--********************************** SCRIPT ***********************************-->
    <!-- JAVASCRIPT RECAPTCHA -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <!-- SCRIPT -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- alert berhasil -->
    <?php if (isset($_SESSION['flash-y'])) { ?>
        <script>
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 10000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })
            Toast.fire({
                icon: 'success',
                title: '<?php echo $_SESSION['flash-y']; ?>'
            })
        </script>
    <?php unset($_SESSION['flash-y']);
    } ?>

    <!-- alert gagal -->
    <?php if (isset($_SESSION['flash-n'])) { ?>
        <script>
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 10000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })
            Toast.fire({
                icon: 'error',
                title: '<?php echo $_SESSION['flash-n']; ?>'
            })
        </script>
    <?php unset($_SESSION['flash-n']);
    } ?>


    <?php if (isset($_SESSION['flash-l'])) { ?>
        <script>
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })
            Toast.fire({
                icon: 'info',
                title: '<?php echo $_SESSION['flash-l']; ?>'
            })
        </script>
    <?php unset($_SESSION['flash-l']);
    } ?>
</body>

</html>