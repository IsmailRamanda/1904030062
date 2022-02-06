<?php

require 'functions.php';
$camaba = query("SELECT * FROM perpustakaan");

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
                        <li class="nav-item"><a class="nav-link" href="anggota.php">Angpus</a></li>
                        <li class="nav-item"><a class="nav-link" href="#page-top">input</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="col-md-15 p-5 pt-19">
            <br>
            <!-- Konten -->
            <h3><i class="fas fa-users"></i> <br>Daftar Input Data</h3>
            <hr>
            
            <!-- Akhir pencarian data -->
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">kategori Input</th>
                        <th scope="col">Opsi</th>
                    </tr>
                </thead>
                
                <tbody>
                    <?php $no = 1; ?>
                        <tr>
                            <th scope="row"><?php echo $no; ?></th>
                            <td>Input Buku</td>
                            <td><a href="tambah1.php" class="btn btn-warning" role="button">INPUT</a></td>   
                        </tr>
                        <?php $no++ ?>
                        <br>
                        <tr>
                            <th scope="row"><?php echo $no; ?></th>
                            <td>Input Anggota perpustakaan</td>
                            <td><a href="tambah2.php" class="btn btn-warning" role="button">INPUT</a></td>
                            
                        </tr>
                        <?php $no++ ?>
                </tbody>
            </table>
            <!-- Akhir Konten -->
        </div>
    </div>
       
        <!-- Footer-->
        <footer class="bg-secondary py-4 ">
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
