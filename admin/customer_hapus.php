<?php 
include '../koneksi.php';
$id  = $_GET['id'];

// mysqli_query($koneksi, "update transaksi set transaksi_kategori='1' where transaksi_kategori='$id'");

mysqli_query($koneksi, "delete from customer where customer_id='$id'");
header("location:customer.php");