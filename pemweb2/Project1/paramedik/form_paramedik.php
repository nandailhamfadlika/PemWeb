<?php
    require_once '../layoutsAdminLTE/sidebar.php';
    require_once '../koneksi.php';
    if (isset($_GET['paramedik_id'])) {
        $_submit = 'update';
        $sql = "SELECT * FROM paramedik WHERE paramedik_id=".$_GET['paramedik_id'];
        $result = $conn->query($sql)->fetch_assoc();
        $sql2 = "SELECT * FROM unit_kerja WHERE unit_kerja_id = ".$result['unit_kerja_id'];
        $unitKerja = $conn->query($sql2)->fetch_assoc();
    }else{
        $_submit = 'add';
    }

?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<h2>Form Input Paramedik</h2>
<form method="post" action="proses_paramedik.php">
    <input type="hidden" name="submit" value="<?= $_submit ?>">
    <input type="hidden" name="paramedik_id"  value="<?= isset($result['paramedik_id']) ? $result['paramedik_id'] : ''  ?>">
  <div class="form-group row">
    <label for="kode" class="col-4 col-form-label">Kode</label> 
    <div class="col-8">
      <input id="kode" name="kode" type="text" class="form-control"  value="<?= isset($result['kode']) ? $result['kode'] : '' ?>" required>
    </div>
  </div>
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama</label> 
    <div class="col-8">
      <input id="nama" name="nama" type="text" class="form-control" value="<?= isset($result['nama']) ? $result['nama'] : '' ?>" required>
    </div>
  </div>
  <div class="form-group row">
    <label for="tmp_lahir" class="col-4 col-form-label" value="">Tempat lahir</label> 
    <div class="col-8">
      <input id="tmp_lahir" name="tmp_lahir" type="text" class="form-control" value="<?= isset($result['tmp_lahir']) ? $result['tmp_lahir'] : '' ?>" required>
    </div>
  </div>
  <div class="form-group row">
    <label for="tgl_lahir" class="col-4 col-form-label">Tanggal Lahir</label> 
    <div class="col-8">
      <input id="tgl_lahir" name="tgl_lahir" type="date" class="form-control" value="<?= isset($result['tgl_lahir']) ? $result['tgl_lahir'] : '' ?>" required>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Jenis Kelamin</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="gender" id="gender_0" type="radio" class="custom-control-input" value="L" <?= isset($result['gender']) && $result['gender'] == 'L' ? 'checked' : '' ?> required> 
        <label for="gender_0" class="custom-control-label">Laki - Laki</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="gender" id="gender_1" type="radio" class="custom-control-input" value="P" <?= isset($result['gender']) && $result['gender'] == 'P' ? 'checked' : '' ?> required> 
        <label for="gender_1" class="custom-control-label">Perempuan</label>
      </div>
    </div>
  </div>
  </div>
  <div class="form-group row">
    <label for="telpon" class="col-4 col-form-label">telpon</label> 
    <div class="col-8">
      <input id="telpon" name="telpon" type="text" class="form-control" value="<?= isset($result['telpon']) ? $result['telpon'] : '' ?>"  required>
    </div>
  </div>
  <div class="form-group row">
    <label for="alamat" class="col-4 col-form-label">Alamat</label> 
    <div class="col-8">
      <textarea id="alamat" name="alamat" cols="40" rows="5" class="form-control" required><?= isset($result['alamat']) ? $result['alamat'] : '' ?> </textarea>
    </div>
  </div> 
  <div class="form-group row">
    <label class="col-4">Katergori</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="kategori" id="kategori_0" type="radio" class="custom-control-input" value="1" <?= isset($result['kategori']) && $result['kategori'] == '1' ? 'checked' : '' ?> required> 
        <label for="kategori_0" class="custom-control-label">1</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="kategori" id="kategori_1" type="radio" class="custom-control-input" value="2" <?= isset($result['kategori']) && $result['kategori'] == '2' ? 'checked' : '' ?> required> 
        <label for="kategori_1" class="custom-control-label">2</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="kategori" id="kategori_2" type="radio" class="custom-control-input" value="3" <?= isset($result['kategori']) && $result['kategori'] == '3' ? 'checked' : '' ?> required> 
        <label for="kategori_2" class="custom-control-label">3</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="unit_kerja_id" class="col-4 col-form-label">unit kerja</label> 
    <div class="col-8">
      <select id="unit_kerja_id" name="unit_kerja_id" class="custom-select">
        <option value="1" <?= isset($unitKerja['nama']) ? 'selected' : '' ?>>Unit Medis</option>
        <option value="2" <?= isset($unitKerja['nama']) ? 'selected' : '' ?>>Rawat Inap</option>
        <option value="3" <?= isset($unitKerja['nama']) ? 'selected' : '' ?>>Keperawatan</option>
        <option value="4" <?= isset($unitKerja['nama']) ? 'selected' : '' ?>>Administrasi</option>
      </select>
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

  require_once '../layoutsAdminLTE/footer.php';

?>