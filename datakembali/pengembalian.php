<?php
require_once '../koneksi.php';

//data pinjam
$id = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT * FROM tb_pinjam where id_pinjam='$id'");
$pinjam = mysqli_fetch_array($query);


$tanggal_peminjaman = new DateTime(($pinjam[7]));
$tanggal_kembali =  new DateTime();

//kd kembali
$querykembali = mysqli_query($koneksi, "SELECT max(id_kembali) as kodeTerbesar FROM tb_pengembalian");
$datakembali = mysqli_fetch_array($querykembali);
$Kode = $datakembali['kodeTerbesar'];
$urutankembali = (int) substr($Kode, 3, 4);
$urutankembali++;
$hurufkembali = "KB";
$kodekembali = $hurufkembali . sprintf("%04s", $urutankembali);


$nama = $pinjam[1];
$kelas = $pinjam[2];
$kode_buku = $pinjam[3];
$judul_buku = $pinjam[4];
$kategori = $pinjam[5];
$jumlah = $pinjam[6];
$tanggal_pinjam = $pinjam[7];
$result = $tanggal_peminjaman->format('Y-m-d');
$result1 = $tanggal_kembali->format('Y-m-d');

//==============================================
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

//hapus pemijaman
$hapus = mysqli_query($koneksi, "DELETE FROM tb_pinjam WHERE id_pinjam= '$id'");
//===============================================


if ($tanggal_peminjaman < $tanggal_kembali) {

    $nama = $pinjam[1];
    $kelas = $pinjam[2];
    $kode_buku = $pinjam[3];
    $judul_buku = $pinjam[4];
    $kategori = $pinjam[5];
    $jumlah = $pinjam[6];
    $tanggal_pinjam = $pinjam[7];

    $hari = $tanggal_peminjaman->diff($tanggal_kembali)->format("%a");

    if ($hari > 6) {
        $denda = ($hari - 6) * 1000;
        $sql = "INSERT INTO tb_pengembalian value ('$kodekembali','$nama','$kelas','$kode_buku','$judul_buku','$kategori',$jumlah,'$result','$result1',$denda)";
        $run = mysqli_query($koneksi, $sql);
        if ($run == TRUE && $datajumlah == TRUE && $datakode == TRUE  && $databuku == TRUE && $updatebuku == TRUE && $hapus == TRUE) {
            header('Location: index.php');
            echo "<script>window.location=' index.php'</script>";
        } else {
            die('gagal!' . mysqli_error($koneksi));
        }
    } else {
        $denda = 0;
        $sql = "INSERT INTO tb_pengembalian value ('$kodekembali','$nama','$kelas','$kode_buku','$judul_buku','$kategori',$jumlah,'$result','$result1',$denda)";
        $run = mysqli_query($koneksi, $sql);
        if ($run == TRUE && $datajumlah == TRUE && $datakode == TRUE  && $databuku == TRUE && $updatebuku == TRUE && $hapus == TRUE) {
            header('Location: index.php');
            echo "<script>window.location=' index.php'</script>";
        } else {
            die('gagal!' . mysqli_error($koneksi));
        }
    }
} else {
    echo "error";
}
