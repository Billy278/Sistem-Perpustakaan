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
						$tanggal_kembali = $_POST['tgl_kembali'];
						$denda = $_POST['denda'];
						
						
						$sql="INSERT INTO tb_pengembalian value ('$nama','$kelas','$kode_buku','$judul_buku','$kategori',$jumlah,'$tanggal_pinjam','$tanggal_kembali','$denda')";
						$run=mysqli_query($koneksi,$sql);
						if($run){

							header('Location: index.php');
							echo "<script>window.location=' index.php'</script>";
						}
						else{
							 die('gagal!' . mysqli_error($koneksi));
						}

?>