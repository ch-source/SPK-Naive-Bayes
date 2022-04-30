<?php
include"koneksi.php";
$id = $_GET['id'];


$query2="DELETE FROM tbl_vp WHERE id_variabel='$id'";
$sql2=mysqli_query($connect, $query2);
if ($sql2) {
  		echo "<script>alert('Data Variabel Penentu Berhasil Dihapus');
         document.location.href='dashboard.php?p=data_vp'</script>\n";
  	}else{
  		echo "<script>alert('Data Variabel Penentu Gagal Dihapus');
         document.location.href='dashboard.php?p=data_vp'</script>\n";
}
?>