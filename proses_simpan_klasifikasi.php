<?php
include "koneksi.php";
$umur = $_POST['umur'];
$nok = $_POST['nok'];
$pendidikan = $_POST['pendidikan'];
$nik = $_POST['nik'];
$pendapatan = $_POST['pendapatan'];
$nama = $_POST['nama'];
$status = $_POST['status'];
$alt =$_POST['alt'];
$bb =$_POST['bb'];
$pekerjaan =$_POST['pekerjaan'];
$sa =$_POST['sa'];
$jml =$_POST['jml'];
$dl = $_POST['dl'];

$cek = mysqli_query($connect, "SELECT * FROM tbl_klasifikasi WHERE no_kk = '$nok' AND nik='$nik'");
$result = mysqli_num_rows($cek);
$data = mysqli_fetch_array($cek);
if ($result > 0) {
   echo "<script>alert('Proses Simpan Data Klasifikasi Gagal!, No. KK atau NIK Yang Anda Masukkan Sudah Digunakan, Silahkan Diinput Sesuai Data Anda');
    document.location.href='dashboard.php?p=input_klasifikasi'</script>\n";
}else if ($result==0) {
	$query="INSERT INTO `tbl_klasifikasi` (`id_klasifikasi`, `no_kk`, `nik`, `nama`, `umur`, `alamat`, `jml_tanggungan`, `pekerjaan`, `pendidikan`, `pendapatan`, `status_rmh`, `bahan_bakar`, `sumber_air`, `daya_listrik`, `status_kl`) VALUES ('', '$nok', '$nik', '$nama', '$umur','$alt', '$jml', '$pekerjaan', '$pendidikan', '$pendapatan', '$status', '$bb', '$sa', '$dl', '')";
		$sql=mysqli_query($connect, $query);
		if ($sql) {
			echo "<script>alert('Data Klasifikasi Berhasil Di Simpan');
      document.location.href='dashboard.php?p=data_klasifikasi'</script>\n";
		}else{
			echo "<script>alert('Data Klasifikasi Gagal Di Simpan');
      document.location.href='dashboard.php?p=input_klasifikasi'</script>\n";
		}
	}
?>