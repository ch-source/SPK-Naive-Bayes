<?php
include"koneksi.php";
$id=$_POST['id'];
$no_kk=$_POST['no_kk'];
$nik=$_POST['nik'];
$nama=$_POST['nama'];
$periode=$_POST['periode'];
$tahun=$_POST['tahun'];
$tgl=$_POST['tgl'];
$umur=$_POST['umur'];
$jml_tanggungan=$_POST['jml_tanggungan'];
$pekerjaan=$_POST['pekerjaan'];
$pendidikan=$_POST['pendidikan'];
$pendapatan=$_POST['pendapatan'];
$status_rmh=$_POST['status_rmh'];
$bahan_bakar=$_POST['bahan_bakar'];
$sumber_air=$_POST['sumber_air'];
$daya_listrik=$_POST['daya_listrik'];
$status=$_POST['status'];

$count=count($id);
$sql="INSERT INTO `tbl_score_akhir` (`id_sk`, `id_klasifikasi`, `no_kk`, `nik`, `nama`, `periode`, `tahun`, `tanggal`, `umur`, `jml_tanggungan`, `pekerjaan`, `pendidikan`, `pendapatan`, `status_rmh`, `bahan_bakar`, `sumber_air`, `daya_listrik`, `status`) VALUES ";
for ($i=0; $i <$count ; $i++) { 
  $sql.="('', '{$id[$i]}', '{$no_kk[$i]}', '{$nik[$i]}', '{$nama[$i]}', '{$periode[$i]}', '{$tahun[$i]}', '{$tgl[$i]}', '{$umur[$i]}', '{$jml_tanggungan[$i]}', '{$pekerjaan[$i]}', '{$pendidikan[$i]}', '{$pendapatan[$i]}', '{$status_rmh[$i]}', '{$bahan_bakar[$i]}', '{$sumber_air[$i]}', '{$daya_listrik[$i]}', '{$status[$i]}')";
  $sql.=",";
}

$sql=rtrim($sql,",");
      $insert=$connect->query($sql);
      if (!$insert) {
        echo "<script>alert('Opss!, Data Hasil Prediksi Gagal Disimpan');
        document.location.href='dashboard.php?p=data_hasil_klasifikasi'</script>\n";
      }else{
      echo "<script>alert('Data Hasil Prediksi Berhasil Disimpan');
        document.location.href='dashboard.php?p=data_hasil_klasifikasi'</script>\n"; 
      }
?>