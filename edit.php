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
    <!-- Header -->
   <?php

include"./pengaturan/koneksi.php";
include"./fungsi/fungsi.php"; 

$nik=$_GET['nik'];
$karyawan1=mysqli_fetch_array(mysqli_query($koneksi,"select*from karyawan where nik='$nik'"));

?>

<br><br>
<h2>Edit Data Karyawan</h2>
<div class="main-w3"> 
  <form action="proses_edit.php" method="post" enctype="multipart/form-data" name="form1">
    <br>
      <table>
         <tr><td>Poto</td>
     <td> <img src="img/<?php echo $karyawan1['poto']; ?>" width="70" height="50"><input type="file" name="poto"></td>
         <tr><td>Nama</td>
     <td><input type="text" name="nama" value="<?php echo $karyawan1['nama'] ?>"></td>
     <tr><td>Tgl Lahir</td>
     <td><label>
     <td><input type="date" name="tgl_lahir" value="<?php echo $karyawan1['tgl_lahir'] ?>"></td>
     </label></td></tr>
         <tr><td>Alamat</td>
     <td><input type="text" name="alamat" value="<?php echo $karyawan1['alamat'] ?>"></td>
     <tr><td>Jenis Kelamin</td>
             <td> <select name="jeniskelamin"> <option value="">-pilih</option>
                                               <option value="P">P</option>
                                               <option value="L">L</option><?php
       $query=mysqli_query($koneksi,"select*from jeniskelamin");
       while($jeniskelamin=mysqli_fetch_array($query))
       {
       if($jeniskelamin['jeniskelamin']==$jeniskelamin['jeniskelamin'])
        {$status="selected";}
       else {$status="";}
       echo "<option value='$jeniskelamin[jeniskelamin]' $status>$jeniskelamin[jeniskelamin]</option>";
       }
     ?></select></td>
     </td></tr>
         <tr><td>Divisi</td>
         <td> <select name="divisi"> <option value="">-pilih</option>
                                     <option value="personalia">Personalia</option>
                                     <option value="Akunting">Akunting</option><?php
      $query=mysqli_query($koneksi,"select*from divisi");
      while($disisi=mysqli_fetch_array($query))
      {
      if($karyawan1['divisi']==$karyawan1['divisi'])
      {$status="selected";}
      else {$status="";}
      echo "<option value='$karyawan1[divisi]' $status>$karyawan1[divisi]</option>";
      }

        ?></select></td>
     <tr><td>Email</td>
     <td><input type="text" name="email" value="<?php echo $karyawan1['email'] ?>"></td>
        </table>
         
       <div class="btnn">
            <button type="submit">Simpan</button>
            <button type="submit" onClick="location=('dashboard_admin.php')">Kembali</button>
        </div>  
     </div>
   </form>

    <!-- Footer -->
    <footer class="footer text-center">
      <div class="container">
        <div class="row">
          <div class="col-md-4 mb-5 mb-lg-0">
            <h4 class="text-uppercase mb-4">Location</h4>
            <p class="lead mb-0">PSM Dalam
              <br>Kiracondong</p>
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
          