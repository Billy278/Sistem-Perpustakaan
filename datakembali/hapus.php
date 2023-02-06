<?php

// panggil file yang dibutuhkan
require_once '../koneksi.php';



$id = $_GET['id'];



$query = mysqli_query($koneksi, "DELETE FROM tb_pengembalian WHERE id_kembali= '$id'");
if ($query == TRUE) {
    header('Location: index.php');
} else die("gagal!" . mysqli_error($koneksi));
