<?php
// memanggil library FPDF
require('fpdf.php');
require('wordwrap.php');



// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('L','mm','Legal');
// membuat halaman baru
$pdf->AddPage();
// setting jenis font yang akan digunakan
$pdf->SetFont('Arial','B',16);
$pdf->SetLineWidth(1);
$pdf->Line(1,33,360,33);
$pdf->SetLineWidth(0);


// mencetak string 
$pdf->Image('../img/logo.jpeg',25,1,30);


$pdf->Cell(340,7,'SMA KATOLIK 1 KABANJAHE',0,1,'C');
$pdf->SetFont('Arial','B',12);


$pdf->Cell(340,7,'LAPORAN DATA PENGEMBALIAN',0,1,'C');

// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(8,15,'',0,1);
$pdf->SetLeftMargin(10);
$pdf->SetFont('Arial','',10);
$pdf->Cell(15,8,'ID ',1,0);
$pdf->Cell(40,8,'NAMA PEMINJAM',1,0);
$pdf->Cell(15,8,'KELAS',1,0);
$pdf->Cell(18,8,'KD BUKU',1,0);
$pdf->Cell(70,8,'JUDUL BUKU',1,0);
$pdf->Cell(60,8,'KATEGORI',1,0);
$pdf->Cell(10,8,'JLH',1,0);
$pdf->Cell(40,8,'TANGGAL PINJAM',1,0);
$pdf->Cell(40,8,'TANGGAL KEMBALI',1,0);
$pdf->Cell(25,8,'DENDA',1,1);


$pdf->SetFont('Arial','',10);

require_once("../koneksi.php");
$buku = mysqli_query($koneksi, "select * from tb_pengembalian");
while ($row = mysqli_fetch_array($buku)){
   $pdf->SetLeftMargin(10);
     $pdf->Cell(15,8,$row['id_kembali'],1,0);
      $pdf->Cell(40,8,$row['nama_peminjam'],1,0);
       $pdf->Cell(15,8,$row['kelas'],1,0);
    $pdf->Cell(18,8,$row['kd_buku'],1,0);
    $pdf->Cell(70,8,$row['judul_buku'],1,0);
     $pdf->Cell(60,8,$row['kategori'],1,0);
     $pdf->Cell(10,8,$row['jumlah'],1,0); 
     $pdf->Cell(40,8,$row['tanggal_pinjam'],1,0); 
     $pdf->Cell(40,8,$row['tanggal_kembali'],1,0); 
     $pdf->Cell(25,8,$row['denda'],1,1); 
    
}
$pdf->Cell(20,25,'',0,1);
$pdf->SetLeftMargin(100);
$pdf->SetFont('Times','',12);
$pdf->Cell(300,7,date(' Y-m-d'),0,1,'C');

$pdf->Output();
