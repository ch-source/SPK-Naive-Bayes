<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="img/lg.png" rel="icon">
  <title>Kantor Kelurahan Panjer - Register</title>
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="css/ruang-admin.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-login">
  <!-- Register Content -->
  <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-xl-10 col-lg-12 col-md-9">
        <div class="card shadow-sm my-5">
          <div class="card-body">
            <div class="row">
              <div class="col-lg-12">
                <div class="login-form">
                <div class="text-center">
                    <h1 class="h2 text-gray-900 mb-4">Form Registrasi Penduduk</h1>
                  </div>
                <form action="proses_registrasi.php" method="post" role="form" class="contactForm">
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">No. KK</label>
                      <div class="col-sm-4">
                          <input type="text" name="nok" class="form-control" id="name" placeholder="Masukan Nomor Kartu Keluarga"/>
                      </div>
                    <label class="col-sm-2 col-form-label">NIK</label>
                      <div class="col-sm-4">
                          <input type="text" name="nik" class="form-control" id="name" placeholder="Masukan Nomor Induk Kependudukan"/>
                     </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Nama</label>
                      <div class="col-sm-4">
                         <input type="text" name="nama" class="form-control" id="name" placeholder="Masukan Nama Lengkap">
                      </div>
                    <label class="col-sm-2 col-form-label">Alamat</label>
                      <div class="col-sm-4">
                         <input type="text" name="alamat" class="form-control" id="name" placeholder="Masukan Alamat"/>
                      </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Password</label>
                      <div class="col-sm-4">
                        <input type="password" name="password" class="form-control" id="name" placeholder="Password"/>
                      </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2"></label>
                    <div class="col-sm-2">
                    <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-plus"></i> Register</button>
                    </div>
                    <div class="col-sm-2">
                    <a href="index.php" class="btn btn-danger"><i class="fa fa-close"></i> Batal !</a>
                    </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Register Content -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="js/ruang-admin.min.js"></script>
</body>

</html>