<?php

require_once '../koneksi.php';

$_pasien_id = $_POST['pasien_id'];
$_kode = $_POST['kode'];
$_nama = $_POST['nama'];
$_tmp_lahir = $_POST['tmp_lahir'];
$_tgl_lahir = $_POST['tgl_lahir'];
$_gender = $_POST['gender'];
$_email = $_POST['email'];
$_alamat = $_POST['alamat'];
$_kelurahan = $_POST['kelurahan_id'];

$data = [$_kode,$_nama,$_tmp_lahir,$_tgl_lahir,$_gender,$_email,$_alamat,$_kelurahan];

if (count($data) > 0 && $_POST['submit'] == 'add') {
    $sql ="INSERT INTO pasien(kode,nama,tmp_lahir,tgl_lahir,gender,email,alamat,kelurahan_id)
            VALUES ('$_kode', '$_nama', '$_tmp_lahir', '$_tgl_lahir', '$_gender', '$_email', '$_alamat', $_kelurahan)";
    
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}elseif($_POST['submit'] == 'update') {
    $sql ="UPDATE pasien SET kode = '$_kode',nama = '$_nama',tmp_lahir = '$_tmp_lahir',tgl_lahir = '$_tgl_lahir',gender = '$_gender',email = '$_email',alamat = '$_alamat',kelurahan_id = '$_kelurahan' WHERE pasien_id = '$_pasien_id'";

    if ($conn->query($sql) === TRUE) {
    echo "New record updated successfully";
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}

header('Location: data_pasien.php');
?>