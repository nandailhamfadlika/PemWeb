<?php
    require_once '../layoutsAdminLTE/sidebar.php';
    require_once '../koneksi.php';

    $query = "SELECT  a.periksa_id,a.tanggal,a.berat,a.tinggi,a.tensi,a.keterangan,b.nama AS nama_pasien, c.nama AS nama_paramedik FROM periksa a INNER JOIN pasien b ON a.pasien_id = b.pasien_id INNER JOIN paramedik c ON a.paramedik_id = c.paramedik_id";
    $result = $conn->query($query);

?>

<h2>Data Periksa</h2>
<a href=""></a>
<table class="table table-bordered">
    <thead><tr>
        <th width="15">No</th>
        <th>Nama Pasien</th>
        <th>Dokter</th>
        <th>Tanggal</th>
        <th>Berat</th>
        <th>Tinggi</th>
        <th>Tensi</th>
        <th>Keterangan</th>
    </tr></thead>

    <tbody>
        <?php
        $nomor = '1';
        foreach($result as $row){
            echo"<tr>
            <td>".$nomor."</td>
            <td>".$row['nama_pasien']."</td>
            <td>".$row['nama_paramedik']."</td>
            <td>".$row['tanggal']."</td>
            <td>".$row['berat']."</td>
            <td>".$row['tinggi']."</td>
            <td>".$row['tensi']."</td>
            <td>".$row['keterangan']."</td>
            <td>
                <a href='form_periksa.php?periksa_id=".$row['periksa_id']."'>Edit</a>
                <a href='periksa_delete.php?periksa_id=".$row['periksa_id']."'>Delete</a>
            <td/>
            </tr>";
        }
        ?>
        <td>
        </td>
    </tbody>
</table>
<a href="form_periksa.php" class="btn btn-success">Tambah Periksa</a>

<?php

require_once '../layoutsAdminLTE/footer.php';

?>