<?php 

// panggil file yang dibutuhkan
require_once '../koneksi.php';

if(!isset($_GET['id'])){
	header('Location: index.php');
}

$id = $_GET['id'];
$query = mysqli_query($koneksi, "DELETE FROM admin WHERE nama= '$id'");
if($query){
	header('Location: index.php');
} else die("gagal!" . mysqli_error($koneksi));

?>