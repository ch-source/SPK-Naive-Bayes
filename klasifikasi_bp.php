<?php
if (isset($_POST['id_klasifikasi'])) {
include "koneksi.php";
$umur = $_POST['umur'];
$nok = $_POST['nok'];
$pendidikan = $_POST['pendidikan'];
$nik = $_POST['nik'];
$pendapatan = $_POST['pendapatan'];
$nama = $_POST['nama'];
$status = $_POST['status'];
$alt =$_POST['alt'];
$bb =$_POST['bb'];
$pekerjaan =$_POST['pekerjaan'];
$sa =$_POST['sa'];
$jml =$_POST['jml'];
$dl = $_POST['dl'];
if (isset($_POST['simpan'])){
foreach ($_POST['id_klasifikasi'] as $value) {
$cek = mysqli_query($connect, "SELECT * FROM tbl_klasifikasi WHERE no_kk = '$nok' AND nik='$nik' AND id_klasifikasi='$value'");
$result = mysqli_num_rows($cek);
$data = mysqli_fetch_array($cek);
if ($result > 0) {
   echo "<script>alert('Proses Simpan Data Klasifikasi Gagal!, No. KK atau NIK Yang Anda Masukkan Sudah Digunakan, Silahkan Diinput Sesuai Data Anda');
    document.location.href='dashboard.php?p=input_klasifikasi_individu'</script>\n";
}else {
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

$order_c="SELECT * FROM tbl_training WHERE aktual_kelas='MISKIN' AND umur='".$data['umur']."'";
$query_order_c=mysqli_query($connect, $order_c);
$data_order_c=array();
while(($row_order_c=mysqli_fetch_array($query_order_c)) !=null){
$data_order_c[]=$row_order_c;
}
$count_c=count($data_order_c);

$pum = round(($count_c / $count),3);
if ($pum == 0) {
$pum +=1;
echo "$pum";
}else{
echo "$pum";
}

$order_d="SELECT * FROM tbl_training WHERE aktual_kelas='TIDAK MISKIN' AND umur='".$data['umur']."'";
$query_order_d=mysqli_query($connect, $order_d);
$data_order_d=array();
while(($row_order_d=mysqli_fetch_array($query_order_d)) !=null){
$data_order_d[]=$row_order_d;
}
$count_d=count($data_order_d);

$putm = round(($count_d / $count_a),3);
if ($putm == 0) {
$putm +=1;
echo "$putm";
}else{
echo "$putm";
}

$order_e="SELECT * FROM tbl_training WHERE aktual_kelas='MISKIN' AND jml_tanggungan='".$data['jml_tanggungan']."'";
$query_order_e=mysqli_query($connect, $order_e);
$data_order_e=array();
while(($row_order_e=mysqli_fetch_array($query_order_e)) !=null){
$data_order_e[]=$row_order_e;
}
$count_e=count($data_order_e);

$ptm = round(($count_e / $count),3);
if ($ptm == 0) {
$ptm +=1;
echo "$ptm";
}else{
echo "$ptm";
}

$order_f="SELECT * FROM tbl_training WHERE aktual_kelas='TIDAK MISKIN' AND jml_tanggungan='".$data['jml_tanggungan']."'";
$query_order_f=mysqli_query($connect, $order_f);
$data_order_f=array();
while(($row_order_f=mysqli_fetch_array($query_order_f)) !=null){
$data_order_f[]=$row_order_f;
}
$count_f=count($data_order_f);

$pttm = round(($count_f / $count_a),3);
if ($pttm == 0) {
$pttm +=1;
echo "$pttm";
}else{
echo "$pttm";
}

$order_g="SELECT * FROM tbl_training WHERE aktual_kelas='MISKIN' AND pekerjaan='".$data['pekerjaan']."'";
$query_order_g=mysqli_query($connect, $order_g);
$data_order_g=array();
while(($row_order_g=mysqli_fetch_array($query_order_g)) !=null){
$data_order_g[]=$row_order_g;
}
$count_g=count($data_order_g);

$ppm = round(($count_g / $count),3);
if ($ppm == 0) {
$ppm +=1;
echo "$ppm";
}else{
echo "$ppm";
}
                    
$order_h="SELECT * FROM tbl_training WHERE aktual_kelas='TIDAK MISKIN' AND pekerjaan='".$data['pekerjaan']."'";
$query_order_h=mysqli_query($connect, $order_h);
$data_order_h=array();
while(($row_order_h=mysqli_fetch_array($query_order_h)) !=null){
$data_order_h[]=$row_order_h;
}
$count_h=count($data_order_h);

$pptm = round(($count_h / $count_a),3);
if ($pptm == 0) {
$pptm +=1;
echo "$pptm";
}else{
echo "$pptm";
}

                    
$order_i="SELECT * FROM tbl_training WHERE aktual_kelas='MISKIN' AND pendapatan='".$data['pendapatan']."'";
$query_order_i=mysqli_query($connect, $order_i);
$data_order_i=array();
while(($row_order_i=mysqli_fetch_array($query_order_i)) !=null){
$data_order_i[]=$row_order_i;
}
$count_i=count($data_order_i);

$ppnm = round(($count_i / $count),3);
if ($ppnm == 0) {
$ppnm +=1;
echo "$ppnm";
}else{
echo "$ppnm";
}

$order_j="SELECT * FROM tbl_training WHERE aktual_kelas='TIDAK MISKIN' AND pendapatan='".$data['pendapatan']."'";
$query_order_j=mysqli_query($connect, $order_j);
$data_order_j=array();
while(($row_order_j=mysqli_fetch_array($query_order_j)) !=null){
$data_order_j[]=$row_order_j;
}
$count_j=count($data_order_j);

$ppntm = round(($count_j / $count_a),3);
if ($ppntm == 0) {
$ppntm +=1;
echo "$ppntm";
}else{
echo "$ppntm";
}

$order_k="SELECT * FROM tbl_training WHERE aktual_kelas='MISKIN' AND pendidikan='".$data['pendidikan']."'";
$query_order_k=mysqli_query($connect, $order_k);
$data_order_k=array();
while(($row_order_k=mysqli_fetch_array($query_order_k)) !=null){
$data_order_k[]=$row_order_k;
}
$count_k=count($data_order_k);

$ppdm = round(($count_k / $count),3);
if ($ppdm == 0) {
$ppdm +=1;
echo "$ppdm";
}else{
echo "$ppdm";
}

$order_l="SELECT * FROM tbl_training WHERE aktual_kelas='TIDAK MISKIN' AND pendidikan='".$data['pendidikan']."'";
$query_order_l=mysqli_query($connect, $order_l);
$data_order_l=array();
while(($row_order_l=mysqli_fetch_array($query_order_l)) !=null){
$data_order_l[]=$row_order_l;
}
$count_l=count($data_order_l);

$ppdtm = round(($count_l / $count_a),3);
if ($ppdtm == 0) {
$ppdtm +=1;
echo "$ppdtm";
}else{
echo "$ppdtm";
}

$order_m="SELECT * FROM tbl_training WHERE aktual_kelas='MISKIN' AND status_rmh='".$data['status_rmh']."'";
$query_order_m=mysqli_query($connect, $order_m);
$data_order_m=array();
while(($row_order_m=mysqli_fetch_array($query_order_m)) !=null){
$data_order_m[]=$row_order_m;
}
$count_m=count($data_order_m);

$psrm = round(($count_m / $count),3);
if ($psrm == 0) {
$psrm +=1;
echo "$psrm";
}else{
echo "$psrm";
}

$order_n="SELECT * FROM tbl_training WHERE aktual_kelas='TIDAK MISKIN' AND status_rmh='".$data['status_rmh']."'";
$query_order_n=mysqli_query($connect, $order_n);
$data_order_n=array();
while(($row_order_n=mysqli_fetch_array($query_order_n)) !=null){
$data_order_n[]=$row_order_n;
}
$count_n=count($data_order_n);

$psrtm = round(($count_n / $count_a),3);
if ($psrtm == 0) {
$psrtm +=1;
echo "$psrtm";
}else{
echo "$psrtm";
}

$order_o="SELECT * FROM tbl_training WHERE aktual_kelas='MISKIN' AND bahan_bakar='".$data['bahan_bakar']."'";
$query_order_o=mysqli_query($connect, $order_o);
$data_order_o=array();
while(($row_order_o=mysqli_fetch_array($query_order_o)) !=null){
$data_order_o[]=$row_order_o;
}
$count_o=count($data_order_o);

$pbbm = round(($count_o / $count),3);
if ($pbbm == 0) {
$pbbm +=1;
echo "$pbbm";
}else{
echo "$pbbm";
}

$order_p="SELECT * FROM tbl_training WHERE aktual_kelas='TIDAK MISKIN' AND bahan_bakar='".$data['bahan_bakar']."'";
$query_order_p=mysqli_query($connect, $order_p);
$data_order_p=array();
while(($row_order_p=mysqli_fetch_array($query_order_p)) !=null){
$data_order_p[]=$row_order_p;
}
$count_p=count($data_order_p);

$pbbtm = round(($count_p / $count_a),3);
if ($pbbtm == 0) {
$pbbtm +=1;
echo "$pbbtm";
}else{
echo "$pbbtm";
}

$order_q="SELECT * FROM tbl_training WHERE aktual_kelas='MISKIN' AND sumber_air='".$data['sumber_air']."'";
$query_order_q=mysqli_query($connect, $order_q);
$data_order_q=array();
while(($row_order_q=mysqli_fetch_array($query_order_q)) !=null){
$data_order_q[]=$row_order_q;
}
$count_q=count($data_order_q);

$psam = round(($count_q / $count),3);
if ($psam == 0) {
$psam +=1;
echo "$psam";
}else{
echo "$psam";
}

$order_r="SELECT * FROM tbl_training WHERE aktual_kelas='TIDAK MISKIN' AND sumber_air='".$data['sumber_air']."'";
$query_order_r=mysqli_query($connect, $order_r);
$data_order_r=array();
while(($row_order_r=mysqli_fetch_array($query_order_r)) !=null){
$data_order_r[]=$row_order_r;
}
$count_r=count($data_order_r);

$psatm =round(($count_r / $count_a),3);
if ($psatm == 0) {
$psatm +=1;
echo "$psatm";
}else{
echo "$psatm";
}

$order_s="SELECT * FROM tbl_training WHERE aktual_kelas='MISKIN' AND daya_listrik='".$data['daya_listrik']."'";
$query_order_s=mysqli_query($connect, $order_s);
$data_order_s=array();
while(($row_order_s=mysqli_fetch_array($query_order_s)) !=null){
$data_order_s[]=$row_order_s;
}
$count_s=count($data_order_s);

$pdlm = round(($count_s / $count),3);
if ($pdlm == 0) {
$pdlm +=1;
echo "$pdlm";
}else{
echo "$pdlm";
}

$order_t="SELECT * FROM tbl_training WHERE aktual_kelas='TIDAK MISKIN' AND daya_listrik='".$data['daya_listrik']."'";
$query_order_t=mysqli_query($connect, $order_t);
$data_order_t=array();
while(($row_order_t=mysqli_fetch_array($query_order_t)) !=null){
$data_order_t[]=$row_order_t;
}
$count_t=count($data_order_t);

$pdltm =round(($count_t / $count_a),3);
if ($pdltm == 0) {
$pdltm += 1;
echo "$pdltm";
}else{
echo "$pdltm";
}
                    
$miskin = round(($pum * $ptm * $ppm * $ppnm * $ppdm * $psrm * $pbbm * $psam * $pdlm * $kelasmiskin),4);
$tidakmiskin = round(($putm * $pttm * $pptm * $ppntm * $ppdtm * $psrtm * $pbbtm * $psatm * $pdltm * $kelastdkmiskin),4);

if ($miskin > $tidakmiskin) {
$statuss='Miskin';
}else {
$statuss='Tidak Miskin';
}

	$query="INSERT INTO `tbl_klasifikasi` (`id_klasifikasi`, `no_kk`, `nik`, `nama`, `umur`, `alamat`, `jml_tanggungan`, `pekerjaan`, `pendidikan`, `pendapatan`, `status_rmh`, `bahan_bakar`, `sumber_air`, `daya_listrik`, `miskin`, `tidak_miskin`, `status_kl`) VALUES ('$value', '$nok', '$nik', '$nama', '$umur','$alt', '$jml', '$pekerjaan', '$pendidikan', '$pendapatan', '$status', '$bb', '$sa', '$dl', '$miskin', '$tidakmiskin', '$statuss')";
		$sql=mysqli_query($connect, $query);
		if ($sql) {
			echo "<script>alert('Data Klasifikasi Berhasil Di Simpan');
      document.location.href='dashboard.php?p=data_klasifikasi_individu'</script>\n";
		}else{
			echo "<script>alert('Data Klasifikasi Gagal Di Simpan');
      document.location.href='dashboard.php?p=input_klasifikasi_individu'</script>\n";
		}
	}

?>