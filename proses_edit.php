<?php

session_start();
include"./pengaturan/koneksi.php"; 
include"./fungsi/fungsi.php"; 

$nik  = $_POST['nik'];
$poto=$_FILES['poto']['name'];
$sumber_poto=$_FILES['poto']['tmp_name'];
$nama=$_POST['nama'];
$tgl_lahir=$_POST['tgl_lahir'];
$alamat=$_POST['alamat'];
$jeniskelamin=$_POST['jeniskelamin'];
$divisi=$_POST['divisi'];
$email=$_POST['email'];

	$query="UPDATE tb_karyawan  SET nik='$nik',nama='$nama',tgl_='$tgl_lahir', jenis_kelamin='$jenis_kelamin',divisi='$divisi',alamat='$alamat', email='$email'";
mysqli_query($koneksi, $query);

header("location:tampil.php");

?>