<!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h2 class="h4 mb-0 text-gray-800">Data Parameter</h2>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="">Data Parameter</li>
            </ol>
          </div>
          <div class="row mb-12">
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-12 col-md-6 mb-4">
               <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Tabel Data Paramaeter</h6>
                </div>
                <div class="card-body">
                  <form method="post" action="proses_simpan_parameter.php" enctype="multipart/form-data">
                     <div class="form-group row">
                      <label class="col-sm-2 col-form-label">ID Variabel</label>
                      <div class="col-sm-4">
                        <select class="form-control" name="id" autofocus="autofocus" required="required">
                        <option value="" selected="selected">-Pilih Variabel Penentu-</option>
                         <?php 
                           $query="SELECT * FROM tbl_vp";
                           $sql=mysqli_query($connect, $query);
                           while($data=mysqli_fetch_array($sql)){
                           echo"<option value='".$data['id_variabel']."'>".$data['id_variabel']."-".$data['nama_variabel']."</option>";
                            }
                         ?>
                      </select>
                      </div>
                      <div class="col-sm-2">
                        <input type="text" class="form-control" name="nilai" placeholder="Nilai" required="required">
                      </div>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" name="parameter" placeholder="Parameter" required="required">
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
                  <h6 class="m-0 font-weight-bold text-primary">Tabel Data Parameter</h6>
                </div>
                  <div class="table-responsive p-3">
                  <table class="table align-items-center table-hover table-bordered" id="dataTableHover">
                    <thead class="thead-light">
                      <tr>
                        <th>NO</th>
                        <th>ID Variabel</th>
                        <th>Data Parameter</th>
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
                         <td><?php echo $data_user['id_variabel'];?>-<?php echo $data_user['nama_variabel'];?></td>
                      <td>
                      <table class="table align-items-center" id="dataTableHover">
                    <thead class="thead-light">
                      <tr>
                        <th>Nilai</th>
                        <th>Class</th>
                        <th>Opsi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                       include "koneksi.php";
                       $query="SELECT * FROM tbl_parameter WHERE id_variabel='".$data_user['id_variabel']."'";
                       $sql=mysqli_query($connect, $query);
                       while ($data=mysqli_fetch_array($sql)) {
                      ?>
                      <tr>
                         <td><?php echo $data['nilai'];?></td>
                         <td><?php echo $data['parameter'];?></td>
                         <td><a href="dashboard.php?p=edit_data_vp&id=<?php echo $data_user['id_variabel'];?>" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a>
                          <a href="proses_hapus_vp.php?id=<?php echo $data_user['id_variabel'];?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a></td>
                      </tr>
                     <?php }
                      ?>
                      </tbody>
                      </table>
                      </td>
                         
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