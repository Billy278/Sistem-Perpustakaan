<?php
require_once '../koneksi.php';
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];

$sql = "INSERT INTO admin values ('$nama','$username','$password')";
$run = mysqli_query($koneksi, $sql);
if ($run) {
	header('Location: index.php');
	echo "<script>window.location=' index.php'</script>";
} else {
	die('gagal!' . mysqli_error($koneksi));
}
