<?php
include"koneksi.php";
$id = $_GET['id'];

$query2="DELETE FROM tbl_klasifikasi WHERE id_klasifikasi='$id'";
$sql2=mysqli_query($connect, $query2);
if ($sql2) {
  		echo "<script>alert('Data Klasifikasi Berhasil Dihapus');
         document.location.href='dashboard.php?p=data_klasifikasi_individu'</script>\n";
  	}else{
  		echo "<script>alert('Data Klasifikasi Gagal Dihapus');
         document.location.href='dashboard.php?p=data_klasifikasi_individu'</script>\n";
}
?>