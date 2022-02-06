<?php
require 'functions.php';

$id = $_GET['id'];
$anggota = query("SELECT * FROM anggota_perpus WHERE id = $id");

if (isset($_POST['edit'])) {
  if (editanggt($_POST) > 0) {
    echo
    "<script>
    alert('data berhasil di edit');
    document.location.href = 'anggota.php';
    </script>";
  } else {
    echo
    "<script>
    alert('data gagal di edit');
   </script>";
  }
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
                        <li class="nav-item"><a class="nav-link" href="anggota.php">Angpus</a></li>
                        <li class="nav-item"><a class="nav-link" href="input.php">Input</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="col-md-15 p-5 pt-5">
      <!-- Konten -->
      <h3><i class="fas fa-users"></i><br>Edit Data anggota Perpustakaan </h3>
      <hr>
      <form method="POST" action="">

        <input type="hidden" class="form-control" value="<?= $anggota['id'] ?>" name="id">
        <div class="mb-3">
          <label for="foto_anggota">Foto Anggota : </label>
          <input type="text" class="form-control" id="foto_anggota" value="<?= $anggota['foto_anggota'] ?>" placeholder="foto anggota " name="foto_anggota" autofocus required autocomplete="off">
        </div>
        <div class="mb-3">
          <label for="nama">Nama Lengkap : </label>
          <input type="text" class="form-control" id="nama" value="<?= $anggota['nama'] ?>" placeholder="nama lengkap " name="nama" required autocomplete="off">
        </div>
        <div class="mb-3">
          <label for="jenis_kelamin">Jenis Kelamin : </label>
          <input type="text" class="form-control" id="jenis_kelamin" value="<?= $anggota['jenis_kelamin'] ?>" placeholder="jenis kelamin " name="jenis_kelamin" required autocomplete="off">
        </div>
        <div class="mb-3">
          <label for="id_anggota">Id Anggota : </label>
          <input type="text" class="form-control" id="id_anggota" value="<?= $anggota['id_anggota'] ?>" placeholder="id anggota" name="id_anggota" required autocomplete="off">
        </div>
        <div class="mb-3">
          <label for="alamat">Alamat : </label>
          <input type="text" class="form-control" id="alamat" value="<?= $anggota['alamat'] ?>" placeholder="alamat" name ="alamat"required autocomplete="off">
        </div>
        <div class="mb-3">
          <label for="tingkatan">Tingkatan : </label>
          <input type="text" class="form-control" id="tingkatan" value="<?= $anggota['tingkatan'] ?>" placeholder="pengarang" name="pengarang" required autocomplete="off">
        </div>
        <div class="mb-3">
          <label for="tanggal_lahir">Tanggal Lahir : </label>
          <input type="text" class="form-control" id="tanggal_lahir" value="<?= $anggota['tanggal_lahir'] ?>" placeholder="tanggal lahir" name ="tanggal_lahir"required autocomplete="off">
        </div>
        <div class="mb-3">
          <label for="no_hp">NO.Hp : </label>
          <input type="text" class="form-control" id="no_hp" value="<?= $anggota['no_hp'] ?>" placeholder="tulis no hp" name="no_hp" required autocomplete="off">
        </div>
        <button type="submit" class="btn btn-primary" name="edit">Simpan</button>
      </form>

      <!-- Akhir Konten -->
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
