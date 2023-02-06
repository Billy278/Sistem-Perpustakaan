<?php

// panggil file yang dibutuhkan
require_once '../koneksi.php';

$querybuku = mysqli_query($koneksi, "SELECT max(kd_buku) as kodeTerbesar FROM tb_buku");
$databuku = mysqli_fetch_array($querybuku);
$Kode = $databuku['kodeTerbesar'];
$urutanbuku = (int) substr($Kode, 3, 5);
$urutanbuku++;
$hurufbuku = "BK";
$kodebuku = $hurufbuku . sprintf("%05s", $urutanbuku);

$judul_buku = $_POST['judul_buku'];
$kategori = $_POST['kategori_buku'];
$penulis = $_POST['penulis_buku'];
$penerbit = $_POST['penerbit_buku'];
$tahun = $_POST['tahun_terbit'];
$stok = $_POST['stok_buku'];

$sql = "INSERT INTO tb_buku value ('$kodebuku','$judul_buku','$kategori','$penulis','$penerbit','$tahun',$stok)";
$run = mysqli_query($koneksi, $sql);
if ($run) {
	header('Location: index.php');
	echo "<script>window.location=' index.php'</script>";
} else {
	die('gagal!' . mysqli_error($koneksi));
}
