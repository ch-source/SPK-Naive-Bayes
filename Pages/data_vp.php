<!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h2 class="h4 mb-0 text-gray-800">Data Variabel Penentu</h2>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="">Data Variabel Penentu</li>
            </ol>
          </div>
          <div class="row mb-12">
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-12 col-md-6 mb-4">
               <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Tabel Data Variabel Penentu</h6>
                </div>
                <div class="card-body">
                  <?php
                  include "koneksi.php";
                  $query = "SELECT max(id_variabel) as maxId FROM tbl_vp";
                  $hasil = mysqli_query($connect,$query);
                  $data = mysqli_fetch_array($hasil);
                  $idaset = $data['maxId'];
                  $noUrut = (int) substr($idaset, 3, 3);
                  $noUrut++;
                  $char = "VRP";
                  $idaset= $char . sprintf("%03s", $noUrut);
                  ?>
                  <form method="post" action="proses_simpan_vp.php" enctype="multipart/form-data">
                     <div class="form-group row">
                      <label class="col-sm-2 col-form-label">ID Variabel</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" value="<?php echo $idaset;?>" name="id" readonly="readonly">
                      </div>
                      <label class="col-sm-2 col-form-label">Nama Variabel</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" name="nama" required="required">
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
                      </div>
                    </div>
                  </form>
                  <hr>
                  <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Tabel Data Variabel</h6>
                </div>
                  <div class="table-responsive p-3">
                  <table class="table align-items-center table-hover table-bordered" id="dataTableHover">
                    <thead class="thead-light">
                      <tr>
                        <th>NO</th>
                        <th>ID Variabel</th>
                        <th>Nama Variabel</th>
                        <th>Opsi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                       include "koneksi.php";
                       $no=1;
                       $query_user="SELECT * FROM tbl_vp";
                       $sql_user=mysqli_query($connect, $query_user);
                       while ($data_user=mysqli_fetch_array($sql_user)) {
                      ?>
                      <tr>
                         <td><?php echo $no;?></td>
                         <td><?php echo $data_user['id_variabel'];?></td>
                         <td><?php echo $data_user['nama_variabel'];?></td>
                         <td><a href="dashboard.php?p=edit_data_vp&id=<?php echo $data_user['id_variabel'];?>" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a>
                          <a href="proses_hapus_vp.php?id=<?php echo $data_user['id_variabel'];?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a></td>
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
        <!---Container Fluid-->