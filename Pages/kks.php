<?php
//-- query untuk mendapatkan semua data atribut di tabel nbc_atribut
$sql = 'SELECT * FROM tbl_parameter ORDER BY id_variabel,id_parameter';
$sql1 = mysqli_query($connect, $sql);
//-- menyiapkan variable penampung berupa array
$parameter=array();
$id_atribut=0;
//-- melakukan iterasi pengisian array untuk tiap record data yang didapat
foreach ($sql1 as $row) {
    if($id_atribut!=$row['id_variabel']){
        $parameter[$row['id_variabel']]=array();
        $id_atribut=$row['id_variabel'];
    }
    $parameter[$row['id_variabel']][$row['nilai']]=$row['parameter'];
}
?>