<?php
    require_once '../layoutsAdminLTE/sidebar.php';
    require_once '../koneksi.php';

    $query = "SELECT * FROM pasien";
    $result = $conn->query($query);
?>

<h2>Data Pasien </h2>
<a href=""></a>
<table class="table table-bordered">
    <thead><tr>
        <th width="15">No</th>
        <th>Kode</th>
        <th>Nama Pasien</th>
        <th>Alamat</th>
        <th>Email</th>
    </tr></thead>

    <tbody>
        <?php
        $nomor = '1';
        foreach($result as $row){
            echo"<tr>
            <td>".$nomor++ ."</td>
            <td>".$row['nama']."</td>
            <td>".$row['kode']."</td>
            <td>".$row['alamat']."</td>
            <td>".$row['email']."</td>
            <td>
                <a href='form_pasien.php?pasien_id=".$row['pasien_id']."'>Edit</a>
                <a href='pasien_delete.php?pasien_id=".$row['pasien_id']."'>Delete</a>
            <td/>
            </tr>";
        }
        ?>
        <td>
        </td>
    </tbody>
</table>
<a href="form_pasien.php" class="btn btn-success">Tambah pasien</a>

<?php

require_once '../layoutsAdminLTE/footer.php';

?>