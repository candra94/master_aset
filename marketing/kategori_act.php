<?php 
include '../koneksi.php';
$nama_customer  = $_POST['nama_customer'];
$alamat  = $_POST['alamat'];

mysqli_query($koneksi, "insert into kategori values (NULL,'$nama_customer','$alamat')");
header("location:kategori.php");