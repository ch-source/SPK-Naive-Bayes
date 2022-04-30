<?php
include "koneksi.php";
$id = $_POST['id'];
$nama = $_POST['nama'];

$cek = mysqli_query($connect, "SELECT * FROM tbl_vp WHERE nama_variabel='$nama'");
$result = mysqli_num_rows($cek);
$data = mysqli_fetch_array($cek);
if ($result > 0) {
   echo "<script>alert('Proses Simpan Data Variabel Penentu Gagal!, Nama Variabel Yang Anda Masukkan Sudah Digunakan, Silahkan Input Nama Yang Berbeda');
    document.location.href='dashboard.php?p=data_vp'</script>\n";
}else if ($result==0) {
$query1 = "INSERT INTO `tbl_vp` (`id_variabel`, `nama_variabel`) VALUES ('$id', '$nama')";
	$sql1 = mysqli_query($connect, $query1); 
	if ($sql1) {
			echo "<script>alert('Proses Simpan Data Variabel Penentu Berhasil');
                document.location.href='dashboard.php?p=data_vp'</script>\n";
		}else{
			echo "<script>alert('Proses Simpan Data Variabel Penentu Gagal');
                document.location.href='dashboard.php?p=data_vp'</script>\n";
		}
	}
?>
