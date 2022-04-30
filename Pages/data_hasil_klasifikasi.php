<!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h2 class="h4 mb-0 text-gray-800">Data Hasil Klasifikasi</h2>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Data Hasil Klasifikasi</li>
            </ol>
          </div>
          <div class="row mb-12">
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-12 col-md-6 mb-4">
               <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Tabel Data Hasil Klasifikasi</h6>
                </div>
                <div class="card-body">
                  <a href="dashboard.php?p=input_hk" class="btn btn-primary" style="margin-bottom: 3px; "><i class="fa fa-edit"></i> INPUT HASIL KLASIFIKASI</a>
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