<?php

session_start();
include"./pengaturan/koneksi.php"; 
include"./fungsi/fungsi.php"; 

$poto=$_FILES['poto']['name'];
$sumber_poto=$_FILES['poto']['tmp_name'];
$nama=$_POST['nama'];
$tgl_lahir=$_POST['tgl_lahir'];
$alamat=$_POST['alamat'];
$jeniskelamin=$_POST['jeniskelamin'];
$divisi=$_POST['divisi'];
$id_admin=$_SESSION['id_admin'];
$email=$_POST['email'];

	$query="INSERT INTO karyawan1 SET nik='',poto='$poto', sumber_poto='$sumber_poto', nama='nama', tgl_lahir='$tgl_lahir', jeniskelamin='$jeniskelamin', divisi='$divisi',	 alamat='$alamat',email='email',now()";
 	move_uploaded_file($sumber_poto,"./img/".$poto); 
	mysqli_query($koneksi, $query);
 	if($query)
 	{
 	  msgbox("berhasil dibuat","./tampil.php"); 
 	}
    else
    {
    msgbox("Gagal terdafar","./dashboard_admin.php"); 
    }

?>