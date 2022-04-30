<?php
include "koneksi.php";
$id = $_POST['id'];
$nilai = $_POST['nilai'];
$parameter = $_POST['parameter'];

$query1 = "INSERT INTO `tbl_parameter` (`id_parameter`, `id_variabel`, `nilai`, `parameter`) VALUES ('', '$id', '$nilai', '$parameter')";
	$sql1 = mysqli_query($connect, $query1); 
	if ($sql1) {
			echo "<script>alert('Proses Simpan Data Parameter Berhasil');
                document.location.href='dashboard.php?p=data_parameter'</script>\n";
		}else{
			echo "<script>alert('Proses Simpan Data Parameter Gagal');
                document.location.href='dashboard.php?p=data_parameter'</script>\n";
		}
?>
