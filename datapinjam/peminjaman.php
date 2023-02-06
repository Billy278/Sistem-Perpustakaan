<?php
require_once("../koneksi.php");
session_start();
if ($_SESSION['status'] != "login") {
    header("location:index.php?pesan=belum_login");
}

$id = $_GET['id'];
$query1 = mysqli_query($koneksi, "SELECT  kd_buku,judul_buku,kategori,penulis_buku,penerbit_buku,tahun_terbit FROM tb_buku where kd_buku='$id'");
$buku1 = mysqli_fetch_assoc($query1);
?>
<!DOCTYPE html>
<html lang="en">


<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sistem Perpustakaan</title>

    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="../home.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-book"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Sistem Perpustakaan</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="../home.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Menu
            </div>

            <!-- Nav Item - Data Buku -->
            <li class="nav-item" style="margin-bottom: -16px !important;">
                <a class="nav-link collapsed" href="../databuku/index.php">
                    <i class="fas fa-fw fa-book"></i>
                    <span>Data Buku</span>
                </a>
            </li>

            <!-- Nav Item - Data Peminjaman -->
            <li class="nav-item" style="margin-bottom: -16px !important;">
                <a class="nav-link collapsed" href="index.php">
                    <i class="fas fa-fw fa-arrow-circle-up"></i>
                    <span>Data Peminjaman</span>
                </a>
            </li>

            <!-- Nav Item - Data Pengembalian -->
            <li class="nav-item" style="margin-bottom: -16px !important;">
                <a class="nav-link collapsed" href="../datakembali/index.php">
                    <i class="fas fa-fw fa-arrow-circle-down"></i>
                    <span>Data Pengembalian</span>
                </a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="../akun/index.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Tambah akun</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-file-alt"></i>
                    <span>Laporan</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">laporan:</h6>
                        <a class="collapse-item" href="../laporan/laporanbuku.php">Laporan data Buku</a>
                        <a class="collapse-item" href="../laporan/laporankembali.php">Laporan Data pengembalian</a>
                    </div>
                </div>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">


        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Alerts -->


                        <!-- Nav Item - Messages -->

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">selamat datang
                                    <?php echo $_SESSION['username'] ?></span>
                                <img class="img-profile rounded-circle" src="../img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">

                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="../logout.php" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Data Peminjaman</h1>
                    </div>


                    <div class="row">
                        <div class="col-lg">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <form method="post" action="tambah_pinjam.php">
                                        <div class="mt-3 mb-3">
                                            <label for="nama_peminjam" class="form-label">Nama
                                                Peminjam</label>
                                            <input type="text" class="form-control" name="nama_peminjam" id="nama_peminjam" placeholder="Masukkan nama peminjam...">
                                        </div>
                                        <div class="mb-3">
                                            <label for="kelas" class="form-label">Kelas</label>
                                            <input class="form-control" list="datalistOptions" name="kelas" id="kode_buku" placeholder="Masukkan Kelas...">
                                            <datalist id="datalistOptions">
                                                <option value="X-IPA-1">
                                                <option value="X-IPA-2">
                                                <option value="X-IPA-3">
                                                <option value="X-IPA-4">
                                                <option value="XI-IPA-1">
                                                <option value="XI-IPA-2">
                                                <option value="XI-IPA-3">
                                                <option value="XI-IPA-4">
                                                <option value="XII-IPA-1">
                                                <option value="XII-IPA-2">
                                                <option value="XII-IPA-3">
                                                <option value="XII-IPA-4">
                                                <option value="X-IPS-1">
                                                <option value="X-IPS-2">
                                                <option value="X-IPS-3">
                                                <option value="X-IPS-4">
                                                <option value="XI-IPS-1">
                                                <option value="XI-IPS-2">
                                                <option value="XI-IPS-3">
                                                <option value="XI-IPS-4">
                                                <option value="XII-IPS-1">
                                                <option value="XII-IPS-2">
                                                <option value="XII-IPS-3">
                                                <option value="XII-IPS-4">
                                            </datalist>
                                        </div>
                                        <div class="mb-3">
                                            <label for="kelas" class="form-label">Kode Buku</label>
                                            <input type="text" class="form-control" name="kode_buku" id="kelas" value="<?= $buku1['kd_buku'] ?> 
                                                                 " readonly>
                                        </div>

                                        <div class="mb-3">
                                            <label for="judul_buku" class="form-label">Judul
                                                Buku</label>
                                            <input type="text" class="form-control" name="judul_buku" id="judul_buku" value="<?= $buku1['judul_buku'] ?>" readonly>
                                        </div>
                                        <div class="mb-3">
                                            <label for="kategori_buku" class="form-label">Kategori
                                                Buku</label>
                                            <input type="text" class="form-control" name="kategori_buku" id="kategori_buku" value="<?= $buku1['kategori'] ?>" readonly>
                                        </div>

                                        <div class="mb-3">
                                            <label for="jumlah_buku" class="form-label">Jumlah
                                                Buku</label>
                                            <input type="number" class="form-control" name="jumlah_buku" id="stok_buku" placeholder="Masukkan jumlah buku...">
                                        </div>
                                        <div class="mb-3">
                                            <label for="tanggal_pinjam" class="form-label">Tanggal
                                                pinjam</label>

                                            <input type="text" class="form-control" name="tgl_pinjam" value="<?php echo date('Y-m-d'); ?>" readonly>
                                        </div>

                                        <div style=" float: right;">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                            <button type="reset" class="btn btn-danger">Reset</button>
                                        </div>
                                    </form>
                                </div><br>


                                <!-- /.container-fluid -->

                            </div>
                            <!-- End of Main Content -->

                            <!-- Footer -->
                            <footer class="sticky-footer bg-white">
                                <div class="container my-auto">
                                    <div class="copyright text-center my-auto">
                                        <span>Copyright &copy; Your Website 2020</span>
                                    </div>
                                </div>
                            </footer>
                            <!-- End of Footer -->

                        </div>
                        <!-- End of Content Wrapper -->

                    </div>
                    <!-- End of Page Wrapper -->

                    <!-- Scroll to Top Button-->
                    <a class="scroll-to-top rounded" href="#page-top">
                        <i class="fas fa-angle-up"></i>
                    </a>

                    <!-- Logout Modal-->
                    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body">anda yakin ingin keluar?</div>
                                <div class="modal-footer">
                                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                    <a class="btn btn-primary" href="../logout.php">Yes</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Bootstrap core JavaScript-->
                    <script src="../vendor/jquery/jquery.min.js"></script>
                    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

                    <!-- Core plugin JavaScript-->
                    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

                    <!-- Custom scripts for all pages-->
                    <script src="../js/sb-admin-2.min.js"></script>

</body>

</html>