<?php

// panggil file yang dibutuhkan

require_once '../koneksi.php';

$id = $_POST['id_pinjam'];
$nama = $_POST['nama_peminjam'];
$kelas = $_POST['kelas'];
$kode = $_POST['kode_buku'];
$judul = $_POST['judul_buku'];
$kategori = $_POST['kategori'];
$jumlah = $_POST['jumlah_buku'];
$tgl = $_POST['tgl_pinjam'];
if (isset($_POST['simpan'])) {

    //data buku
    $querybuku = mysqli_query($koneksi, "SELECT stok FROM tb_buku where kd_buku='$kode'");
    $databuku = mysqli_fetch_array($querybuku);
    if ($databuku[0] < $jumlah) {
        echo "<script>
	alert('Jumlah Peminjaman lebih besar dari pada stok');
	window.location='edit_pinjam.php?id=$id'</script>";
    } else {
        if ($kurang >= $jumlah) {
            $hasil = $kurang - $jumlah;
            $query = mysqli_query($koneksi, "UPDATE tb_pinjam SET nama='$nama', kelas = '$kelas', kd_buku = '$kode', judul_buku = '$judul', kategori = '$kategori',jumlah = '$hasil', tanggal_pinjam = '$tgl'  WHERE id_pinjam = '$id'");
            if ($query) {

                header('Location: index.php');
            } else die('gagal!' . mysqli_error($koneksi));
        } else if ($kurang <= $jumlah) {
            $hasil = $jumlah - $kurang;
            $query = mysqli_query($koneksi, "UPDATE tb_pinjam SET nama='$nama', kelas = '$kelas', kd_buku = '$kode', judul_buku = '$judul', kategori = '$kategori',jumlah = '$hasil', tanggal_pinjam = '$tgl'  WHERE id_pinjam = '$id'");
            if ($query) {

                header('Location: index.php');
            } else die('gagal!' . mysqli_error($koneksi));
        }
    }
}
