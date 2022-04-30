<!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h2 class="h4 mb-0 text-gray-800">Data Training</h2>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Data Training</li>
            </ol>
          </div>
          <a href="dashboard.php?p=form" class="btn btn-primary" style="margin-bottom: 3px;"><i class="fa fa-upload"></i> Import Data</a>
          <div class="row mb-12">
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-12 col-md-6 mb-4">
               <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Tabel Data Training</h6>
                </div>
                <div class="card-body">
                <?php
                  if(isset($_GET['notif'])){
                       if($_GET['notif']=="import-sukses"){
                        echo "<div class='alert alert-success alert-dismissible'>
                              <a style='text-decoration:none;' href='dashboard.php?p=data_training' type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</a>
                                <i class='icon fa fa-check'></i> Data Training <b> Berhasil Diimport</b>
                              </div>";
                      }
                    }
                    ?>
                  <div class="table-responsive p-3">
                  <table class="table align-items-center table-hover table-bordered" id="dataTableHover">
                    <thead class="thead-light">
                      <tr>
                        <th>NO</th>
                        <th>NIK</th>
                        <th>Nama KK</th>
                        <th>Alamat</th>
                        <th>NM. Kab</th>
                        <th>NM. Kec</th>
                        <th>NM. Kel</th>
                        <th>Umur</th>
                        <th>Jlh. Tanggungan</th>
                        <th>Pekerjaan</th>
                        <th>Pendidikan</th>
                        <th>Pendapatan</th>
                        <th>Status Rumah</th>
                        <th>Bahan Bakar</th>
                        <th>Sumber Air</th>
                        <th>Daya Listrik</th>
                        <th>Actual Kelas</th>
                      </tr>
                      </thead>
                        <tbody>
                              <?php
                              include"koneksi.php";
                              $no_a=1;
                              $query_a="SELECT * FROM tbl_training";
                              $sql_a=mysqli_query($connect, $query_a);
                              while($data_a=mysqli_fetch_array($sql_a)) {?>
                              <tr>
                                <td><?php echo $no_a;?></td>
                                <td><?php echo $data_a['nik'];?></td>
                                <td><?php echo $data_a['nama'];?></td>
                                <td><?php echo $data_a['alamat'];?></td>
                                <td><?php echo $data_a['nama_kab'];?></td>
                                <td><?php echo $data_a['nama_kec'];?></td>
                                <td><?php echo $data_a['nama_kel'];?></td>
                                <td><?php echo $data_a['umur'];?></td>
                                <td><?php echo $data_a['jml_tanggungan'];?></td>
                                <td><?php echo $data_a['pekerjaan'];?></td>
                                <td><?php echo $data_a['pendidikan'];?></td>
                                <td><?php echo $data_a['pendapatan'];?></td>
                                <td><?php echo $data_a['status_rmh'];?></td>
                                <td><?php echo $data_a['bahan_bakar'];?></td>
                                <td><?php echo $data_a['sumber_air'];?></td>
                                <td><?php echo $data_a['daya_listrik'];?></td>
                                <td><?php echo $data_a['aktual_kelas'];?></td>
                              </tr>
                              <?php $no_a++;}?>
                            </tbody>
                          </table>
                        </div>
                        </div>
                      </div>
                    </div>
                  </div>

        </div>
        <!---Container Fluid-->