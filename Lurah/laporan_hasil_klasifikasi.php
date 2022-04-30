<!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h2 class="h4 mb-0 text-gray-800">Laporan Hasil Klasifikasi</h2>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Laporan Hasil Klasifikasi</li>
            </ol>
          </div>
          <div class="row">
            <div class="col-md-12" style="margin-bottom: 5px;">
              <div class="card">
                <div class="card-header">
                  <b class="card-title">Laporan Hasil Klasifikasi</b>
                </div>
                <div class="card-body">
                   <form method="post" action="laporan/laporan_hasil_klasifikasi.php" target="_blank">
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Tgl. Awal</label>
                      <div class="col-sm-3">
                        <input type="date" name="tglaw" class="form-control" required="required">
                      </div>
                      <label class="col-sm-2 col-form-label">Tgl. Akhir</label>
                      <div class="col-sm-3">
                      <input type="date" name="tglak" class="form-control" required="required">
                      </div>
                      <div class="col-sm-2">
                        <button type="submit" class="btn btn-info"><i class="fa fa-print"></i> Cetak </button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <div class="row mb-12">
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-12 col-md-6 mb-4">
               <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Tabel Data Laporan Hasil Klasifikasi</h6>
                </div>
                <div class="card-body">
                  <div class="table-responsive p-3">
                  <table class="table align-items-center table-hover table-bordered" id="dataTableHover">
                    <thead class="thead-light">
                      <tr>
                        <th>No</th>
                        <th>No. KK</th>
                        <th>NIK-Nama</th>
                        <th>Tanggal</th>
                        <th>Periode/Tahun</th>
                        <th>Umur</th>
                        <th>Jlh. Tanggungan</th>
                        <th>Pekerjaan</th>
                        <th>Pendidikan</th>
                        <th>Pendapatan</th>
                        <th>Status Rumah</th>
                        <th>Bahan Bakar</th>
                        <th>Sumber Air</th>
                        <th>Daya Listrik</th>
                        <th>Status</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      include"koneksi.php";
                      $no=1;
                      $query="SELECT*FROM tbl_score_akhir";
                      $sql=mysqli_query($connect, $query);
                      while($data=mysqli_fetch_array($sql)) {?>
                      <tr>
                      <td><?php echo $no; ?></td>
                      <td><?php echo $data['no_kk'];?></td>
                      <td><?php echo $data['nik'];?>-<?php echo $data['nama'];?></td>
                      <td><?php echo $data['tanggal'];?></td>
                      <td><?php echo $data['periode'];?>-<?php echo $data['tahun'];?></td>
                      <td><?php echo $data['umur'];?></td>
                      <td><?php echo $data['jml_tanggungan'];?></td>
                      <td><?php echo $data['pekerjaan'];?></td>
                      <td><?php echo $data['pendidikan'];?></td>
                      <td><?php echo $data['pendapatan'];?></td>
                      <td><?php echo $data['status_rmh'];?></td>
                      <td><?php echo $data['bahan_bakar'];?></td>
                      <td><?php echo $data['sumber_air'];?></td>
                      <td><?php echo $data['daya_listrik'];?></td>
                      <td><?php echo $data['status'];?></td>
                      </tr>
                      <?php $no++; }
                      ?>
                    </tbody>
                  </table>
                        </div>
                </div>
              </div>
            </div>
          </div>

        </div>
        <!---Container Fluid-->