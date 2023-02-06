<?php

// panggil file yang dibutuhkan
require_once '../koneksi.php';

if (!isset($_GET['id'])) {
	header('Location: index.php');
}

$id = $_GET['id'];
$query1 = mysqli_query($koneksi, "DELETE FROM tb_buku WHERE kd_buku= '$id'");

//peminjaman
$query2 = mysqli_query($koneksi, "DELETE FROM tb_pinjam WHERE kd_buku= '$id'");

if ($query1 == TRUE && $query2 == TRUE) {
	header('Location: index.php');
} else die("gagal!" . mysqli_error($koneksi));
