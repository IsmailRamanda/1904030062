<?php

require 'functions.php';
$anggota = query("SELECT * FROM anggota_perpus");

if (isset($_POST['cari'])) {
    $anggota = carianggt($_POST['keyword']);
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title></title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap Icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- SimpleLightbox plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-secondary fixed-top " id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#page-top">Buku Pintar</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto my-2 my-lg-0">
                        <li class="nav-item"><a class="nav-link" href="index.php">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="buku.php">Buku</a></li>
                        <li class="nav-item"><a class="nav-link" href="#page-top">Angpus</a></li>
                        <li class="nav-item"><a class="nav-link" href="input.php">Input</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="col-md-15 p-5 pt-19">
            <br>
            <!-- Konten -->
            <h3><i class="fas fa-users"></i> <br>Daftar Anggota Perpustakaan</h3>
            <hr>
            <!-- Pencarian data -->
            <form action="" method="POST">
                <input type="text" id="keyword" size="50" name="keyword" placeholder="masukan keyword" autocomplete="off">
                <button type="submit" class="btn btn-primary" name="cari">CARI</button>
            </form>

            <br>
            <hr>
            <!-- Akhir pencarian data -->
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">nama</th>
                        <th scope="col">tingkatan</th>
                        <th scope="col">Opsi</th>
                    </tr>
                </thead>

                <?php if (empty($anggota)) : ?>
                    <tr>
                        <td colspan="4" class="alert alert-danger text-center" role="alert">
                            <p><b>
                                    Data Anggota tidak ditemukan</p>
                            </b>
                        </td>
                    </tr>
                <?php endif; ?>
                <tbody>
                    <?php $no = 1; ?>
                    <?php foreach ($anggota as $agt) : ?>
                        <tr>
                            <th scope="row"><?php echo $no; ?></th>
                            <td><img src="assets/img/<?php echo $agt['foto_anggota']; ?>" width="120px"></td>
                            <td><?php echo $agt['nama']; ?></td>
                            <td><?php echo $agt['tingkatan']; ?></td>
                            <td><a href="detail2.php?id=<?= $agt['id']; ?>" class="btn btn-warning" role="button">detail</a></td>
                        </tr>
                        <?php $no++ ?>
                    <?php endforeach ?>
                </tbody>
            </table>
            <!-- Akhir Konten -->
        </div>
    </div>
       
        <!-- Footer-->
        <footer class="bg-secondary py-3">
            <div class="container px-4 px-lg-5"><div class="small text-center text-black">Copyright &copy; 2022 - Ismail Ramanda Putra</div></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- SimpleLightbox plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
