      <div class="container-fluid" id="container-wrapper">
          <div class="row mb-12">
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-12 col-md-6 mb-4">
               <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Form Proses Klasifikasi</h6>
            </div>
          <div class="card-body" style="overflow: auto;">
           <table class="table align-items-center table-hover table-bordered" style="font-size: 12px;">
            <thead class="thead-light" style="text-align: center;">
              <th>NIK</th>
              <th>Nama</th>
              <th>Tanggal</th>
              <th>P/T</th>
              <th>Jumlah Kelas</th>
              <th>Probilitas Umur</th>
              <th>Probilitas Tanggungan</th>
              <th>Probilitas Pekerjaan</th>
              <th>Probilitas Pendapatan</th>
              <th>Probilitas Pendidikan</th>
              <th>Probilitas Status Rumah</th>
              <th>Probilitas Bahan Bakar</th>
              <th>Probilitas Sumber Air</th>
              <th>Probilitas Daya Listrik</th>
              <th>Jumlah Probilitas</th>
              <th>Status</th>
            </thead>
            <tbody>
          <?php
          if (isset($_POST['id_klasifikasi'])) {
                include"koneksi.php";
                $periode=$_POST['periode'];
                $tahun=$_POST['tahun'];
                if (isset($_POST['simpan'])){
                foreach ($_POST['id_klasifikasi'] as $value) {
              $cek_a = mysqli_query($connect, "SELECT * FROM tbl_klasifikasi WHERE id_klasifikasi = '$value'");
                $result_a = mysqli_num_rows($cek_a);
                $data_a = mysqli_fetch_array($cek_a);
                
                  $query="SELECT * FROM tbl_klasifikasi WHERE id_klasifikasi='$value'";
                  $sql=mysqli_query($connect, $query);
                  while ($data=mysqli_fetch_array($sql)) {
                    echo"<tr>";
                    echo"<td>".$data['nik']."</td>";
                    echo"<td>".$data['nama']."</td>";
                    echo"<td>".date('Y-m-d')."</td>";
                    echo"<td>".$periode."/".$tahun."</td>";

                    echo "<td>";
                    echo "<table class='table align-items-center table-hover table-bordered' style='font-size: 12px;''>
                    <tr>
                    <thead>
                       <th>Miskin</th>
                       <th>Tidak Miskin</th>
                    </thead>
                    </tr>";

                    $order="SELECT * FROM tbl_training WHERE aktual_kelas='MISKIN'";
                    $query_order=mysqli_query($connect, $order);
                    $data_order=array();
                    while(($row_order=mysqli_fetch_array($query_order)) !=null){
                    $data_order[]=$row_order;
                    }
                    $count=count($data_order);

                    $order_a="SELECT * FROM tbl_training WHERE aktual_kelas='TIDAK MISKIN'";
                    $query_order_a=mysqli_query($connect, $order_a);
                    $data_order_a=array();
                    while(($row_order_a=mysqli_fetch_array($query_order_a)) !=null){
                    $data_order_a[]=$row_order_a;
                    }
                    $count_a=count($data_order_a);

                    $order_b="SELECT * FROM tbl_training";
                    $query_order_b=mysqli_query($connect, $order_b);
                    $data_order_b=array();
                    while(($row_order_b=mysqli_fetch_array($query_order_b)) !=null){
                    $data_order_b[]=$row_order_b;
                    }
                    $count_b=count($data_order_b);

                    $kelasmiskin= $count / $count_b;
                    $kelastdkmiskin= $count_a / $count_b;
                    echo "<tr>";
                     echo"<td>".round($kelasmiskin,3)."</td>";
                     echo"<td>".round($kelastdkmiskin,3)."</td>";
                    echo "</tr>";
                    echo "</table>";
                    echo "</td>";

                    echo "<td>";
                    echo "<table class='table align-items-center table-hover table-bordered' style='font-size: 12px;''>
                    <tr>
                    <thead>
                       <th>Miskin</th>
                       <th>Tidak Miskin</th>
                    </thead>
                    </tr>";

                    $order_c="SELECT * FROM tbl_training WHERE aktual_kelas='MISKIN' AND umur='".$data['umur']."'";
                    $query_order_c=mysqli_query($connect, $order_c);
                    $data_order_c=array();
                    while(($row_order_c=mysqli_fetch_array($query_order_c)) !=null){
                    $data_order_c[]=$row_order_c;
                    }
                    $count_c=count($data_order_c);

                    $pum = $count_c / $count;
                    

                    $order_d="SELECT * FROM tbl_training WHERE aktual_kelas='TIDAK MISKIN' AND umur='".$data['umur']."'";
                    $query_order_d=mysqli_query($connect, $order_d);
                    $data_order_d=array();
                    while(($row_order_d=mysqli_fetch_array($query_order_d)) !=null){
                    $data_order_d[]=$row_order_d;
                    }
                    $count_d=count($data_order_d);

                    $putm = $count_d / $count_a;
                    

                    echo "<tr>";
                     if ($pum == 0) {
                      $pum +=1;
                      echo"<td>".round($pum,3)."</td>";
                    }else{
                      echo"<td>".round($pum,3)."</td>";
                    }

                     if ($putm == 0) {
                      $putm +=1;
                      echo"<td>".round($putm,3)."</td>";
                    }else{
                      echo"<td>".round($putm,3)."</td>";
                    }
                    echo "</tr>";
                    echo "</table>";
                    echo "</td>";

                    echo "<td>";
                    echo "<table class='table align-items-center table-hover table-bordered' style='font-size: 12px;''>
                    <tr>
                    <thead>
                       <th>Miskin</th>
                       <th>Tidak Miskin</th>
                    </thead>
                    </tr>";

                     $order_e="SELECT * FROM tbl_training WHERE aktual_kelas='MISKIN' AND jml_tanggungan='".$data['jml_tanggungan']."'";
                    $query_order_e=mysqli_query($connect, $order_e);
                    $data_order_e=array();
                    while(($row_order_e=mysqli_fetch_array($query_order_e)) !=null){
                    $data_order_e[]=$row_order_e;
                    }
                    $count_e=count($data_order_e);

                    $ptm = $count_e / $count;
                    

                    $order_f="SELECT * FROM tbl_training WHERE aktual_kelas='TIDAK MISKIN' AND jml_tanggungan='".$data['jml_tanggungan']."'";
                    $query_order_f=mysqli_query($connect, $order_f);
                    $data_order_f=array();
                    while(($row_order_f=mysqli_fetch_array($query_order_f)) !=null){
                    $data_order_f[]=$row_order_f;
                    }
                    $count_f=count($data_order_f);

                    $pttm = $count_f / $count_a;
                    
                    echo "<tr>";
                     if ($ptm == 0) {
                      $ptm +=1;
                      echo"<td>".round($ptm,3)."</td>";
                    }else{
                      echo"<td>".round($ptm,3)."</td>";
                    }

                     if ($pttm == 0) {
                      $pttm +=1;
                      echo"<td>".round($pttm,3)."</td>";
                    }else{
                      echo"<td>".round($pttm,3)."</td>";
                    }
                    echo "</tr>";
                    echo "</table>";
                    echo "</td>";

                    echo "<td>";
                    echo "<table class='table align-items-center table-hover table-bordered' style='font-size: 12px;''>
                    <tr>
                    <thead>
                       <th>Miskin</th>
                       <th>Tidak Miskin</th>
                    </thead>
                    </tr>";

                    $order_g="SELECT * FROM tbl_training WHERE aktual_kelas='MISKIN' AND pekerjaan='".$data['pekerjaan']."'";
                    $query_order_g=mysqli_query($connect, $order_g);
                    $data_order_g=array();
                    while(($row_order_g=mysqli_fetch_array($query_order_g)) !=null){
                    $data_order_g[]=$row_order_g;
                    }
                    $count_g=count($data_order_g);

                    $ppm = $count_g / $count;
                    
                    
                    $order_h="SELECT * FROM tbl_training WHERE aktual_kelas='TIDAK MISKIN' AND pekerjaan='".$data['pekerjaan']."'";
                    $query_order_h=mysqli_query($connect, $order_h);
                    $data_order_h=array();
                    while(($row_order_h=mysqli_fetch_array($query_order_h)) !=null){
                    $data_order_h[]=$row_order_h;
                    }
                    $count_h=count($data_order_h);

                    $pptm = $count_h / $count_a;
                    

                    echo "<tr>";
                     if ($ppm == 0) {
                      $ppm +=1;
                      echo"<td>".round($ppm,3)."</td>";
                    }else{
                      echo"<td>".round($ppm,3)."</td>";
                    }

                     if ($pptm == 0) {
                      $pptm +=1;
                      echo"<td>".round($pptm,3)."</td>";
                    }else{
                      echo"<td>".round($pptm,3)."</td>";
                    }
                    echo "</tr>";
                    echo "</table>";
                    echo "</td>";

                    echo "<td>";
                    echo "<table class='table align-items-center table-hover table-bordered' style='font-size: 12px;''>
                    <tr>
                    <thead>
                       <th>Miskin</th>
                       <th>Tidak Miskin</th>
                    </thead>
                    </tr>";

                    $order_i="SELECT * FROM tbl_training WHERE aktual_kelas='MISKIN' AND pendapatan='".$data['pendapatan']."'";
                    $query_order_i=mysqli_query($connect, $order_i);
                    $data_order_i=array();
                    while(($row_order_i=mysqli_fetch_array($query_order_i)) !=null){
                    $data_order_i[]=$row_order_i;
                    }
                    $count_i=count($data_order_i);

                    $ppnm = $count_i / $count;
                    

                    $order_j="SELECT * FROM tbl_training WHERE aktual_kelas='TIDAK MISKIN' AND pendapatan='".$data['pendapatan']."'";
                    $query_order_j=mysqli_query($connect, $order_j);
                    $data_order_j=array();
                    while(($row_order_j=mysqli_fetch_array($query_order_j)) !=null){
                    $data_order_j[]=$row_order_j;
                    }
                    $count_j=count($data_order_j);

                    $ppntm = $count_j / $count_a;
                    

                    echo "<tr>";
                     if ($ppnm == 0) {
                      $ppnm +=1;
                      echo"<td>".round($ppnm,3)."</td>";
                    }else{
                      echo"<td>".round($ppnm,3)."</td>";
                    }

                    if ($ppntm == 0) {
                      $ppntm +=1;
                      echo"<td>".round($ppntm,3)."</td>";
                    }else{
                      echo"<td>".round($ppntm,3)."</td>";
                    }
                    echo "</tr>";
                    echo "</table>";
                    echo "</td>";

                    echo "<td>";
                    echo "<table class='table align-items-center table-hover table-bordered' style='font-size: 12px;''>
                    <tr>
                    <thead>
                       <th>Miskin</th>
                       <th>Tidak Miskin</th>
                    </thead>
                    </tr>";

                    $order_k="SELECT * FROM tbl_training WHERE aktual_kelas='MISKIN' AND pendidikan='".$data['pendidikan']."'";
                    $query_order_k=mysqli_query($connect, $order_k);
                    $data_order_k=array();
                    while(($row_order_k=mysqli_fetch_array($query_order_k)) !=null){
                    $data_order_k[]=$row_order_k;
                    }
                    $count_k=count($data_order_k);

                    $ppdm = $count_k / $count;
                    

                    $order_l="SELECT * FROM tbl_training WHERE aktual_kelas='TIDAK MISKIN' AND pendidikan='".$data['pendidikan']."'";
                    $query_order_l=mysqli_query($connect, $order_l);
                    $data_order_l=array();
                    while(($row_order_l=mysqli_fetch_array($query_order_l)) !=null){
                    $data_order_l[]=$row_order_l;
                    }
                    $count_l=count($data_order_l);

                    $ppdtm = $count_l / $count_a;
                    

                    echo "<tr>";
                     if ($ppdm == 0) {
                      $ppdm +=1;
                      echo"<td>".round($ppdm,3)."</td>";
                    }else{
                      echo"<td>".round($ppdm,3)."</td>";
                    }

                    if ($ppdtm == 0) {
                      $ppdtm +=1;
                      echo"<td>".round($ppdtm,3)."</td>";
                    }else{
                      echo"<td>".round($ppdtm,3)."</td>";
                    }
                    echo "</tr>";
                    echo "</table>";
                    echo "</td>";

                    echo "<td>";
                    echo "<table class='table align-items-center table-hover table-bordered' style='font-size: 12px;''>
                    <tr>
                    <thead>
                       <th>Miskin</th>
                       <th>Tidak Miskin</th>
                    </thead>
                    </tr>";

                    $order_m="SELECT * FROM tbl_training WHERE aktual_kelas='MISKIN' AND status_rmh='".$data['status_rmh']."'";
                    $query_order_m=mysqli_query($connect, $order_m);
                    $data_order_m=array();
                    while(($row_order_m=mysqli_fetch_array($query_order_m)) !=null){
                    $data_order_m[]=$row_order_m;
                    }
                    $count_m=count($data_order_m);

                    $psrm = $count_m / $count;
                    

                    $order_n="SELECT * FROM tbl_training WHERE aktual_kelas='TIDAK MISKIN' AND status_rmh='".$data['status_rmh']."'";
                    $query_order_n=mysqli_query($connect, $order_n);
                    $data_order_n=array();
                    while(($row_order_n=mysqli_fetch_array($query_order_n)) !=null){
                    $data_order_n[]=$row_order_n;
                    }
                    $count_n=count($data_order_n);

                    $psrtm = $count_n / $count_a;
                    

                    echo "<tr>";
                     if ($psrm == 0) {
                      $psrm +=1;
                      echo"<td>".round($psrm,3)."</td>";
                    }else{
                      echo"<td>".round($psrm,3)."</td>";
                    }

                    if ($psrtm == 0) {
                      $psrtm +=1;
                      echo"<td>".round($psrtm,3)."</td>";
                    }else{
                      echo"<td>".round($psrtm,3)."</td>";
                    }
                    echo "</tr>";
                    echo "</table>";
                    echo "</td>";

                    echo "<td>";
                    echo "<table class='table align-items-center table-hover table-bordered' style='font-size: 12px;''>
                    <tr>
                    <thead>
                       <th>Miskin</th>
                       <th>Tidak Miskin</th>
                    </thead>
                    </tr>";

                    $order_o="SELECT * FROM tbl_training WHERE aktual_kelas='MISKIN' AND bahan_bakar='".$data['bahan_bakar']."'";
                    $query_order_o=mysqli_query($connect, $order_o);
                    $data_order_o=array();
                    while(($row_order_o=mysqli_fetch_array($query_order_o)) !=null){
                    $data_order_o[]=$row_order_o;
                    }
                    $count_o=count($data_order_o);

                    $pbbm = $count_o / $count;
                    

                    $order_p="SELECT * FROM tbl_training WHERE aktual_kelas='TIDAK MISKIN' AND bahan_bakar='".$data['bahan_bakar']."'";
                    $query_order_p=mysqli_query($connect, $order_p);
                    $data_order_p=array();
                    while(($row_order_p=mysqli_fetch_array($query_order_p)) !=null){
                    $data_order_p[]=$row_order_p;
                    }
                    $count_p=count($data_order_p);

                    $pbbtm = $count_p / $count_a;
                    

                    echo "<tr>";
                     if ($pbbm == 0) {
                      $pbbm +=1;
                      echo"<td>".round($pbbm,3)."</td>";
                    }else{
                      echo"<td>".round($pbbm,3)."</td>";
                    }

                    if ($pbbtm == 0) {
                      $pbbtm +=1;
                      echo"<td>".round($pbbtm,3)."</td>";
                    }else{
                      echo"<td>".round($pbbtm,3)."</td>";
                    }
                    echo "</tr>";
                    echo "</table>";
                    echo "</td>";

                    echo "<td>";
                    echo "<table class='table align-items-center table-hover table-bordered' style='font-size: 12px;''>
                    <tr>
                    <thead>
                       <th>Miskin</th>
                       <th>Tidak Miskin</th>
                    </thead>
                    </tr>";

                    $order_q="SELECT * FROM tbl_training WHERE aktual_kelas='MISKIN' AND sumber_air='".$data['sumber_air']."'";
                    $query_order_q=mysqli_query($connect, $order_q);
                    $data_order_q=array();
                    while(($row_order_q=mysqli_fetch_array($query_order_q)) !=null){
                    $data_order_q[]=$row_order_q;
                    }
                    $count_q=count($data_order_q);

                    $psam = $count_q / $count;
                    

                    $order_r="SELECT * FROM tbl_training WHERE aktual_kelas='TIDAK MISKIN' AND sumber_air='".$data['sumber_air']."'";
                    $query_order_r=mysqli_query($connect, $order_r);
                    $data_order_r=array();
                    while(($row_order_r=mysqli_fetch_array($query_order_r)) !=null){
                    $data_order_r[]=$row_order_r;
                    }
                    $count_r=count($data_order_r);

                    $psatm = $count_r / $count_a;
                    

                    echo "<tr>";
                     if ($psam == 0) {
                      $psam +=1;
                      echo"<td>".round($psam,3)."</td>";
                    }else{
                      echo"<td>".round($psam,3)."</td>";
                    }

                    if ($psatm == 0) {
                      $psatm +=1;
                      echo"<td>".round($psatm,3)."</td>";
                    }else{
                      echo"<td>".round($psatm,3)."</td>";
                    }
                    echo "</tr>";
                    echo "</table>";
                    echo "</td>";

                    echo "<td>";
                    echo "<table class='table align-items-center table-hover table-bordered' style='font-size: 12px;''>
                    <tr>
                    <thead>
                       <th>Miskin</th>
                       <th>Tidak Miskin</th>
                    </thead>
                    </tr>";

                    $order_s="SELECT * FROM tbl_training WHERE aktual_kelas='MISKIN' AND daya_listrik='".$data['daya_listrik']."'";
                    $query_order_s=mysqli_query($connect, $order_s);
                    $data_order_s=array();
                    while(($row_order_s=mysqli_fetch_array($query_order_s)) !=null){
                    $data_order_s[]=$row_order_s;
                    }
                    $count_s=count($data_order_s);

                    $pdlm = $count_s / $count;
                    

                    $order_t="SELECT * FROM tbl_training WHERE aktual_kelas='TIDAK MISKIN' AND daya_listrik='".$data['daya_listrik']."'";
                    $query_order_t=mysqli_query($connect, $order_t);
                    $data_order_t=array();
                    while(($row_order_t=mysqli_fetch_array($query_order_t)) !=null){
                    $data_order_t[]=$row_order_t;
                    }
                    $count_t=count($data_order_t);

                    $pdltm = $count_t / $count_a;
                    

                    echo "<tr>";
                     if ($pdlm == 0) {
                      $pdlm +=1;
                      echo"<td>".round($pdlm,3)."</td>";
                    }else{
                      echo"<td>".round($pdlm,3)."</td>";
                    }

                    if ($pdltm == 0) {
                      $pdltm += 1;
                       echo"<td>".round($pdltm,3)."</td>";
                    }else{
                       echo"<td>".round($pdltm,3)."</td>";
                    }
                    echo "</tr>";
                    echo "</table>";
                    echo "</td>";

                    echo "<td>";
                    echo "<table class='table align-items-center table-hover table-bordered' style='font-size: 12px;''>
                    <tr>
                    <thead>
                       <th>Miskin</th>
                       <th>Tidak Miskin</th>
                    </thead>
                    </tr>";

                    $miskin = $pum * $ptm * $ppm * $ppnm * $ppdm * $psrm * $pbbm * $psam * $pdlm * $kelasmiskin;
                    $tidakmiskin = $putm * $pttm * $pptm * $ppntm * $ppdtm * $psrtm * $pbbtm * $psatm * $pdltm * $kelastdkmiskin;

                    echo "<tr>";
                    echo"<td>".round($miskin,4)."</td>";
                    echo"<td>".round($tidakmiskin,4)."</td>";
                    echo "</tr>";
                    echo "</table>";
                    echo "</td>";


                    if ($tidakmiskin > $miskin) {
                      $status='Tidak Miskin';
                       echo"<td>".$status."</td>";
                    }else {
                      $status='Miskin';
                      echo"<td>".$status."</td>";
                    }
                    
                    echo"<tr>";
                    $query_x="UPDATE tbl_klasifikasi SET status_kl='$status' WHERE id_klasifikasi='$value'";
                    $sql_x=mysqli_query($connect, $query_x);
                    
                  }
                
              }
            }else{
              echo "<script>alert('Opss!, Data Klasifikasi Belum Dipilih');
              document.location.href='dashboard.php?p=data_hasil_klasifikasi'</script>\n";
            }
          }
      ?>
    </tbody>
  </table>
            <form method='post' action='proses_simpan_hk.php'>
              <div class="box-body" style="height:10px; overflow: auto;">
          <?php
          if (isset($_POST['id_klasifikasi'])) {
                include"koneksi.php";
                $periode=$_POST['periode'];
                $tahun=$_POST['tahun'];
                if (isset($_POST['simpan'])){
                foreach ($_POST['id_klasifikasi'] as $value) {
                  $query="SELECT * FROM tbl_klasifikasi WHERE id_klasifikasi='$value'";
                  $sql=mysqli_query($connect, $query);
                  while ($data=mysqli_fetch_array($sql)) {
                    echo"<div class='row'>";
                        echo"<div class='col-sm-4'>";
                          echo"<div class='form-group'>";
                          echo"<label>ID Klasifikasi</label>";
                            echo"<input type='text' name='id[]' readonly='readonly' class='form-control' value='".$data['id_klasifikasi']."'>";
                          echo"</div>";
                        echo"</div>";
                        echo"<div class='col-sm-4'>";
                          echo"<div class='form-group'>";
                          echo"<label>No. KK</label>";
                            echo"<input type='text' name='no_kk[]' readonly='readonly' class='form-control' value='".$data['no_kk']."'>";
                          echo"</div>";
                        echo"</div>";
                        echo"<div class='col-sm-4'>";
                          echo"<div class='form-group'>";
                          echo"<label>NIK</label>";
                            echo"<input type='text' name='nik[]' readonly='readonly' class='form-control' value='".$data['nik']."'>";
                          echo"</div>";
                        echo"</div>";
                        echo"<div class='col-sm-4'>";
                          echo"<div class='form-group'>";
                          echo"<label>Nama</label>";
                            echo"<input name='nama[]' type='text' readonly='readonly' class='form-control' value='".$data['nama']."'>";
                          echo"</div>";
                        echo"</div>";
                      echo"</div>";

                      echo"<div class='row'>";
                        echo"<div class='col-sm-4'>";
                          echo"<div class='form-group'>";
                          echo"<label>Tgl</label>";
                            echo"<input type='text' name='tgl[]' readonly='readonly' value='".date('Y-m-d')."' class='form-control' required='required'>";
                          echo"</div>";
                        echo"</div>";
                        echo"<div class='col-sm-4'>";
                          echo"<div class='form-group'>";
                          echo"<label>Periode</label>";
                          echo"<input type='text' name='periode[]' readonly='readonly' value='".$periode."' class='form-control' required='required'>";
                          echo"</div>";
                        echo"</div>";
                        echo"<div class='col-sm-4'>";
                          echo"<div class='form-group'>";
                          echo"<label>Tahun</label>";
                            echo"<input type='text' name='tahun[]' readonly='readonly' value='".$tahun."' type='text' class='form-control' required='required'>";
                          echo"</div>";
                        echo"</div>";
                      echo"</div>";

                    echo"<div class='row'>";
                        echo"<div class='col-sm-4'>";
                          echo"<div class='form-group'>";
                          echo"<label>Umur</label>";
                            echo"<input type='text' name='umur[]' readonly='readonly' class='form-control' value='".$data['umur']."'>";
                          echo"</div>";
                        echo"</div>";
                        echo"<div class='col-sm-4'>";
                          echo"<div class='form-group'>";
                          echo"<label>Jml.Tanggungan</label>";
                            echo"<input type='text' name='jml_tanggungan[]' readonly='readonly' class='form-control' value='".$data['jml_tanggungan']."'>";
                          echo"</div>";
                        echo"</div>";
                        echo"<div class='col-sm-4'>";
                          echo"<div class='form-group'>";
                          echo"<label>Pekerjaan</label>";
                            echo"<input type='text' name='pekerjaan[]' readonly='readonly' class='form-control' value='".$data['pekerjaan']."'>";
                          echo"</div>";
                        echo"</div>";
                        echo"<div class='col-sm-4'>";
                          echo"<div class='form-group'>";
                          echo"<label>Pendidikan</label>";
                            echo"<input type='text' name='pendidikan[]' readonly='readonly' class='form-control' value='".$data['pendidikan']."'>";
                          echo"</div>";
                        echo"</div>";
                        echo"<div class='col-sm-4'>";
                          echo"<div class='form-group'>";
                          echo"<label>pendapatan</label>";
                            echo"<input type='text' name='pendapatan[]' readonly='readonly' class='form-control' value='".$data['pendapatan']."'>";
                          echo"</div>";
                        echo"</div>";
                        echo"<div class='col-sm-4'>";
                          echo"<div class='form-group'>";
                          echo"<label>Status Rumah</label>";
                            echo"<input type='text' name='status_rmh[]' readonly='readonly' class='form-control' value='".$data['status_rmh']."'>";
                          echo"</div>";
                        echo"</div>";
                        echo"<div class='col-sm-4'>";
                          echo"<div class='form-group'>";
                          echo"<label>Bahan Bakar</label>";
                            echo"<input type='text' name='bahan_bakar[]' readonly='readonly' class='form-control' value='".$data['bahan_bakar']."'>";
                          echo"</div>";
                        echo"</div>";
                        echo"<div class='col-sm-4'>";
                          echo"<div class='form-group'>";
                          echo"<label>Sumber Air</label>";
                            echo"<input type='text' name='sumber_air[]' readonly='readonly' class='form-control' value='".$data['sumber_air']."'>";
                          echo"</div>";
                        echo"</div>";
                        echo"<div class='col-sm-4'>";
                          echo"<div class='form-group'>";
                          echo"<label>Daya Listrik</label>";
                            echo"<input type='text' name='daya_listrik[]' readonly='readonly' class='form-control' value='".$data['daya_listrik']."'>";
                          echo"</div>";
                        echo"</div>";
                      echo"</div>";

                      $order="SELECT * FROM tbl_training WHERE aktual_kelas='MISKIN'";
                      $query_order=mysqli_query($connect, $order);
                      $data_order=array();
                      while(($row_order=mysqli_fetch_array($query_order)) !=null){
                      $data_order[]=$row_order;
                      }
                      $count=count($data_order);

                      $order_a="SELECT * FROM tbl_training WHERE aktual_kelas='TIDAK MISKIN'";
                      $query_order_a=mysqli_query($connect, $order_a);
                      $data_order_a=array();
                      while(($row_order_a=mysqli_fetch_array($query_order_a)) !=null){
                      $data_order_a[]=$row_order_a;
                      }
                      $count_a=count($data_order_a);
                      $order_b="SELECT * FROM tbl_training";
                      $query_order_b=mysqli_query($connect, $order_b);
                      $data_order_b=array();
                      while(($row_order_b=mysqli_fetch_array($query_order_b)) !=null){
                      $data_order_b[]=$row_order_b;
                      }
                      $count_b=count($data_order_b);

                      $kelasmiskin= round(($count / $count_b),3);
                      $kelastdkmiskin= round(($count_a / $count_b),3);
                   
                      echo"<div class='row'>";
                        echo"<div class='col-sm-4'>";
                          echo"<div class='form-group'>";
                          echo"<label>Jml. Kelas Miskin</label>";
                            echo"<input type='text' name='km[]' readonly='readonly' class='form-control' value='".$kelasmiskin."'>";
                          echo"</div>";
                        echo"</div>";
                        echo"<div class='col-sm-4'>";
                          echo"<div class='form-group'>";
                          echo"<label>Jml. Kelas Tidak Miskin</label>";
                            echo"<input type='text' name='ktm[]' readonly='readonly' class='form-control' value='".$kelastdkmiskin."'>";
                          echo"</div>";
                        echo"</div>";
                      echo"</div>";

                      $order_c="SELECT * FROM tbl_training WHERE aktual_kelas='MISKIN' AND umur='".$data['umur']."'";
                    $query_order_c=mysqli_query($connect, $order_c);
                    $data_order_c=array();
                    while(($row_order_c=mysqli_fetch_array($query_order_c)) !=null){
                    $data_order_c[]=$row_order_c;
                    }
                    $count_c=count($data_order_c);
                    $pum = $count_c / $count;

                    
                    echo"<div class='row'>";
                    if ($pum == 0) {
                      $pum +=1;
                        echo"<div class='col-sm-4'>";
                          echo"<div class='form-group'>";
                          echo"<label>Probilitas Umur Miskin</label>";
                            echo"<input type='text' name='pum[]' readonly='readonly' class='form-control' value='".round($pum,3)."'>";
                          echo"</div>";
                        echo"</div>";
                      }else{
                        echo"<div class='col-sm-4'>";
                          echo"<div class='form-group'>";
                          echo"<label>Probilitas Umur Miskin</label>";
                            echo"<input type='text' name='pum[]' readonly='readonly' class='form-control' value='".round($pum,3)."'>";
                          echo"</div>";
                        echo"</div>";
                        }
                      echo"</div>";
                    

                    $order_d="SELECT * FROM tbl_training WHERE aktual_kelas='TIDAK MISKIN' AND umur='".$data['umur']."'";
                    $query_order_d=mysqli_query($connect, $order_d);
                    $data_order_d=array();
                    while(($row_order_d=mysqli_fetch_array($query_order_d)) !=null){
                    $data_order_d[]=$row_order_d;
                    }
                    $count_d=count($data_order_d);

                    $putm = $count_d / $count_a;
                    
                    
                    echo"<div class='row'>";
                    if ($putm == 0) {
                      $putm +=1;
                        echo"<div class='col-sm-4'>";
                          echo"<div class='form-group'>";
                          echo"<label>Probilitas Umur Tidak Miskin</label>";
                            echo"<input type='text' name='putm[]' readonly='readonly' class='form-control' value='".round($putm,3)."'>";
                          echo"</div>";
                        echo"</div>";
                        }else{
                        echo"<div class='col-sm-4'>";
                          echo"<div class='form-group'>";
                          echo"<label>Probilitas Umur Tidak Miskin</label>";
                            echo"<input type='text' name='putm[]' readonly='readonly' class='form-control' value='".round($putm,3)."'>";
                          echo"</div>";
                        echo"</div>";
                        }
                      echo"</div>";
                    

                     $order_e="SELECT * FROM tbl_training WHERE aktual_kelas='MISKIN' AND jml_tanggungan='".$data['jml_tanggungan']."'";
                    $query_order_e=mysqli_query($connect, $order_e);
                    $data_order_e=array();
                    while(($row_order_e=mysqli_fetch_array($query_order_e)) !=null){
                    $data_order_e[]=$row_order_e;
                    }
                    $count_e=count($data_order_e);

                    $ptm = $count_e / $count;

                    
                    echo"<div class='row'>";
                    if ($ptm == 0) {
                      $ptm +=1;
                        echo"<div class='col-sm-4'>";
                          echo"<div class='form-group'>";
                          echo"<label>Probilitas Jml. Tanggungan Miskin</label>";
                            echo"<input type='text' name='pum[]' readonly='readonly' class='form-control' value='".round($ptm,3)."'>";
                          echo"</div>";
                        echo"</div>";
                      }else{
                        echo"<div class='col-sm-4'>";
                          echo"<div class='form-group'>";
                          echo"<label>Probilitas Jml. Tanggungan Miskin</label>";
                            echo"<input type='text' name='pum[]' readonly='readonly' class='form-control' value='".round($ptm,3)."'>";
                          echo"</div>";
                        echo"</div>";
                        }
                      echo"</div>";
                    

                    $order_f="SELECT * FROM tbl_training WHERE aktual_kelas='TIDAK MISKIN' AND jml_tanggungan='".$data['jml_tanggungan']."'";
                    $query_order_f=mysqli_query($connect, $order_f);
                    $data_order_f=array();
                    while(($row_order_f=mysqli_fetch_array($query_order_f)) !=null){
                    $data_order_f[]=$row_order_f;
                    }
                    $count_f=count($data_order_f);

                    $pttm = $count_f / $count_a;
                    
                    
                    echo"<div class='row'>";
                    if ($pttm == 0) {
                      $pttm +=1;
                        echo"<div class='col-sm-4'>";
                          echo"<div class='form-group'>";
                          echo"<label>Probilitas Jml. Tanggungan Tidak Miskin</label>";
                            echo"<input type='text' name='pttm[]' readonly='readonly' class='form-control' value='".round($pttm,3)."'>";
                          echo"</div>";
                        echo"</div>";
                        }else{
                        echo"<div class='col-sm-4'>";
                          echo"<div class='form-group'>";
                          echo"<label>Probilitas Jml. Tanggungan Tidak Miskin</label>";
                            echo"<input type='text' name='pttm[]' readonly='readonly' class='form-control' value='".round($pttm,3)."'>";
                          echo"</div>";
                        echo"</div>";
                         }
                      echo"</div>";
                   

                    $order_g="SELECT * FROM tbl_training WHERE aktual_kelas='MISKIN' AND pekerjaan='".$data['pekerjaan']."'";
                    $query_order_g=mysqli_query($connect, $order_g);
                    $data_order_g=array();
                    while(($row_order_g=mysqli_fetch_array($query_order_g)) !=null){
                    $data_order_g[]=$row_order_g;
                    }
                    $count_g=count($data_order_g);

                    $ppm = $count_g / $count;

                   
                    echo"<div class='row'>";
                     if ($ppm == 0) {
                      $ppm +=1;
                        echo"<div class='col-sm-4'>";
                          echo"<div class='form-group'>";
                          echo"<label>Probilitas Pekerjaan Miskin</label>";
                            echo"<input type='text' name='ppm[]' readonly='readonly' class='form-control' value='".round($ppm,3)."'>";
                          echo"</div>";
                        echo"</div>";
                      }else{
                        echo"<div class='col-sm-4'>";
                          echo"<div class='form-group'>";
                          echo"<label>Probilitas Pekerjaan Miskin</label>";
                            echo"<input type='text' name='ppm[]' readonly='readonly' class='form-control' value='".round($ppm,3)."'>";
                          echo"</div>";
                        echo"</div>";
                        }
                      echo"</div>";
                    
                    
                    
                    $order_h="SELECT * FROM tbl_training WHERE aktual_kelas='TIDAK MISKIN' AND pekerjaan='".$data['pekerjaan']."'";
                    $query_order_h=mysqli_query($connect, $order_h);
                    $data_order_h=array();
                    while(($row_order_h=mysqli_fetch_array($query_order_h)) !=null){
                    $data_order_h[]=$row_order_h;
                    }
                    $count_h=count($data_order_h);

                    $pptm = $count_h / $count_a;

                   
                    echo"<div class='row'>";
                     if ($pptm == 0) {
                      $pptm +=1;
                        echo"<div class='col-sm-4'>";
                          echo"<div class='form-group'>";
                          echo"<label>Probilitas Pekerjaan Tidak Miskin</label>";
                            echo"<input type='text' name='pptm[]' readonly='readonly' class='form-control' value='".round($pptm,3)."'>";
                          echo"</div>";
                        echo"</div>";
                        }else{
                        echo"<div class='col-sm-4'>";
                          echo"<div class='form-group'>";
                          echo"<label>Probilitas Pekerjaan Tidak Miskin</label>";
                            echo"<input type='text' name='pptm[]' readonly='readonly' class='form-control' value='".round($pptm,3)."'>";
                          echo"</div>";
                        echo"</div>";
                        }
                      echo"</div>";
                    

                    $order_i="SELECT * FROM tbl_training WHERE aktual_kelas='MISKIN' AND pendapatan='".$data['pendapatan']."'";
                    $query_order_i=mysqli_query($connect, $order_i);
                    $data_order_i=array();
                    while(($row_order_i=mysqli_fetch_array($query_order_i)) !=null){
                    $data_order_i[]=$row_order_i;
                    }
                    $count_i=count($data_order_i);

                    $ppnm = $count_i / $count;

                    
                    echo"<div class='row'>";
                    if ($ppnm == 0) {
                      $ppnm +=1;
                        echo"<div class='col-sm-4'>";
                          echo"<div class='form-group'>";
                          echo"<label>Probilitas Pendapatan Miskin</label>";
                            echo"<input type='text' name='ppnm[]' readonly='readonly' class='form-control' value='".round($ppnm,3)."'>";
                          echo"</div>";
                        echo"</div>";
                      }else{
                        echo"<div class='col-sm-4'>";
                          echo"<div class='form-group'>";
                          echo"<label>Probilitas Pendapatan Miskin</label>";
                            echo"<input type='text' name='ppnm[]' readonly='readonly' class='form-control' value='".round($ppnm,3)."'>";
                          echo"</div>";
                        echo"</div>";
                        }
                      echo"</div>";
                    
                    

                    $order_j="SELECT * FROM tbl_training WHERE aktual_kelas='TIDAK MISKIN' AND pendapatan='".$data['pendapatan']."'";
                    $query_order_j=mysqli_query($connect, $order_j);
                    $data_order_j=array();
                    while(($row_order_j=mysqli_fetch_array($query_order_j)) !=null){
                    $data_order_j[]=$row_order_j;
                    }
                    $count_j=count($data_order_j);

                    $ppntm = $count_j / $count_a;
                    
                    
                    echo"<div class='row'>";
                    if ($ppntm == 0) {
                      $ppntm +=1;
                        echo"<div class='col-sm-4'>";
                          echo"<div class='form-group'>";
                          echo"<label>Probilitas pendapatan Tidak Miskin</label>";
                            echo"<input type='text' name='ppntm[]' readonly='readonly' class='form-control' value='".round($ppntm,3)."'>";
                          echo"</div>";
                        echo"</div>";
                        }else{
                        echo"<div class='col-sm-4'>";
                          echo"<div class='form-group'>";
                          echo"<label>Probilitas pendapatan Tidak Miskin</label>";
                            echo"<input type='text' name='ppntm[]' readonly='readonly' class='form-control' value='".round($ppntm,3)."'>";
                          echo"</div>";
                        echo"</div>";
                        }
                      echo"</div>";
                    

                    $order_k="SELECT * FROM tbl_training WHERE aktual_kelas='MISKIN' AND pendidikan='".$data['pendidikan']."'";
                    $query_order_k=mysqli_query($connect, $order_k);
                    $data_order_k=array();
                    while(($row_order_k=mysqli_fetch_array($query_order_k)) !=null){
                    $data_order_k[]=$row_order_k;
                    }
                    $count_k=count($data_order_k);

                    $ppdm = $count_k / $count;

                    
                    echo"<div class='row'>";
                    if ($ppdm == 0) {
                      $ppdm +=1;
                        echo"<div class='col-sm-4'>";
                          echo"<div class='form-group'>";
                          echo"<label>Probilitas Pendidikan Miskin</label>";
                            echo"<input type='text' name='ppdm[]' readonly='readonly' class='form-control' value='".round($ppdm,3)."'>";
                          echo"</div>";
                        echo"</div>";
                      }else{
                        echo"<div class='col-sm-4'>";
                          echo"<div class='form-group'>";
                          echo"<label>Probilitas Pendidikan Miskin</label>";
                            echo"<input type='text' name='ppdm[]' readonly='readonly' class='form-control' value='".round($ppdm,3)."'>";
                          echo"</div>";
                        echo"</div>";
                        }
                      echo"</div>";
                    
                    

                    $order_l="SELECT * FROM tbl_training WHERE aktual_kelas='TIDAK MISKIN' AND pendidikan='".$data['pendidikan']."'";
                    $query_order_l=mysqli_query($connect, $order_l);
                    $data_order_l=array();
                    while(($row_order_l=mysqli_fetch_array($query_order_l)) !=null){
                    $data_order_l[]=$row_order_l;
                    }
                    $count_l=count($data_order_l);

                    $ppdtm = $count_l / $count_a;
                    
                   
                    echo"<div class='row'>";
                     if ($ppdtm == 0) {
                      $ppdtm +=1;
                        echo"<div class='col-sm-4'>";
                          echo"<div class='form-group'>";
                          echo"<label>Probilitas Pendidikan Tidak Miskin</label>";
                            echo"<input type='text' name='ppdtm[]' readonly='readonly' class='form-control' value='".round($ppdtm,3)."'>";
                          echo"</div>";
                        echo"</div>";
                        }else{
                        echo"<div class='col-sm-4'>";
                          echo"<div class='form-group'>";
                          echo"<label>Probilitas Pendidikan Tidak Miskin</label>";
                            echo"<input type='text' name='ppdtm[]' readonly='readonly' class='form-control' value='".round($ppdtm,3)."'>";
                          echo"</div>";
                        echo"</div>";
                        }
                      echo"</div>";
                    

                    $order_m="SELECT * FROM tbl_training WHERE aktual_kelas='MISKIN' AND status_rmh='".$data['status_rmh']."'";
                    $query_order_m=mysqli_query($connect, $order_m);
                    $data_order_m=array();
                    while(($row_order_m=mysqli_fetch_array($query_order_m)) !=null){
                    $data_order_m[]=$row_order_m;
                    }
                    $count_m=count($data_order_m);

                    $psrm = $count_m / $count;

                    
                    echo"<div class='row'>";
                    if ($psrm == 0) {
                      $psrm +=1;
                        echo"<div class='col-sm-4'>";
                          echo"<div class='form-group'>";
                          echo"<label>Probilitas Status Rumah Miskin</label>";
                            echo"<input type='text' name='psrm[]' readonly='readonly' class='form-control' value='".round($psrm,3)."'>";
                          echo"</div>";
                        echo"</div>";
                      }else{
                        echo"<div class='col-sm-4'>";
                          echo"<div class='form-group'>";
                          echo"<label>Probilitas Status Rumah Miskin</label>";
                            echo"<input type='text' name='psrm[]' readonly='readonly' class='form-control' value='".round($psrm,3)."'>";
                          echo"</div>";
                        echo"</div>";
                        }
                      echo"</div>";
                    
                    

                    $order_n="SELECT * FROM tbl_training WHERE aktual_kelas='TIDAK MISKIN' AND status_rmh='".$data['status_rmh']."'";
                    $query_order_n=mysqli_query($connect, $order_n);
                    $data_order_n=array();
                    while(($row_order_n=mysqli_fetch_array($query_order_n)) !=null){
                    $data_order_n[]=$row_order_n;
                    }
                    $count_n=count($data_order_n);

                    $psrtm = $count_n / $count_a;
                    
                   
                    echo"<div class='row'>";
                     if ($psrtm == 0) {
                      $psrtm +=1;
                        echo"<div class='col-sm-4'>";
                          echo"<div class='form-group'>";
                          echo"<label>Probilitas Status Rumah Tidak Miskin</label>";
                            echo"<input type='text' name='psrtm[]' readonly='readonly' class='form-control' value='".round($psrtm,3)."'>";
                          echo"</div>";
                        echo"</div>";
                        }else{
                        echo"<div class='col-sm-4'>";
                          echo"<div class='form-group'>";
                          echo"<label>Probilitas Status Rumah Tidak Miskin</label>";
                            echo"<input type='text' name='psrtm[]' readonly='readonly' class='form-control' value='".round($psrtm,3)."'>";
                          echo"</div>";
                        echo"</div>";
                      }
                      echo"</div>";
                    
                    $order_o="SELECT * FROM tbl_training WHERE aktual_kelas='MISKIN' AND bahan_bakar='".$data['bahan_bakar']."'";
                    $query_order_o=mysqli_query($connect, $order_o);
                    $data_order_o=array();
                    while(($row_order_o=mysqli_fetch_array($query_order_o)) !=null){
                    $data_order_o[]=$row_order_o;
                    }
                    $count_o=count($data_order_o);

                    $pbbm = $count_o / $count;

                    
                    echo"<div class='row'>";
                    if ($pbbm == 0) {
                      $pbbm +=1;
                        echo"<div class='col-sm-4'>";
                          echo"<div class='form-group'>";
                          echo"<label>Probilitas Bahan Bakar Miskin</label>";
                            echo"<input type='text' name='pbbm[]' readonly='readonly' class='form-control' value='".round($pbbm,3)."'>";
                          echo"</div>";
                        echo"</div>";
                      }else{
                        echo"<div class='col-sm-4'>";
                          echo"<div class='form-group'>";
                          echo"<label>Probilitas Bahan Bakar Miskin</label>";
                            echo"<input type='text' name='pbbm[]' readonly='readonly' class='form-control' value='".round($pbbm,3)."'>";
                          echo"</div>";
                        echo"</div>";
                        }
                      echo"</div>";
                    
                    

                    $order_p="SELECT * FROM tbl_training WHERE aktual_kelas='TIDAK MISKIN' AND bahan_bakar='".$data['bahan_bakar']."'";
                    $query_order_p=mysqli_query($connect, $order_p);
                    $data_order_p=array();
                    while(($row_order_p=mysqli_fetch_array($query_order_p)) !=null){
                    $data_order_p[]=$row_order_p;
                    }
                    $count_p=count($data_order_p);

                    $pbbtm = $count_p / $count_a;
                    
                    
                    echo"<div class='row'>";
                    if ($pbbtm == 0) {
                      $pbbtm +=1;
                        echo"<div class='col-sm-4'>";
                          echo"<div class='form-group'>";
                          echo"<label>Probilitas Bahan Bakar Tidak Miskin</label>";
                            echo"<input type='text' name='pbbtm[]' readonly='readonly' class='form-control' value='".round($pbbtm,3)."'>";
                          echo"</div>";
                        echo"</div>";
                        }else{
                        echo"<div class='col-sm-4'>";
                          echo"<div class='form-group'>";
                          echo"<label>Probilitas Bahan Bakar Tidak Miskin</label>";
                            echo"<input type='text' name='pbbtm[]' readonly='readonly' class='form-control' value='".round($pbbtm,3)."'>";
                          echo"</div>";
                        echo"</div>";
                        }
                      echo"</div>";
                    

                    $order_q="SELECT * FROM tbl_training WHERE aktual_kelas='MISKIN' AND sumber_air='".$data['sumber_air']."'";
                    $query_order_q=mysqli_query($connect, $order_q);
                    $data_order_q=array();
                    while(($row_order_q=mysqli_fetch_array($query_order_q)) !=null){
                    $data_order_q[]=$row_order_q;
                    }
                    $count_q=count($data_order_q);

                    $psam = $count_q / $count;

                   
                    echo"<div class='row'>";
                     if ($psam == 0) {
                      $psam +=1;
                        echo"<div class='col-sm-4'>";
                          echo"<div class='form-group'>";
                          echo"<label>Probilitas Sumber Air Miskin</label>";
                            echo"<input type='text' name='psam[]' readonly='readonly' class='form-control' value='".round($psam,3)."'>";
                          echo"</div>";
                        echo"</div>";
                      }else{
                        echo"<div class='col-sm-4'>";
                          echo"<div class='form-group'>";
                          echo"<label>Probilitas Sumber Air Miskin</label>";
                            echo"<input type='text' name='psam[]' readonly='readonly' class='form-control' value='".round($psam,3)."'>";
                          echo"</div>";
                        echo"</div>";
                        }
                      echo"</div>";
                    
                    

                    $order_r="SELECT * FROM tbl_training WHERE aktual_kelas='TIDAK MISKIN' AND sumber_air='".$data['sumber_air']."'";
                    $query_order_r=mysqli_query($connect, $order_r);
                    $data_order_r=array();
                    while(($row_order_r=mysqli_fetch_array($query_order_r)) !=null){
                    $data_order_r[]=$row_order_r;
                    }
                    $count_r=count($data_order_r);

                    $psatm = $count_r / $count_a;
                    
                    
                    echo"<div class='row'>";
                    if ($psatm == 0) {
                      $psatm +=1;
                        echo"<div class='col-sm-4'>";
                          echo"<div class='form-group'>";
                          echo"<label>Probilitas Sumber Air Tidak Miskin</label>";
                            echo"<input type='text' name='psatm[]' readonly='readonly' class='form-control' value='".round($psatm,3)."'>";
                          echo"</div>";
                        echo"</div>";
                        }else{
                        echo"<div class='col-sm-4'>";
                          echo"<div class='form-group'>";
                          echo"<label>Probilitas Sumber Air Tidak Miskin</label>";
                            echo"<input type='text' name='psatm[]' readonly='readonly' class='form-control' value='".round($psatm,3)."'>";
                          echo"</div>";
                        echo"</div>";
                         }
                      echo"</div>";
                   

                    $order_s="SELECT * FROM tbl_training WHERE aktual_kelas='MISKIN' AND daya_listrik='".$data['daya_listrik']."'";
                    $query_order_s=mysqli_query($connect, $order_s);
                    $data_order_s=array();
                    while(($row_order_s=mysqli_fetch_array($query_order_s)) !=null){
                    $data_order_s[]=$row_order_s;
                    }
                    $count_s=count($data_order_s);

                    $pdlm = $count_s / $count;

                    
                    echo"<div class='row'>";
                    if ($pdlm == 0) {
                      $pdlm +=1;
                        echo"<div class='col-sm-4'>";
                          echo"<div class='form-group'>";
                          echo"<label>Probilitas Daya Listrik Miskin</label>";
                            echo"<input type='text' name='pdlm[]' readonly='readonly' class='form-control' value='".round($pdlm,3)."'>";
                          echo"</div>";
                        echo"</div>";
                      }else{
                        echo"<div class='col-sm-4'>";
                          echo"<div class='form-group'>";
                          echo"<label>Probilitas Daya Listrik Miskin</label>";
                            echo"<input type='text' name='pdlm[]' readonly='readonly' class='form-control' value='".round($pdlm,3)."'>";
                          echo"</div>";
                        echo"</div>";
                        }
                      echo"</div>";
                    
                    

                    $order_t="SELECT * FROM tbl_training WHERE aktual_kelas='TIDAK MISKIN' AND daya_listrik='".$data['daya_listrik']."'";
                    $query_order_t=mysqli_query($connect, $order_t);
                    $data_order_t=array();
                    while(($row_order_t=mysqli_fetch_array($query_order_t)) !=null){
                    $data_order_t[]=$row_order_t;
                    }
                    $count_t=count($data_order_t);

                    $pdltm = $count_t / $count_a;
                    
                    
                    echo"<div class='row'>";
                    if ($pdltm == 0) {
                      $pdltm += 1;
                        echo"<div class='col-sm-4'>";
                          echo"<div class='form-group'>";
                          echo"<label>Probilitas Daya Listrik Tidak Miskin</label>";
                            echo"<input type='text' name='pdltm[]' readonly='readonly' class='form-control' value='".round($pdltm,3)."'>";
                          echo"</div>";
                        echo"</div>";
                        }else{
                        echo"<div class='col-sm-4'>";
                          echo"<div class='form-group'>";
                          echo"<label>Probilitas Daya Listrik Tidak Miskin</label>";
                            echo"<input type='text' name='pdltm[]' readonly='readonly' class='form-control' value='".round($pdltm,3)."'>";
                          echo"</div>";
                        echo"</div>";
                        }
                      echo"</div>";
                    

                    $miskin = $pum * $ptm * $ppm * $ppnm * $ppdm * $psrm * $pbbm * $psam * $pdlm * $kelasmiskin;
                    $tidakmiskin = $putm * $pttm * $pptm * $ppntm * $ppdtm * $psrtm * $pbbtm * $psatm * $pdltm * $kelastdkmiskin;

                    echo"<div class='row'>";
                        echo"<div class='col-sm-4'>";
                          echo"<div class='form-group'>";
                          echo"<label>Jml. Probilitas Miskin</label>";
                            echo"<input type='text' name='jpm[]' readonly='readonly' value='".round($miskin,4)."' class='form-control' required='required'>";
                          echo"</div>";
                        echo"</div>";
                        echo"<div class='col-sm-4'>";
                          echo"<div class='form-group'>";
                          echo"<label>Jml. Probilitas Tidak Miskin</label>";
                          echo"<input type='text' name='jptm[]' readonly='readonly' value='".round($tidakmiskin,4)."' class='form-control' required='required'>";
                          echo"</div>";
                        echo"</div>";
                      echo"</div>";

                      
                      echo"<div class='row'>";
                      if ($tidakmiskin > $miskin) {
                      $status='Tidak Miskin';
                          echo"<div class='col-sm-4'>";
                            echo"<div class='form-group'>";
                            echo"<label>Status</label>";
                              echo"<input type='text' name='status[]' readonly='readonly' class='form-control' value='".$status."'>";
                            echo"</div>";
                          echo"</div>";
                          }else{
                            $status='Miskin';
                          echo"<div class='col-sm-4'>";
                            echo"<div class='form-group'>";
                            echo"<label>Status</label>";
                              echo"<input type='text' name='status[]' readonly='readonly' class='form-control' value='".$status."'>";
                            echo"</div>";
                          echo"</div>";
                           }
                        echo"</div>";
                    }
                 }
              }
            }else{
              echo "<script>alert('Opss!, Data Klasifikasi Belum Dipilih');
              document.location.href='dashboard.php?p=data_hasil_klasifikasi'</script>\n";
          }
        
      ?>
       </div>
      <a href="dashboard.php?p=data_hasil_klasifikasi" class="btn btn-danger" style="margin-top: 15px;"><i class="fa fa-close"></i> Tutup</a>
      <button type='submit' class='btn btn-success' style="margin-top: 15px;"><i class='fa fa-save'></i> Simpan Proses Akhir</i></button>
      </form>
          </div>
         
        </div>
      </div>
     