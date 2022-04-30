
      <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h2 class="h4 mb-0 text-gray-800">Import Data Training</h2>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Import Data Training</li>
            </ol>
          </div>
           <div class="row mb-12">
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-12 col-md-6 mb-4">
               <div class="card mb-4">
                <div class="card-body">
          <!-- Buat sebuah tombol Cancel untuk kemabli ke halaman awal / view data -->
          
          <!-- Buat sebuah tag form dan arahkan action nya ke file ini lagi -->
          <form method="post" action="" enctype="multipart/form-data">

            <!--
            -- Buat sebuah input type file
            -- class pull-left berfungsi agar file input berada di sebelah kiri
            -->
            <input type="file" name="file" class="pull-left">

            <button type="submit" name="preview" class="btn btn-success">
              <i class="fa fa-eye"></i> Preview
            </button>
            <a href="dashboard.php?p=data_training" class="btn btn-danger">
            <i class="glyphicon glyphicon-remove"></i> Batal
          </a>
          </form>

          <hr>

          <!-- Buat Preview Data -->
          <?php
          // Jika user telah mengklik tombol Preview
          if(isset($_POST['preview'])){
            //$ip = ; // Ambil IP Address dari User
            $nama_file_baru = 'data.xlsx';

            // Cek apakah terdapat file data.xlsx pada folder tmp
            if(is_file('tmp/'.$nama_file_baru)) // Jika file tersebut ada
              unlink('tmp/'.$nama_file_baru); // Hapus file tersebut

            $ext = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION); // Ambil ekstensi filenya apa
            $tmp_file = $_FILES['file']['tmp_name'];

            // Cek apakah file yang diupload adalah file Excel 2007 (.xlsx)
            if($ext == "xlsx"){
              // Upload file yang dipilih ke folder tmp
              // dan rename file tersebut menjadi data{ip_address}.xlsx
              // {ip_address} diganti jadi ip address user yang ada di variabel $ip
              // Contoh nama file setelah di rename : data127.0.0.1.xlsx
              move_uploaded_file($tmp_file, 'tmp/'.$nama_file_baru);

              // Load librari PHPExcel nya
              require_once 'PHPExcel/PHPExcel.php';

              $excelreader = new PHPExcel_Reader_Excel2007();
              $loadexcel = $excelreader->load('tmp/'.$nama_file_baru); // Load file yang tadi diupload ke folder tmp
              $sheet = $loadexcel->getActiveSheet()->toArray(null, true, true ,true);

              // Buat sebuah tag form untuk proses import data ke database
              echo "<form method='post' action='import.php'>";

              // Buat sebuah div untuk alert validasi kosong
              echo "<div class='table-responsive p-3'>
              <table class='table align-items-center table-hover table-bordered' id='dataTableHover'>
              <tr>
                <th colspan='5' class='text-center'>DATA TRAINING</th>
              </tr>
              <tr>
                <th>NIK</th>
                <th>NAMA KK</th>
                <th>ALAMAT</th>
                <th>NMKABU</th>
                <th>NMKECA</th>
                <th>NMKELR</th>
                <th>UMUR</th>
                <th>JLH. TANGGUNGAN</th>
                <th>PEKERJAAN</th>
                <th>PENDIDIKAN</th>
                <th>PENDAPATAN</th>
                <th>STATUS RUMAH</th>
                <th>BHN BAKAR</th>
                <th>SUMBER AIR</th>
                <th>DAYA LISTRIK</th>
                <th>ACTUAL CLASS</th>
              </tr>";
              $numrow = 1;
              $kosong = 0;
              foreach($sheet as $row){ // Lakukan perulangan dari data yang ada di excel
                // Ambil data pada excel sesuai Kolom
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
                  continue; // Lewat data pada baris ini (masuk ke looping selanjutnya / baris selanjutnya)

                // Cek $numrow apakah lebih dari 1
                // Artinya karena baris pertama adalah nama-nama kolom
                // Jadi dilewat saja, tidak usah diimport
                if($numrow > 1){
                  // Validasi apakah semua data telah diisi
                  $nik_td = ( ! empty($nik))? "" : " style='background: #E07171;'"; // Jika NIS kosong, beri warna merah
                  $nama_td = ( ! empty($nama))? "" : " style='background: #E07171;'"; // Jika Nama kosong, beri warna merah
                  $alamat_td = ( ! empty($alamat))? "" : " style='background: #E07171;'"; // Jika Jenis Kelamin kosong, beri warna merah
                  $nama_kab_td = ( ! empty($nama_kab))? "" : " style='background: #E07171;'"; // Jika Telepon kosong, beri warna merah
                  $nama_kec_td = ( ! empty($nama_kec))? "" : " style='background: #E07171;'"; // Jika Alamat kosong, beri warna merah
                  $nama_kel_td = ( ! empty($nama_kel))? "" : " style='background: #E07171;'"; // Jika Alamat kosong, beri warna merah
                  $umur_td = ( ! empty($umur))? "" : " style='background: #E07171;'"; // Jika Alamat kosong, beri warna merah
                  $jml_tanggungan_td = ( ! empty($jml_tanggungan))? "" : " style='background: #E07171;'"; // Jika Alamat kosong, beri warna merah
                  $pekerjaan_td = ( ! empty($pekerjaan))? "" : " style='background: #E07171;'"; // Jika Alamat kosong, beri warna merah
                  $pendidikan_td = ( ! empty($pendidikan))? "" : " style='background: #E07171;'"; // Jika Alamat kosong, beri warna merah
                  $pendapatan_td = ( ! empty($pendapatan))? "" : " style='background: #E07171;'"; // Jika Alamat kosong, beri warna merah
                  $status_rmh_td = ( ! empty($status_rmh))? "" : " style='background: #E07171;'"; // Jika Alamat kosong, beri warna merah
                  $bahan_bakar_td = ( ! empty($bahan_bakar))? "" : " style='background: #E07171;'"; // Jika Alamat kosong, beri warna merah
                  $sumber_air_td = ( ! empty($sumber_air))? "" : " style='background: #E07171;'"; // Jika Alamat kosong, beri warna merah
                  $daya_listrik_td = ( ! empty($daya_listrik))? "" : " style='background: #E07171;'"; // Jika Alamat kosong, beri warna merah
                  $aktual_kelas_td = ( ! empty($aktual_kelas))? "" : " style='background: #E07171;'"; // Jika Alamat kosong, beri warna merah

                  // Jika salah satu data ada yang kosong

                  if($nik == "" or $nama == "" or $alamat == "" or $nama_kab == "" or $nama_kec == "" or $nama_kel == "" or $umur == "" or $jml_tanggungan == "" or $pekerjaan == "" or $pendidikan == "" or $pendapatan == "" or $status_rmh == "" or $bahan_bakar == "" or $sumber_air == "" or $daya_listrik == "" or $aktual_kelas == ""){
                    $kosong++; // Tambah 1 variabel $kosong
                  }

                  echo "<tr>";
                  echo "<td".$nik_td.">".$nik."</td>";
                  echo "<td".$nama_td.">".$nama."</td>";
                  echo "<td".$alamat_td.">".$alamat."</td>";
                  echo "<td".$nama_kab_td.">".$nama_kab."</td>";
                  echo "<td".$nama_kec_td.">".$nama_kec."</td>";
                  echo "<td".$nama_kel_td.">".$nama_kel."</td>";
                  echo "<td".$umur_td.">".$umur."</td>";
                  echo "<td".$jml_tanggungan_td.">".$jml_tanggungan."</td>";
                  echo "<td".$pekerjaan_td.">".$pekerjaan."</td>";
                  echo "<td".$pendidikan_td.">".$pendidikan."</td>";
                  echo "<td".$pendapatan_td.">".$pendapatan."</td>";
                  echo "<td".$status_rmh_td.">".$status_rmh."</td>";
                  echo "<td".$bahan_bakar_td.">".$bahan_bakar."</td>";
                  echo "<td".$sumber_air_td.">".$sumber_air."</td>";
                  echo "<td".$daya_listrik_td.">".$daya_listrik."</td>";
                  echo "<td".$aktual_kelas_td.">".$aktual_kelas."</td>";
                  echo "</tr>";
                }

                $numrow++; // Tambah 1 setiap kali looping
              }

              echo "</table>";
              echo "</div>";

              // Cek apakah variabel kosong lebih dari 1
              // Jika lebih dari 1, berarti ada data yang masih kosong
              if($kosong > 1){
              ?>
                <script>
                $(document).ready(function(){
                  // Ubah isi dari tag span dengan id jumlah_kosong dengan isi dari variabel kosong
                  $("#jumlah_kosong").html('<?php echo $kosong; ?>');

                  $("#kosong").show(); // Munculkan alert validasi kosong
                });
                </script>
              <?php
              }else{ // Jika semua data sudah diisi
                echo "<hr>";

                // Buat sebuah tombol untuk mengimport data ke database
                echo "<button type='submit' name='import' class='btn btn-primary'><i class='fa fa-upload'></i> Import</button>";
              }

              echo "</form>";
            }else{ // Jika file yang diupload bukan File Excel 2007 (.xlsx)
              // Munculkan pesan validasi
              echo "<div class='alert alert-danger'>
              Hanya File Excel 2007 (.xlsx) yang diperbolehkan
              </div>";
            }
          }
          ?>
        </div>
      </div>
      </div>
    </div>
      </div>
     