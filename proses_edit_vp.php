<?php 
include"koneksi.php";
$id = $_GET['id'];
$nama = $_POST['nama'];

    $query="UPDATE tbl_vp SEt nama_variabel='$nama' WHERE id_variabel='$id'";
    $sql=mysqli_query($connect, $query);
    if ($sql) {
      echo "<script>alert('Data Variabel Penentu Berhasil Diubah');
      document.location.href='dashboard.php?p=data_vp'</script>\n";
    }else{
      echo "<script>alert('Data Variabel Penentu Gagal Diubah!');
      document.location.href='dashboard.php?p=edit_data_vp&id=".$id."'</script>\n";
    }
?>
