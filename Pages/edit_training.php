<!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="row mb-12">
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-12 col-md-6 mb-4">
               <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Form Edit Training</h6>
                </div>
                <div class="card-body">
                  <?php
                  include"koneksi.php";
                  $id=$_GET['id'];
                  $query_a="SELECT * FROM tbl_training WHERE id_training='$id'";
                  $sql_a=mysqli_query($connect, $query_a);
                  $data_a=mysqli_fetch_array($sql_a);?>
                   <form method="post" action="proses_edit_training.php?id=<?php echo $id;?>" enctype="multipart/form-data">
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">ID Training</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" name="id" value="<?php echo $id; ?>" readonly="readonly">
                      </div>
                      <label class="col-sm-2 col-form-label">Umur</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" name="umur" value="<?php echo $data_a['umur']; ?>" required="required">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">NO. KK</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" name="nok" value="<?php echo $data_a['no_kk']; ?>" required="required">
                      </div>
                      <label class="col-sm-2 col-form-label">Pendidikan</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" name="pendidikan" value="<?php echo $data_a['pendidikan']; ?>" required="required">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">NIK</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" name="nik" value="<?php echo $data_a['nik']; ?>" required="required">
                      </div>
                      <label class="col-sm-2 col-form-label">Pendapatan</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" name="pendapatan" value="<?php echo $data_a['pendapatan']; ?>" required="required">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Nama</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" name="nama" value="<?php echo $data_a['nama']; ?>" required="required">
                      </div>
                       <label class="col-sm-2 col-form-label">Status Rumah</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" name="status" value="<?php echo $data_a['status_rumah']; ?>" required="required">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Alamat</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" name="alt" value="<?php echo $data_a['alamat']; ?>" required="required">
                      </div>
                      <label class="col-sm-2 col-form-label">Bahan Bakar</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" name="bb" value="<?php echo $data_a['bahan_bakar']; ?>" required="required">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Pekerjaan</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" name="pekerjaan" value="<?php echo $data_a['pekerjaan']; ?>" required="required">
                      </div>
                      <label class="col-sm-2 col-form-label">Sumber Air</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" name="sa" value="<?php echo $data_a['sumber_air']; ?>" required="required">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Jml. Tanggungan</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" name="jml" value="<?php echo $data_a['jml_tanggungan']; ?>" required="required">
                      </div>
                      <label class="col-sm-2 col-form-label">Daya Listrik</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" name="dl" value="<?php echo $data_a['daya_listrik']; ?>" required="required">
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan Perubahan</button>
                        <a href="dashboard.php?p=data_training" class="btn btn-danger"><i class="fa fa-close"></i>Batal !</a>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!---Container Fluid-->