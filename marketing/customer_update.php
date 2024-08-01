<?php 
include '../koneksi.php';
$id  = $_POST['id'];
$nama_customer  = $_POST['nama_customer'];
$marketing  = $_POST['marketing'];
$email  = $_POST['email'];
$email  = $_POST['nama_pic1'];
$contact_pic1  = $_POST['contact_pic1'];
$email  = $_POST['nama_pic2'];
$contact_pic2  = $_POST['contact_pic2'];
$tlp_kantor  = $_POST['tlp_kantor'];
$alamat  = $_POST['alamat'];
$keterangan  = $_POST['keterangan'];
$user_entry  = $_POST['user_entry'];
$time_entry  = $_POST['time_entry'];

mysqli_query($koneksi, "update customer set nama_customer='$nama_customer',marketing='$marketing',
email='$email',nama_pic1='$nama_pic1',contact_pic1='$contact_pic1',nama_pic2='$nama_pic2',contact_pic2='$contact_pic2', 
tlp_kantor='$tlp_kantor',alamat='$alamat',keterangan='$keterangan',user_entry='$user_entry',time_entry='$time_entry' where customer_id='$id'");
header("location:customer.php");