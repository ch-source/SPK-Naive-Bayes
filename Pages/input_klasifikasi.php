<!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="row mb-12">
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-12 col-md-6 mb-4">
               <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Form Input Klasifikasi</h6>
                </div>
                <div class="card-body">
                  <form method="post" action="proses_simpan_klasifikasi.php" enctype="multipart/form-data">
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">NO. KK</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" name="nok" required="required">
                      </div>
                      <label class="col-sm-2 col-form-label">Umur</label>
                      <div class="col-sm-4">
                        <select name="umur" class="form-control" required="required">
                              <option value="" selected="selected">-Pilih Umur-</option>
                              <option value="<50 Tahun"><50 Tahun</option>
                              <option value="50 Tahun">50 Tahun</option>
                              <option value=">50 Tahun">>50 Tahun</option>
                          </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">NIK</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" name="nik" required="required">
                      </div>
                      <label class="col-sm-2 col-form-label">Pendidikan</label>
                      <div class="col-sm-4">
                          <select name="pendidikan" class="form-control" required="required">
                              <option value="" selected="selected">-Pilih Pendidikan-</option>
                              <option value="SD">SD</option>
                              <option value="SMP">SMP</option>
                              <option value="SMA">SMA</option>
                              <option value="S1">S1</option>
                          </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Nama</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" name="nama" required="required">
                      </div>
                      <label class="col-sm-2 col-form-label">Pendapatan</label>
                      <div class="col-sm-4">
                        <select name="pendapatan" class="form-control" required="required">
                              <option value="" selected="selected">-Pilih Pendapatan-</option>
                              <option value="< 500.000"><500.000</option>
                              <option value=">500.000">>500.000</option>
                              <option value=">1.000.000">>1.000.000</option>
                              <option value=">2.000.000">>2.000.000</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Alamat</label>
                      <div class="col-sm-4">
                        <textarea type="text" class="form-control" name="alt" required="required"></textarea>
                      </div>
                       <label class="col-sm-2 col-form-label">Status Rumah</label>
                      <div class="col-sm-4">
                        <select name="status" class="form-control" required="required">
                              <option value="" selected="selected">-Pilih Status Rumah-</option>
                              <option value="Gubuk">Gubuk</option>
                              <option value="Papan">Papan</option>
                              <option value="Setengah Tembok">Setengah Tembok</option>
                              <option value="Tembok">Tembok</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Pekerjaan</label>
                      <div class="col-sm-4">
                        <select name="pekerjaan" class="form-control" required="required">
                              <option value="" selected="selected">-Pilih Pekerjaan-</option>
                              <option value="Tidak Bekerja">Tidak Bekerja</option>
                              <option value="Buruh Tidak Lepas">Buruh Tidak Lepas</option>
                              <option value="Buruh Lepas">Buruh Lepas</option>
                              <option value="Wirausaha">Wirausaha</option>
                              <option value="Pegawai Swasta">Pegawai Swasta</option>
                        </select>
                      </div>
                      <label class="col-sm-2 col-form-label">Bahan Bakar</label>
                      <div class="col-sm-4">
                        <select name="bb" class="form-control" required="required">
                              <option value="" selected="selected">-Pilih Bahan Bakar-</option>
                              <option value="Gas">Gas</option>
                              <option value="Kayu Api">Kayu Api</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Jml. Tanggungan</label>
                      <div class="col-sm-4">
                        <select name="jml" class="form-control" required="required">
                              <option value="" selected="selected">-Pilih Jumlah Tanggungan-</option>
                              <option value="<6 Orang"><6 Orang</option>
                              <option value="6 Orang">6 Orang</option>
                              <option value=">6 Orang">>6 Orang</option>
                          </select>
                      </div>
                      <label class="col-sm-2 col-form-label">Sumber Air</label>
                      <div class="col-sm-4">
                        <select name="sa" class="form-control" required="required">
                              <option value="" selected="selected">-Pilih Sumber Air-</option>
                              <option value="Sumur">Sumur</option>
                              <option value="Ledeng Meteran">Ledeng Meteran</option>
                              <option value="Air Isi Ulang">Air Isi Ulang</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Daya Listrik</label>
                      <div class="col-sm-4">
                        <select name="dl" class="form-control" required="required">
                              <option value="" selected="selected">-Pilih Daya Listrik-</option>
                              <option value="<500 W"><500 W</option>
                              <option value="500 W">500 W</option>
                              <option value=">500 W">>500 W</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
                        <a href="dashboard.php?p=data_klasifikasi" class="btn btn-danger"><i class="fa fa-close"></i>Batal !</a>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!---Container Fluid-->