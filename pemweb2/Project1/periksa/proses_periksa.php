<?php

require_once '../koneksi.php';

$_periksa_id = $_POST['periksa_id'];
$_tanggal = $_POST['tanggal'];
$_berat = $_POST['berat'];
$_tinggi = $_POST['tinggi'];
$_tensi = $_POST['tensi'];
$_keterangan = $_POST['keterangan'];
$_pasien_id = $_POST['pasien_id'];
$_paramedik_id = $_POST['paramedik_id'];

var_dump($_paramedik_id);



$data = [$_pasien_id,$_paramedik_id,$_tanggal,$_berat,$_tensi,$_keterangan];

if (count($data) > 0 && $_POST['submit'] == 'add') {
    $sql ="INSERT INTO periksa(tanggal,berat,tinggi,tensi,keterangan,pasien_id,paramedik_id)
            VALUES ('$_tanggal' , '$_berat', '$_tinggi', '$_tensi', '$_keterangan','$_pasien_id', '$_paramedik_id')";
    
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}elseif($_POST['submit'] == 'update') {
    $sql ="UPDATE periksa SET pasien_id = '$_pasien_id',paramedik_id = '$_paramedik_id',tanggal = '$_tanggal',berat = '$_berat',tinggi = '$_tinggi',tensi = '$_tensi', keterangan = '$_keterangan' WHERE periksa_id = '$_periksa_id'";

    if ($conn->query($sql) === TRUE) {
    echo "New record updated successfully";
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}

header('Location: data_periksa.php');
?>
