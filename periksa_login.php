<?php 
// menghubungkan dengan koneksi
include 'koneksi.php';

// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = md5($_POST['password']);

$login = mysqli_query($koneksi, "SELECT * FROM user WHERE user_username='$username' AND user_password='$password'");
$cek = mysqli_num_rows($login);

if($cek > 0){
	session_start();
	$data = mysqli_fetch_assoc($login);
	$_SESSION['id'] = $data['user_id'];
	$_SESSION['nama'] = $data['user_nama'];
	$_SESSION['username'] = $data['user_username'];
	$_SESSION['level'] = $data['user_level'];

	if($data['user_level'] == "administrator"){
		$_SESSION['status'] = "administrator_logedin";
		header("location:admin/");
		exit();
		
	}else if($data['user_level'] == "marketing"){
		$_SESSION['status'] = "marketing_logedin";
		header("location:marketing/");
		exit();

	}else{
		header("location:index.php?alert=gagal");
	}
}else{
	header("location:index.php?alert=gagal");
}
