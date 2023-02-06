<?php
require_once("../koneksi.php");

session_start();
if ($_SESSION['status'] != "login") {
    header("location:index.php?pesan=belum_login");
}
$no = 1;
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Data Buku.xls");
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

<body>
    <!-- End of Topbar -->



    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" style="overflow: auto;">
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

                </tr>
            </thead>
            <tbody>
                <?php
                $data = mysqli_query($koneksi, "SELECT * FROM tb_buku");
                while ($buku = mysqli_fetch_array($data)) {

                ?>
                    <tr>
                        <th scope="row"><?= $no++ ?></th>
                        <td><?= $buku['kd_buku'] ?></td>
                        <td><?= $buku['judul_buku'] ?></td>
                        <td><?= $buku['kategori'] ?></td>
                        <td><?= $buku['penulis_buku'] ?></td>
                        <td><?= $buku['penerbit_buku'] ?></td>
                        <td><?= $buku['tahun_terbit'] ?></td>
                        <td><?= $buku['stok'] ?></td>


                    </tr>



                <?php } ?>
            </tbody>
        </table>
        <!-- Modal -->


    </div>
    <!-- /.container-fluid -->



    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin-2.min.js"></script>

</body>

</html>