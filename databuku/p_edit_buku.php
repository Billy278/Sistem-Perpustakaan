<?php 

// panggil file yang dibutuhkan

require_once '../koneksi.php';

	$kode = $_POST['kode_buku'];
	$judul = $_POST['judul_buku'];
	$kategori = $_POST['kategori'];
	$penulis = $_POST['penulis'];
    $penerbit = $_POST['penerbit'];
    $tahun = $_POST['tahun'];
    $stok = $_POST['stok'];

	

		$query = mysqli_query($koneksi, "UPDATE tb_buku SET  judul_buku = '$judul', kategori = '$kategori', penulis_buku = '$penulis', penerbit_buku = '$penerbit',tahun_terbit = '$tahun', stok = $stok WHERE kd_buku = '$kode'");

	if($query){
		
		header('Location: index.php');
	} else die('gagal!' . mysqli_error($koneksi));


?>