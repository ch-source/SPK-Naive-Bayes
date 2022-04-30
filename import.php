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
	$nama_file_baru = 'data.xlsx';

	// Load librari PHPExcel nya
	require_once 'PHPExcel/PHPExcel.php';

	$excelreader = new PHPExcel_Reader_Excel2007();
	$loadexcel = $excelreader->load('tmp/'.$nama_file_baru); // Load file excel yang tadi diupload ke folder tmp
	$sheet = $loadexcel->getActiveSheet()->toArray(null, true, true ,true);

	$numrow = 1;
	foreach($sheet as $row){
		// Ambil data pada excel sesuai Kolom
				$nik = $row['A']; // Ambil data NIS
                $nama = $row['B']; // Ambil data nama
                $alamat = $row['C']; // Ambil data jenis kelamin
                $nama_kab = $row['D']; // Ambil data telepon
                $nama_kec = $row['E']; // Ambil data alamat
                $nama_kel = $row['F']; // Ambil data alamat
                $umur = $row['G']; // Ambil data alamat
                $jml_tanggungan = $row['H']; // Ambil data alamat
                $pekerjaan = $row['I']; // Ambil data alamat
                $pendidikan = $row['J']; // Ambil data alamat
                $pendapatan = $row['K']; // Ambil data alamat
                $status_rmh = $row['L']; // Ambil data alamat
                $bahan_bakar = $row['M']; // Ambil data alamat
                $sumber_air = $row['N']; // Ambil data alamat
                $daya_listrik = $row['O']; // Ambil data alamat
                $aktual_kelas = $row['P']; // Ambil data alamat

		// Cek jika semua data tidak diisi
		if($nik == "" && $nama == "" && $alamat == "" && $nama_kab == "" && $nama_kec == "" && $nama_kel == "" && $umur == "" && $jml_tanggungan == "" && $pekerjaan == "" && $pendidikan == "" && $pendapatan == "" && $status_rmh == "" && $bahan_bakar == "" && $sumber_air == "" && $daya_listrik == "" && $aktual_kelas == "")
                  continue;  // Lewat data pada baris ini (masuk ke looping selanjutnya / baris selanjutnya)

		// Cek $numrow apakah lebih dari 1
		// Artinya karena baris pertama adalah nama-nama kolom
		// Jadi dilewat saja, tidak usah diimport
		if($numrow > 1){
			// Buat query Insert
			$query = "INSERT INTO tbl_training VALUES('', '".$nik."','".$nama."','".$alamat."','".$nama_kab."','".$nama_kec."','".$nama_kel."','".$umur."' ,'".$jml_tanggungan."' ,'".$pekerjaan."' ,'".$pendidikan."' ,'".$pendapatan."' ,'".$status_rmh."' ,'".$bahan_bakar."' ,'".$sumber_air."' ,'".$daya_listrik."' ,'".$aktual_kelas."')";

			// Eksekusi $query
			mysqli_query($connect, $query);
		}

		$numrow++; // Tambah 1 setiap kali looping
	}
}

header('location: dashboard.php?p=data_training&notif=import-sukses'); // Redirect ke halaman awal
?>
