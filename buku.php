<?php
require_once("koneksi.php");
$sql="Select * from tb_buku";
$data=mysqli_query($koneksi,$sql);
$no=1;
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
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Sistem Perpustakaan</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.html">
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
                <a class="nav-link collapsed" href="buku.html">
                    <i class="fas fa-fw fa-book"></i>
                    <span>Data Buku</span>
                </a>
            </li>

            <!-- Nav Item - Data Peminjaman -->
            <li class="nav-item" style="margin-bottom: -16px !important;">
                <a class="nav-link collapsed" href="peminjaman.html">
                    <i class="fas fa-fw fa-arrow-circle-up"></i>
                    <span>Data Peminjaman</span>
                </a>
            </li>

            <!-- Nav Item - Data Pengembalian -->
            <li class="nav-item" style="margin-bottom: -16px !important;">
                <a class="nav-link collapsed" href="pengembalian.html">
                    <i class="fas fa-fw fa-arrow-circle-down"></i>
                    <span>Data Pengembalian</span>
                </a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="tables.html">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Tables</span></a>
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
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 12, 2019</div>
                                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 7, 2019</div>
                                        $290.29 has been deposited into your account!
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 2, 2019</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </li>

                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                <!-- Counter - Messages -->
                                <span class="badge badge-danger badge-counter">7</span>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Message Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_1.svg" alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div class="font-weight-bold">
                                        <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                            problem I've been having.</div>
                                        <div class="small text-gray-500">Emily Fowler · 58m</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_2.svg" alt="...">
                                        <div class="status-indicator"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">I have the photos that you ordered last month, how
                                            would you like them sent to you?</div>
                                        <div class="small text-gray-500">Jae Chun · 1d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_3.svg" alt="...">
                                        <div class="status-indicator bg-warning"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Last month's report looks great, I am very happy with
                                            the progress so far, keep up the good work!</div>
                                        <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                                            told me that people say this to all dogs, even if they aren't good...</div>
                                        <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
                                <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
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
                        <h1 class="h3 mb-0 text-gray-800">Data Buku</h1>
                    </div>

                    <div class="row">

                        <div class="col-lg">



                        </div>

                    </div>
                    <div class="row">
                        <div class="col-lg">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Tabel Data Buku</h6>
                                </div>
                                <div class="card-body">
                                    <div class="col-lg-4" style="float: left;">
                                        <button type="button" class="btn btn-success mb-4" data-toggle="modal"
                                            data-target="#modalBuku">Tambah Data Buku</button>
                                        <!-- Modal -->
                                        <div class="modal fade" id="modalBuku" tabindex="-1" role="dialog"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content p-3">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Buku
                                                        </h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close"><span
                                                                aria-hidden="true">&times;</span></button>
                                                    </div>
                                                    <form method="post" action="p_tambah_buku.php">
                                                        <div class="mt-3 mb-3">
                                                            <label for="kode_buku" class="form-label">Kode Buku</label>
                                                            <input type="text" class="form-control" name="kode_buku"
                                                                id="kode_buku" placeholder="Masukkan kode buku...">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="judul_buku" class="form-label">Judul
                                                                Buku</label>
                                                            <input type="text" class="form-control" name="judul_buku"
                                                                id="judul_buku" placeholder="Masukkan judul buku...">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="kode_buku" class="form-label">Kategori
                                                                Buku</label>
                                                            <input class="form-control" list="datalistOptions"
                                                                name="kategori_buku" id="kode_buku"
                                                                placeholder="Masukkan kategori buku...">
                                                            <datalist id="datalistOptions">
                                                                <option value="Bacaan Anak">
                                                                <option value="Profesi">
                                                                <option value="Kesehatan">
                                                                <option value="Bacaan Umum/Politik">
                                                                <option value="Bacaan Umum/Sosiologi">
                                                                <option value="Sejarah Budaya/Biografi">
                                                                <option value="Bacaan Umum/Pengembangan Diri">
                                                                <option value="Motivasi">
                                                                <option value="Sosial/Politik">
                                                                <option value="Bacaan Umum/Olahraga">
                                                                <option value="Bacaan Umum/Travelling">
                                                                <option value="Bacaan Umum/Perkebunan">
                                                                <option value="Bacaan Umum/Perikanan">
                                                                <option value="Bacaan Umum/Resep Makanan">
                                                                <option value="Bacaan Umum/Biografi">
                                                                <option value="Rohani">
                                                                <option value="Metode Penelitian">
                                                                <option value="TIK">
                                                                <option value="Sejarah Budaya">
                                                                <option value="Novel">
                                                                <option value="Komik">
                                                                <option value="Dongeng">
                                                                <option value="Cerpen">
                                                                <option value="Syair">
                                                                <option value="Kumpulan Drama">
                                                                <option value="Pribahasa/Pantun/Puisi">
                                                                <option value="Intisari Kata Bahasa Indonesia">
                                                                <option value="Pendidikan/Pembelajaran Aktif">
                                                                <option value="Komunikasi">
                                                                <option value="Kamus Sinonim-Antonim">
                                                                <option value="Keterampilan">
                                                                <option value="Referensi">
                                                                <option value="Atlas">
                                                                <option value="Kumpulan Soal UN">
                                                                <option value="Kamus">
                                                                <option value="Pendidikan">
                                                                <option value="Olimpiade">
                                                                <option value="AKM">
                                                                <option value="Pengembangan Diri">
                                                                <option value="Bisnis">
                                                            </datalist>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="penulis_buku" class="form-label">Penulis
                                                                Buku</label>
                                                            <input type="text" class="form-control" name="penulis_buku"
                                                                id="penulis_buku"
                                                                placeholder="Masukkan penulis buku...">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="penerbit_buku" class="form-label">Penerbit
                                                                Buku</label>
                                                            <input type="text" class="form-control" name="penerbit_buku"
                                                                id="penerbit_buku"
                                                                placeholder="Masukkan penerbit buku...">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="tahun_terbit" class="form-label">Tahun
                                                                Terbit</label>
                                                            <input type="text" class="form-control" name="tahun_terbit"
                                                                id="tahun_terbit"
                                                                placeholder="Masukkan tahun terbit...">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="stok_buku" class="form-label">Stok Buku</label>
                                                            <input type="number" class="form-control" name="stok_buku"
                                                                id="stok_buku" placeholder="Masukkan stok buku...">
                                                        </div>
                                                        <div style="float: right;">
                                                            <button type="submit"
                                                                class="btn btn-primary">Submit</button>
                                                            <button type="reset" class="btn btn-danger">Reset</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4" style="float: right;">
                                        <form class="form p-3 w-100 navbar-search">
                                            <div class="input-group">
                                                <input type="text" class="form-control bg-light border-0 small"
                                                    placeholder="Search for..." aria-label="Search"
                                                    aria-describedby="basic-addon2">
                                                <div class="input-group-append">
                                                    <button class="btn btn-primary" type="button">
                                                        <i class="fas fa-search fa-sm"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0"
                                            style="overflow: auto;">
                                            <thead>
                                                <tr>
                                                    <th style="vertical-align: middle !important;">No.</th>
                                                    <th style="vertical-align: middle !important;">Kode Buku</th>
                                                    <th style="vertical-align: middle !important;">Judul Buku</th>
                                                    <th style="vertical-align: middle !important;">Kategori</th>
                                                    <th style="vertical-align: middle !important;">Penulis Buku</th>
                                                    <th style="vertical-align: middle !important;">Penerbit Buku</th>
                                                    <th style="vertical-align: middle !important;">Tahun Terbit</th>
                                                    <th style="vertical-align: middle !important;">Stok</th>
                                                    <th style="vertical-align: middle !important;">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                              <?php
                                              while($buku= mysqli_fetch_array($data)){

                                                  ?>
                                                <tr>
                                                    <th scope="row"><?=$no++?></th>
                                                    <td><?= $buku['kd_buku']?></td>
                                                    <td><?= $buku['judul_buku']?></td>
                                                    <td><?= $buku['kategori']?></td>
                                                    <td><?= $buku['penulis_buku']?></td>
                                                    <td><?= $buku['penerbit_buku']?></td>
                                                    <td><?= $buku['tahun_terbit']?></td>
                                                    <td><?= $buku['stok']?></td>
                                                    
                                                    <td>
                                                        <a href="edit.php" class="btn btn-primary"
                                                            style="margin-bottom: 1px;">Edit</a>
                                                        <a href="hapus.php" class="btn btn-danger"
                                                            style="margin-bottom: 1px;">Hapus</a>
                                                        <button type="button" class="btn btn-success"
                                                            data-toggle="modal"
                                                            data-target="#modalPeminjaman">Peminjaman</button>
                                                    </td>
                                                </tr>
                                                 <?php } ?>
                                            </tbody>
                                        </table>
                                        <!-- Modal -->
                                        <div class="modal fade" id="modalPeminjaman" tabindex="-1" role="dialog"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content p-3">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Form Peminjaman
                                                        </h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close"><span
                                                                aria-hidden="true">&times;</span></button>
                                                    </div>
                                                    <form>
                                                        <div class="mt-3 mb-3">
                                                            <label for="nama_peminjam" class="form-label">Nama
                                                                Peminjam</label>
                                                            <input type="text" class="form-control" name="nama_peminjam"
                                                                id="nama_peminjam"
                                                                placeholder="Masukkan nama peminjam...">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="kelas" class="form-label">Kelas</label>
                                                            <input type="text" class="form-control" name="kelas"
                                                                id="kelas" placeholder="Masukkan kelas...">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="kode_buku" class="form-label">Kode Buku</label>
                                                            <input class="form-control" list="datalistOptions"
                                                                name="kode_buku" id="kode_buku"
                                                                placeholder="Masukkan kode buku...">
                                                            <datalist id="datalistOptions">
                                                                <option value="SF001">San Fransisco</option>
                                                                <option value="SF002">San Fransisco</option>
                                                                <option value="SB003">LURAH</option>
                                                                <option value="SC001">LINGLUNG</option>
                                                                <option value="SD001">LENGHT</option>
                                                                <option value="SD001">LAGI</option>
                                                            </datalist>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="judul_buku" class="form-label">Judul
                                                                Buku</label>
                                                            <input type="text" class="form-control" name="judul_buku"
                                                                id="judul_buku" disabled>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="kategori_buku" class="form-label">Kategori
                                                                Buku</label>
                                                            <input type="text" class="form-control" name="kategori_buku"
                                                                id="kategori_buku" disabled>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="penulis_buku" class="form-label">Penulis
                                                                Buku</label>
                                                            <input type="text" class="form-control" name="penulis_buku"
                                                                id="penulis_buku" disabled>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="penerbit_buku" class="form-label">Penerbit
                                                                Buku</label>
                                                            <input type="text" class="form-control" name="penerbit_buku"
                                                                id="penerbit_buku" disabled>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="tahun_terbit" class="form-label">Tahun
                                                                Terbit</label>
                                                            <input type="text" class="form-control" name="tahun_terbit"
                                                                id="tahun_terbit" disabled>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="tahun_terbit" class="form-label">Tanggal
                                                                pinjam</label>
                                                            <input type="Date" class="form-control" name="tgl_pinjam"
                                                                id="tahun_terbit" disabled>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="stok_buku" class="form-label">Jumlah
                                                                Buku</label>
                                                            <input type="number" class="form-control" name="jumlah_buku"
                                                                id="stok_buku" placeholder="Masukkan jumlah buku...">
                                                        </div>
                                                        <div style="float: right;">
                                                            <button type="submit"
                                                                class="btn btn-primary">Submit</button>
                                                            <button type="reset" class="btn btn-danger">Reset</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
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
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>