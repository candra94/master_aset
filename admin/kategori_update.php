<?php 
include '../koneksi.php';
$id  = $_POST['id'];
$nama_customer  = $_POST['nama_customer'];
$alamat  = $_POST['alamat'];

mysqli_query($koneksi, "update kategori set nama_customer='$nama_customer', alamat='$alamat' where kategori_id='$id'");
header("location:kategori.php");