
<?php
$proses = $_GET['proses'];
$nama_siswa = $_GET['nama'];
$mata_kuliah = $_GET['matkul'];
$nilai_uts = $_GET['nilai_uts'];
$nilai_uas = $_GET['nilai_uas'];
$nilai_tugas = $_GET['nilai_tugas'];

// Total
$total_nilai = ($nilai_uts + $nilai_uas + $nilai_tugas) / 3;

$grades;
$predikat;
$status;

// Buat Perhitungan IF mencari Grade
if($total_nilai >=85){
    $grades = "A";
}

elseif($total_nilai >= 70){
    $grades = "B";
}

elseif($total_nilai >= 56){
    $grades = "C";
}

elseif($total_nilai >= 36){
    $grades = "D";
}

else{
    $grades = "E";
}

// Buat Perhitungan IF mencari Predikat

switch($grades){
    case "A":
        $predikat = "Sangat Memuaskan";
        break;
    case "B":
        $predikat = "Memuaskan";
        break;
    case "C":
        $predikat = "Cukup";
        break;
    case "D":
        $predikat = "Kurang";
        break;
    case "E":
        $predikat = "Sangat Kurang";
        break;
}

// Status

if($total_nilai >=75){
    $status = "LULUS";
}
else{
    $status = "TIDAK LULUS";
}

// Output
echo 'Proses :' .$proses;
echo '<br/>Nama : ' .$nama_siswa;
echo '<br/>Mata Kuliah : ' .$mata_kuliah;
echo '<br/>Nilai UTS : ' .$nilai_uts;
echo '<br/>Nilai UAS : ' .$nilai_uas;
echo '<br/>Nilai Tugas :' .$nilai_tugas;
echo '<br/>Grade : ' .$grades;
echo '<br/>Predikat : ' .$predikat;
echo '<br/>Status : ' .$status;

?>
