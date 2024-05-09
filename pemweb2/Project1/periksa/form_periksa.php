<?php

    require_once '../layoutsAdminLTE/sidebar.php';
    require_once '../koneksi.php';
    if (isset($_GET['periksa_id'])) {
        $_submit = 'update';
        $sql = "SELECT * FROM periksa WHERE periksa_id=".$_GET['periksa_id'];
        $result = $conn->query($sql)->fetch_assoc();
        $sqlPasien = "SELECT * FROM  pasien";
        $sqlParamedik = "SELECT * FROM  paramedik";
        $pasien = $conn->query($sqlPasien)->fetch_all();
        $paramedik = $conn->query($sqlParamedik)->fetch_all();
    }else{
        $_submit = 'add';
        $sqlPasien = "SELECT * FROM  pasien";
        $sqlParamedik = "SELECT * FROM  paramedik";
        $pasien = $conn->query($sqlPasien)->fetch_all();
        $paramedik = $conn->query($sqlParamedik)->fetch_all();
    }
?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<h2>Form Input periksa</h2>
<form method="post" action="proses_periksa.php">
    <input type="hidden" name="submit" value="<?= $_submit ?>">
    <input type="hidden" name="periksa_id" value="<?= isset($result['periksa_id']) ? $result['periksa_id'] : '' ?>">
    <div class="form-group row">
        <label for="pasien_id" class="col-4 col-form-label">Pasien </label>
        <div class="col-8">
            <select id="pasien_id" name="pasien_id" class="custom-select"
                value="<?= isset($result['pasien_id']) ? $result['pasien_id'] : '' ?>" required>
                <?php for ($i=0; $i < count($pasien); $i++) { 
                    echo "<option value=".$pasien[$i][0].">".$pasien[$i][2]."</option>";
                }?>
            </select>
        </div>
    </div>
        <div class="form-group row">
            <label for="paramedik_id" class="col-4 col-form-label">Dokter</label>
            <div class="col-8">
                <select id="paramedik_id" name="paramedik_id" class="custom-select"
                    value="<?= isset($result['paramedik_id']) ? $result['paramedik_id'] : '' ?>" required>
                    <?php for ($i=0; $i < count($paramedik); $i++) { 
            echo "<option value=".$paramedik[$i][0].">".$paramedik[$i][2]."</option>";
        } ?>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="tanggal" class="col-4 col-form-label" value="">Tanggal Periksa</label>
            <div class="col-8">
                <input id="tanggal" name="tanggal" type="date" class="form-control"
                    value="<?= isset($result['tanggal']) ? $result['tanggal'] : '' ?>" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="berat" class="col-4 col-form-label">Berat Badan (Kg)</label>
            <div class="col-8">
                <input id="berat" name="berat" type="number" class="form-control"
                    value="<?= isset($result['berat']) ? $result['berat'] : '' ?>" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="tinggi" class="col-4 col-form-label">Tinggi (cm)</label>
            <div class="col-8">
                <input id="tinggi" name="tinggi" type="text" class="form-control"
                    value="<?= isset($result['tinggi']) ? $result['tinggi'] : '' ?>" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="tensi" class="col-4 col-form-label">Tensi</label>
            <div class="col-8">
                <input id="tensi" name="tensi" type="text" class="form-control"
                    value="<?= isset($result['tensi']) ? $result['tensi'] : '' ?>" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="keterangan" class="col-4 col-form-label">Keterangan</label>
            <div class="col-8">
                <textarea id="keterangan" name="keterangan" cols="40" rows="5" class="form-control"
                    required><?= isset($result['keterangan']) ? $result['keterangan'] : '' ?></textarea>
            </div>
        </div>
        <div class="form-group row">
            <div class="offset-4 col-8">
                <button name="proses" type="submit" class="btn btn-primary">Submit</button>
                <button name="cancel" type="reset" class="btn btn-secondary">Batal</button>
            </div>
        </div>
</form>


<?php

require_once '../layoutsAdminLTE/sidebar.php';

?>