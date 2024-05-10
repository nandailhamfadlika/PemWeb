<?php

require_once '../koneksi.php';

$_paramedik_id = $_POST['paramedik_id'];
$_kode = $_POST['kode'];
$_nama = $_POST['nama'];
$_tmp_lahir = $_POST['tmp_lahir'];
$_tgl_lahir = $_POST['tgl_lahir'];
$_gender = $_POST['gender'];
$_telpon = $_POST['telpon'];
$_alamat = $_POST['alamat'];
$_kategori = $_POST['kategori'];
$_unit_kerja = $_POST['unit_kerja_id'];

$data = [$_kode,$_nama,$_tmp_lahir,$_tgl_lahir,$_gender,$_telpon,$_alamat,$_kategori,$_unit_kerja];

if (count($data) > 0 && $_POST['submit'] == 'add') {
    $sql ="INSERT INTO paramedik(kode,nama,tmp_lahir,tgl_lahir,gender,telpon,kategori,alamat,unit_kerja_id)
            VALUES ('$_kode', '$_nama', '$_tmp_lahir', '$_tgl_lahir', '$_gender', '$_telpon', '$_kategori' ,'$_alamat', $_unit_kerja)";
    
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}elseif($_POST['submit'] == 'update') {
    $sql ="UPDATE paramedik SET kode = '$_kode',nama = '$_nama',tmp_lahir = '$_tmp_lahir',tgl_lahir = '$_tgl_lahir',gender = '$_gender',telpon = '$_telpon',kategori = '$_kategori',alamat = '$_alamat',unit_kerja_id = '$_unit_kerja' WHERE paramedik_id = '$_paramedik_id'";

    if ($conn->query($sql) === TRUE) {
    echo "New record updated successfully";
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}

header('Location: data_paramedik.php');
?>