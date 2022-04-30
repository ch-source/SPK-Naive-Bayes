<?php
include'koneksi.php';
include"fpdf.php";
require('makefont/makefont.php');
$pdf = new FPDF("L","cm","A4");

$pdf->SetMargins(1,1,1);
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','B',12);
$pdf->SetX(1.6);   
$pdf->Image('img/lg.png', 1, 1, 2);
$pdf->SetX(1.6);
$pdf->SetFont('Times','B',12);
$pdf->SetX(3);            
$pdf->MultiCell(15.5,0.6,'KANTOR KELURAHAN PANJER',0,'L');
$pdf->SetX(3);
$pdf->SetFont('Times','i',10);
$pdf->MultiCell(22.5,0.6,'Jl. Tukad Pakerisan NO. 65, Denpasar-Bali',0,'L'); 
$tglaw = $_POST['tglaw'];
$tglak = $_POST['tglak'];
$pdf->SetX(3);
$pdf->SetFont('Times','i',10);
$pdf->MultiCell(22.5,0.6,"Laporan Hasil Klasifikasi Tanggal: ".$tglaw."-".$tglak,0,'L'); 
$pdf->Line(1,3.1,28.5,3.1);
$pdf->SetLineWidth(0.1);      
$pdf->Line(1,3.2,28.5,3.2);   
$pdf->SetLineWidth(0);
$pdf->SetFont('Times','i',8);
$tglaw = $_POST['tglaw'];
$tglak = $_POST['tglak'];
$pdf->ln(1);
$pdf->Cell(3.5,0.7,"Di cetak pada : ".date("D-d/m/Y"),0,0,'C');
$pdf->ln(1);
$pdf->SetFont('Times','B',8);
$pdf->Cell(1, 0.6, 'No', 1, 0, 'C');
$pdf->Cell(3, 0.6, 'NIK-Nama', 1, 0, 'L');
$pdf->Cell(1.5, 0.6, 'Tanggal', 1, 0, 'L');
$pdf->Cell(1.5, 0.6, 'P/T', 1, 0, 'L');
$pdf->Cell(2, 0.6, 'Umur', 1, 0, 'L');
$pdf->Cell(3, 0.6, 'Jml. Tanggungan', 1, 0, 'L');
$pdf->Cell(2, 0.6, 'Pekerjaan', 1, 0, 'L');
$pdf->Cell(2, 0.6, 'Pendidikan', 1, 0, 'L');
$pdf->Cell(2, 0.6, 'Pendapatan', 1, 0, 'L');
$pdf->Cell(2, 0.6, 'Status Rumah', 1, 0, 'L');
$pdf->Cell(2, 0.6, 'Bahan Bakar', 1, 0, 'L');
$pdf->Cell(2, 0.6, 'Sumber Air', 1, 0, 'L');
$pdf->Cell(2, 0.6, 'Daya Listrik', 1, 0, 'L');
$pdf->Cell(2, 0.6, 'Status', 1, 1, 'L');
$no=1;
$sql="SELECT * FROM tbl_score_akhir WHERE tanggal BETWEEN '$tglaw' AND '$tglak'";
$tampil=mysqli_query($connect, $sql);
while($lihat=mysqli_fetch_array($tampil)){
    $pdf->SetFont('Times','',7);
    $pdf->Cell(1, 0.6, $no , 1, 0, 'C');
    $pdf->Cell(3, 0.6, $lihat['nik']."/".$lihat['nama'],1, 0, 'L');
    $pdf->Cell(1.5, 0.6, $lihat['tanggal'],1, 0, 'L');
    $pdf->Cell(1.5, 0.6, $lihat['periode']."/".$lihat['tahun'],1, 0, 'L');
    $pdf->Cell(2, 0.6, $lihat['umur'],1, 0, 'L');
    $pdf->Cell(3, 0.6, $lihat['jml_tanggungan'],1, 0, 'L');
    $pdf->Cell(2, 0.6, $lihat['pekerjaan'],1, 0, 'L');
    $pdf->Cell(2, 0.6, $lihat['pendidikan'],1, 0, 'L');
    $pdf->Cell(2, 0.6, $lihat['pendapatan'],1, 0, 'L');
    $pdf->Cell(2, 0.6, $lihat['status_rmh'],1, 0, 'L');
    $pdf->Cell(2, 0.6, $lihat['bahan_bakar'],1, 0, 'L');
    $pdf->Cell(2, 0.6, $lihat['sumber_air'],1, 0, 'L');
    $pdf->Cell(2, 0.6, $lihat['daya_listrik'],1, 0, 'L');
    $pdf->Cell(2, 0.6, $lihat['status'],1, 1, 'L');
    $no++;
}

$order="SELECT * FROM tbl_score_akhir WHERE tanggal BETWEEN '$tglaw' AND '$tglak' AND status='Miskin'";
$query_order=mysqli_query($connect, $order);
$data_order=array();
while(($row_order=mysqli_fetch_array($query_order)) !=null){
$data_order[]=$row_order;
}
$count=count($data_order);
$pdf->SetFont('Times','B',8);
$pdf->Cell(26, 0.6,"Jml. Miskin",1, 0, '');
$pdf->Cell(2, 0.6, $count ,1, 1, 'C');

$order_a="SELECT * FROM tbl_score_akhir WHERE tanggal BETWEEN '$tglaw' AND '$tglak' AND status='Tidak Miskin'";
$query_order_a=mysqli_query($connect, $order_a);
$data_order_a=array();
while(($row_order_a=mysqli_fetch_array($query_order_a)) !=null){
$data_order_a[]=$row_order_a;
}
$count_a=count($data_order_a);
$pdf->SetFont('Times','B',8);
$pdf->Cell(26, 0.6,"Jml. Tidak Miskin",1, 0, '');
$pdf->Cell(2, 0.6, $count_a ,1, 1, 'C');

$pdf->Output();
?>