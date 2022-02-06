<?php
$konn = mysqli_connect('localhost', 'root', '', 'UAS_1904030062');

// pemanggilan tabel
function query($query)
{
  global $konn;

  //mengambil seluruh data pada tabel
  $result = mysqli_query($konn, $query);

  if (mysqli_num_rows($result) == 1) {
    return mysqli_fetch_assoc($result);
  }

  // pemanggilan elemen data dengan rapih
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}
function tambah($data)
{
  global $konn;

  $judul = htmlspecialchars($data['judul']);
  $foto_buku = htmlspecialchars($data['foto_buku']);
  $kode_buku = htmlspecialchars($data['kode_buku']);
  $tema = htmlspecialchars($data['tema']);
  $pengarang = htmlspecialchars($data['pengarang']);
  $tahun_penerbit = htmlspecialchars($data['tahun_penerbit']);
  $jumlah_hal = htmlspecialchars($data['jumlah_hal']);

  $query = "INSERT INTO perpustakaan
  VALUES
  (null,'$judul','$foto_buku','$kode_buku','$tema','$pengarang','$tahun_penerbit', '$jumlah_hal');";
  mysqli_query($konn, $query);

  echo mysqli_error($konn);
  return mysqli_affected_rows($konn);
}

function hapus($id)
{
  global $konn;
  mysqli_query($konn, "DELETE FROM perpustakaan WHERE id =$id") or die(mysqli_error($konn));
  return mysqli_affected_rows($konn);
}

function edit($data)
{
  global $konn;

  $id = $data['id'];
  $judul = htmlspecialchars($data['judul']);
  $foto_buku =  htmlspecialchars($data['foto_buku']);
  $kode_buku =  htmlspecialchars($data['kode_buku']);
  $tema =  htmlspecialchars($data['tema']);
  $pengarang =  htmlspecialchars($data['pengarang']);
  $tahun_penerbit =  htmlspecialchars($data['tahun_penerbit']);
  $jumlah_hal =  htmlspecialchars($data['jumlah_hal']);

  $query = "UPDATE perpustakaan SET
  judul ='$judul',
  foto_buku ='$foto_buku',
  kode_buku ='$kode_buku',
  tema ='$tema',
  pengarang ='$pengarang',
  tahun_penerbit ='$tahun_penerbit'
  jumlah_hal ='$jumlah_hal'
  WHERE id =$id;";

  mysqli_query($konn, $query);

  echo mysqli_error($konn);
  return mysqli_affected_rows($konn);
}

function cari($keyword)
{
  global $konn;

  $query = "SELECT * FROM perpustakaan WHERE judul LIKE'%$keyword%'";
  $result = mysqli_query($konn, $query);

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}

function carianggt($keyword)
{
  global $konn;

  $query = "SELECT * FROM anggota_perpus WHERE nama LIKE'%$keyword%'";
  $result = mysqli_query($konn, $query);

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}

function hapusanggt($id)
{
  global $konn;
  mysqli_query($konn, "DELETE FROM anggota_perpus WHERE id=$id") or die(mysqli_error($konn));
  return mysqli_affected_rows($konn);
}

function editanggt($data)
{
  global $konn;

  $id = $data['id'];
  $foto_anggota = htmlspecialchars($data['foto_anggota']);
  $nama =  htmlspecialchars($data['nama']);
  $jenis_kelamin =  htmlspecialchars($data['jenis_kelamin']);
  $id_anggota =  htmlspecialchars($data['id_anggota']);
  $alamat =  htmlspecialchars($data['alamat']);
  $tingkatan =  htmlspecialchars($data['tingkatan']);
  $tanggal_lahir =  htmlspecialchars($data['tanggal_lahir']);
  $no_hp =  htmlspecialchars($data['no_hp']);

  $query = "UPDATE perpustakaan SET
  foto_anggota ='$foto_anggota',
  nama ='$nama',
  jenis_kelamin ='$jenis_kelamin',
  id_anggota ='$id_anggota',
  alamat ='$alamat',
  tingkatan ='$tingkatan',
  tanggal_lahir ='$tanggal_lahir'
  no_hp ='$no_hp'
  WHERE id =$id;";

  mysqli_query($konn, $query);

  echo mysqli_error($konn);
  return mysqli_affected_rows($konn);
}

function tambahanggt($data)
{
  global $konn;

  $foto_anggota = htmlspecialchars($data['foto_anggota']);
  $nama = htmlspecialchars($data['nama']);
  $jenis_kelamin = htmlspecialchars($data['jenis_kelamin']);
  $id_anggota = htmlspecialchars($data['id_anggota']);
  $alamat = htmlspecialchars($data['alamat']);
  $tingkatan = htmlspecialchars($data['tingkatan']);
  $tanggal_lahir = htmlspecialchars($data['tanggal_lahir']);
  $no_hp = htmlspecialchars($data['no_hp']);

  $query = "INSERT INTO perpustakaan
  VALUES
  (null,'$foto_anggota','$nama','$jenis_kelamin','$id_anggota','$alamat','$tingkatan', '$tanggal_lahir','$no_hp');";
  mysqli_query($konn, $query);

  echo mysqli_error($konn);
  return mysqli_affected_rows($konn);
}
