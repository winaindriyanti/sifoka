<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> SIFOKA </title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/freelancer.min.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">SIFOKA</a>
        <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="tambah.php">Input Data</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="tampil.php">Data Karyawan</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="logout.php">Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <header class="masthead bg-primary text-white text-center">
      <div class="container">
      <h1 class="text-uppercase mb-0">Data Karyawan SIFOKA</h1>
      <br>
<table align="center" width="80%" border="1" cellspacing="0" cellpadding="0">

<tr>
<td width="5%" bgcolor="#b0d5d0"><div align="center">NIK</td>
<td width="15%" bgcolor="#b0d5d0"><div align="center">Poto</td>
<td width="60%" bgcolor="#b0d5d0"><div align="center">Nama</td>
<td width="15%" bgcolor="#b0d5d0"><div align="center">Tgl Lahir</td>
<td width="8%" bgcolor="#b0d5d0"><div align="center">Alamat</td>
<td width="15%" bgcolor="#b0d5d0"><div align="center">Jenis Kelamin</td>
<td width="8%" bgcolor="#b0d5d0"><div align="center">Divisi</td>
<td width="8%" bgcolor="#b0d5d0"><div align="center">Email</td>
<td colspan="2" bgcolor="#b0d5d0"><div align="center">Aksi</div></td>
</tr>

<?php
include "./pengaturan/koneksi.php";
include "./fungsi/fungsi.php";
$n=1;
$query= "SELECT * FROM karyawan1" ;
$sql = mysqli_query($koneksi, $query); 
while($karyawan1 = mysqli_fetch_array($sql))
{

    ?>

    <tr>
      <td><div align="center"><?php echo $n; ?></td>
      <td><div align="center"><?php echo "<img src=img/$karyawan1[poto] width='200px'>"; ?></td>
      <td><div align="center"><?php echo $karyawan1['nama']; ?></td>
      <td><div align="center"><?php echo $karyawan1['tgl_lahir']; ?></td>
      <td><div align="center"><?php echo $karyawan1['alamat']; ?></td>
      <td><div align="center"><?php echo $karyawan1['jeniskelamin']; ?></td>
      <td><div align="center"><?php echo $karyawan1['divisi']; ?></td>
      <td><div align="center"><?php echo $karyawan1['email']; ?></td>
      <td width="18%"><div align="center"><?php echo "<a href=edit.php?nik=$karyawan1[nik]> <button> Edit </button></a>"; ?></td>
      <td width="18%"><div align="center"><?php echo "<a href=hapus.php?nik=$karyawan1[nik]> <button> Hapus </button></a>"; ?></td>
    </tr>

    <?php
    $n++; 
}
?>
</table>

      </div>
    </header>
     <!-- Footer -->
    <footer class="footer text-center">
      <div class="container">
        <div class="row">
          <div class="col-md-4 mb-5 mb-lg-0">
            <h4 class="text-uppercase mb-4">Location</h4>
            <p class="lead mb-0">PSM Dalam
              <br>Kiaracondong</p>
          </div>
          <div class="col-md-4 mb-5 mb-lg-0">
            <h4 class="text-uppercase mb-4">Around the Web</h4>
            <ul class="list-inline mb-0">
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fa fa-fw fa-facebook"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fa fa-fw fa-google-plus"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fa fa-fw fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fa fa-fw fa-linkedin"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fa fa-fw fa-dribbble"></i>
                </a>
              </li>
            </ul>
          </div>
         