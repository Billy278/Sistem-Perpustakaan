<?php

// panggil file yang dibutuhkan
require_once '../koneksi.php';


$nama = $_POST['nama_peminjam'];
$kelas = $_POST['kelas'];
$kode_buku = $_POST['kode_buku'];
$judul_buku = $_POST['judul_buku'];
$kategori = $_POST['kategori_buku'];
$jumlah = $_POST['jumlah_buku'];
$tanggal_pinjam = $_POST['tgl_pinjam'];

//kd pinjam
$querypinjam = mysqli_query($koneksi, "SELECT max(id_pinjam) as kodeTerbesar FROM tb_pinjam");
$datapinjam = mysqli_fetch_array($querypinjam);
$Kode = $datapinjam['kodeTerbesar'];
$urutanpinjam = (int) substr($Kode, 3, 4);
$urutanpinjam++;
$hurufpinjam = "PJ";
$kodepinjam = $hurufpinjam . sprintf("%04s", $urutanpinjam);


//data buku
$querybuku = mysqli_query($koneksi, "SELECT stok FROM tb_buku where kd_buku='$kode_buku'");
$databuku = mysqli_fetch_array($querybuku);
if ($databuku[0] < $jumlah) {
	echo "<script>
	alert('Jumlah Peminjaman lebih besar dari pada stok');
	window.location='peminjaman.php?id=$kode_buku'</script>";
} else {
	if ($jumlah <= 0) {
		echo "<script>
	alert('tidak boleh menginput bilangan negatif/nol');
	window.location='peminjaman.php?id=$kode_buku'</script>";
	} else {
		$hasil = $databuku[0] - $jumlah;
		$sqlbuku = "UPDATE tb_buku set stok=$hasil where kd_buku='$kode_buku'";
		$runbuku = mysqli_query($koneksi, $sqlbuku);
		//peminjaman
		$sql = "INSERT INTO tb_pinjam value ('$kodepinjam','$nama','$kelas','$kode_buku','$judul_buku','$kategori',$jumlah,'$tanggal_pinjam')";
		$run = mysqli_query($koneksi, $sql);
		if ($runbuku == TRUE && $run == TRUE) {

			header('Location: index.php');
			echo "<script>window.location=' index.php'</script>";
		} else {
			die('gagal!' . mysqli_error($koneksi));
		}
	}
}
