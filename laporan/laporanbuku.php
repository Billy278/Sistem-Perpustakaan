<?php
// memanggil library FPDF
require('fpdf.php');
// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('l','mm','A4');
// membuat halaman baru
$pdf->AddPage();
// setting jenis font yang akan digunakan
$pdf->SetFont('Arial','B',16);
$pdf->SetLineWidth(1);
$pdf->Line(1,33,350,33);
$pdf->SetLineWidth(0);


// mencetak string 
$pdf->Image('../img/logo.jpeg',25,1,30);


$pdf->Cell(270,7,'SMA KATOLIK 1 KABANJAHE',0,1,'C');
$pdf->SetFont('Arial','B',12);


$pdf->Cell(270,7,'LAPORAN DATA BUKU',0,1,'C');

// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(30,15,'',0,1);
$pdf->SetLeftMargin(10);
$pdf->SetFont('Arial','',10);
$pdf->Cell(20,8,'KD BUKU',1,0);
$pdf->Cell(70,8,'JUDUL BUKU',1,0);
$pdf->Cell(60,8,'KATEGORI',1,0);
$pdf->Cell(50,8,'PENULIS',1,0);
$pdf->Cell(50,8,'PENERBIT',1,0);
$pdf->Cell(15,8,' TERBIT',1,0);
$pdf->Cell(15,8,'STOK',1,1);


$pdf->SetFont('Arial','',10);

require_once("../koneksi.php");
$buku = mysqli_query($koneksi, "select * from tb_buku");
while ($row = mysqli_fetch_array($buku)){
    $pdf->SetLeftMargin(10);
    $pdf->Cell(20,8,$row['kd_buku'],1,0);
    $pdf->Cell(70,8,$row['judul_buku'],1,0);
     $pdf->Cell(60,8,$row['kategori'],1,0);
     $pdf->Cell(50,8,$row['penulis_buku'],1,0); 
     $pdf->Cell(50,8,$row['penerbit_buku'],1,0); 
     $pdf->Cell(15,8,$row['tahun_terbit'],1,0); 
     $pdf->Cell(15,8,$row['stok'],1,1); 
    
}
$pdf->Cell(20,25,'',0,1);
$pdf->SetLeftMargin(70);
$pdf->SetFont('Times','',12);
$pdf->Cell(300,7,date(' Y-m-d'),0,1,'C');

$pdf->Output();
?>