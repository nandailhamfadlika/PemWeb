<?php
    require_once '../layoutsAdminLTE/sidebar.php';
    require_once '../koneksi.php';

    $query = "SELECT * FROM paramedik";
    $result = $conn->query($query);
    $paramedik = $result->fetch_assoc();
    $query2 = "SELECT * FROM unit_kerja where unit_kerja_id = ".$paramedik['unit_kerja_id'];
    $unitKerja = $conn->query($query2)->fetch_assoc();
?>

<h2>Data Paramedik </h2>
<a href=""></a>
<table class="table table-bordered">
    <thead><tr>
        <th width="15">No</th>
        <th>Kode</th>
        <th>Nama</th>
        <th>Gender</th>
        <th>kategori</th>
        <th>Telpon</th>
        <th>Alamat</th>
        <th>Unit Kerja</th>
    </tr></thead>

    <tbody>
        <?php
        $nomor = '1';
        foreach($result as $row){
            echo"<tr>
            <td>".$nomor++ ."</td>
            <td>".$row['kode']."</td>
            <td>".$row['nama']."</td>
            <td>".$row['gender']."</td>
            <td>".$row['kategori']."</td>
            <td>".$row['telpon']."</td>
            <td>".$row['alamat']."</td>
            <td>".$unitKerja['nama']."</td>
            <td>
                <a href='form_paramedik.php?paramedik_id=".$row['paramedik_id']."'>Edit</a>
                <a href='periksa_delete.php?paramedik_id=".$row['paramedik_id']."'>Delete</a>
            <td/>
            </tr>";
        }
        ?>
        <td>
        </td>
    </tbody>
</table>
<a href="form_paramedik.php" class="btn btn-success">Tambah Paramedik</a>
<?php

require_once '../layoutsAdminLTE/sidebar.php';

?>
