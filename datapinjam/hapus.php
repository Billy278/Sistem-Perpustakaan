<?php

// panggil file yang dibutuhkan
require_once '../koneksi.php';



$id = $_GET['id'];

//jumlah pinjam
$queryjumlah = mysqli_query($koneksi, "SELECT jumlah FROM tb_pinjam where id_pinjam='$id'");
$datajumlah = mysqli_fetch_array($queryjumlah);

//kode
$querykode = mysqli_query($koneksi, "SELECT kd_buku FROM tb_pinjam where id_pinjam='$id'");
$datakode = mysqli_fetch_array($querykode);


//data buku
$querybuku = mysqli_query($koneksi, "SELECT stok FROM tb_buku where kd_buku='$datakode[0]'");
$databuku = mysqli_fetch_array($querybuku);

$kembali[0] = $databuku[0] + $datajumlah[0];

//update buku
$updatebuku = mysqli_query($koneksi, "UPDATE tb_buku set stok=$kembali[0] where kd_buku='$datakode[0]'");

$query = mysqli_query($koneksi, "DELETE FROM tb_pinjam WHERE id_pinjam= '$id'");
if ($datajumlah == TRUE && $datakode == TRUE && $databuku == TRUE && $updatebuku == TRUE && $query == TRUE) {
    header('Location: index.php');
} else die("gagal!" . mysqli_error($koneksi));
