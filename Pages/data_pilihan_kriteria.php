<!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h2 class="h4 mb-0 text-gray-800">Data Plihan Kriteria</h2>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Data Pilihan Kriteria</li>
            </ol>
          </div>
          <a href="dashboard.php?p=input_pilihan_kriteria" class="btn btn-primary" style="margin-bottom: 3px;"><i class="fa fa-edit"></i> INPUT PILIHAN KRITERIA</a>
          <div class="row mb-12">
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-12 col-md-6 mb-4">
               <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Tabel Data Pilihan Kriteria</h6>
                </div>
                <div class="card-body">
                  <div class="table-responsive p-3">
                  <table class="table align-items-center " id="dataTableHover">
                    <thead class="thead-light">
                      <tr>
                        <th>No</th>
                        <th>ID Pilihan</th>
                        <th>ID Kriteria</th>
                        <th>Data Pilihan Kriteria</th>
                        <th>Opsi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      include"koneksi.php";
                      $no=1;
                      $query="SELECT*FROM tbl_sk";
                      $sql=mysqli_query($connect, $query);
                      while($data=mysqli_fetch_array($sql)) {?>
                      <tr>
                        <td><?php echo $no;?></td>
                        <td><?php echo $data['id_pilihan'];?></td>
                         <?php
                          $query_b="SELECT * FROM tbl_pilihan WHERE id_pilihan='".$data['id_pilihan']."'";
                          $sql_b=mysqli_query($connect, $query_b);
                          $data_b=mysqli_fetch_array($sql_b);
                        ?>
                        <td><?php echo $data_b['id_kriteria'];?>-<?php echo $data_b['nama_kriteria'];?></td>
                        <td>
                          <table class="table">
                            <thead>
                              <tr>
                                <th>No</th>
                                <th>Pilihan Kriteria</th>
                                <th>Nilai</th>
                                <th>Bobot</th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php
                              include"koneksi.php";
                              $no_a=1;
                              $query_a="SELECT*FROM tbl_pilihan WHERE id_pilihan='".$data['id_pilihan']."'";
                              $sql_a=mysqli_query($connect, $query_a);
                              while($data_a=mysqli_fetch_array($sql_a)) {?>
                              <tr>
                                <td><?php echo $no_a;?></td>
                                <td><?php echo $data_a['pilihan_kriteria'];?></td>
                                <td><?php echo $data_a['nilai'];?></td>
                                <td><?php echo $data_a['bobot'];?></td>
                              </tr>
                              <?php $no_a++;}?>
                            </tbody>
                          </table>
                        </td>
                        <td><a href="proses_hapus_pk.php?id=<?php echo $data['id_pilihan'];?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a></td>
                      </tr>
                      <?php $no++;}
                      ?>
                    </tbody>
                   
                  </table>
                </div>
                </div>
              </div>
            </div>
          </div>
        </div>
