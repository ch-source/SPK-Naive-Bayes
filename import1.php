<?php
/*
-- Source Code from My Notes Code (www.mynotescode.com)
--
-- Follow Us on Social Media
-- Facebook : http://facebook.com/mynotescode/
-- Twitter  : http://twitter.com/mynotescode
-- Google+  : http://plus.google.com/118319575543333993544
--
-- Terimakasih telah mengunjungi blog kami.
-- Jangan lupa untuk Like dan Share catatan-catatan yang ada di blog kami.
*/

// Load file koneksi.php
include "koneksi.php";

if(isset($_POST['import'])){ // Jika user mengklik tombol Import
	$nama_file_baru = 'datak.xlsx';

	// Load librari PHPExcel nya
	require_once 'PHPExcel/PHPExcel.php';

	$excelreader = new PHPExcel_Reader_Excel2007();
	$loadexcel = $excelreader->load('tmp/'.$nama_file_baru); // Load file excel yang tadi diupload ke folder tmp
	$sheet = $loadexcel->getActiveSheet()->toArray(null, true, true ,true);

	$numrow = 1;
	foreach($sheet as $row){
		// Ambil data pada excel sesuai Kolom
                $no_kk = $row['A']; // Ambil data NIS
                $nik = $row['B']; // Ambil data NIS
                $nama = $row['C']; // Ambil data nama
                $alamat = $row['D']; // Ambil data jenis kelamin
                $umur = $row['E']; // Ambil data alamat
                $jml_tanggungan = $row['F']; // Ambil data alamat
                $pekerjaan = $row['G']; // Ambil data alamat
                $pendidikan = $row['H']; // Ambil data alamat
                $pendapatan = $row['I']; // Ambil data alamat
                $status_rmh = $row['J']; // Ambil data alamat
                $bahan_bakar = $row['K']; // Ambil data alamat
                $sumber_air = $row['L']; // Ambil data alamat
                $daya_listrik = $row['M']; // Ambil data alamat
                $status_kl = $row['N']; // Ambil data alamat
		// Cek jika semua data tidak diisi
		if($no_kk == "" && $nik == "" && $nama == "" && $alamat == "" && $umur == "" && $jml_tanggungan == "" && $pekerjaan == "" && $pendidikan == "" && $pendapatan == "" && $status_rmh == "" && $bahan_bakar == "" && $sumber_air == "" && $daya_listrik == "" && $status_kl == "")
                  continue;  // Lewat data pada baris ini (masuk ke looping selanjutnya / baris selanjutnya)

		// Cek $numrow apakah lebih dari 1
		// Artinya karena baris pertama adalah nama-nama kolom
		// Jadi dilewat saja, tidak usah diimport
		if($numrow > 1){
			// Buat query Insert
			$query = "INSERT INTO tbl_klasifikasi VALUES('', '".$no_kk."', '".$nik."','".$nama."','".$alamat."', '".$umur."' ,'".$jml_tanggungan."' ,'".$pekerjaan."' ,'".$pendidikan."' ,'".$pendapatan."' ,'".$status_rmh."' ,'".$bahan_bakar."' ,'".$sumber_air."' ,'".$daya_listrik."' ,'".$status_kl."')";

			// Eksekusi $query
			mysqli_query($connect, $query);
		}

		$numrow++; // Tambah 1 setiap kali looping
	}
}

header('location: dashboard.php?p=data_klasifikasi&notif=import-sukses'); // Redirect ke halaman awal
?>
