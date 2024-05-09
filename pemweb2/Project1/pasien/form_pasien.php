<?php

    require_once '../layoutsAdminLTE/sidebar.php';
    require_once '../koneksi.php';
    if (isset($_GET['pasien_id'])) {
        $_submit = 'update';
        $sql = "SELECT * FROM pasien WHERE pasien_id=".$_GET['pasien_id'];
        $result = $conn->query($sql)->fetch_assoc();
    }else{
        $_submit = 'add';
    }

?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<h2>Form Input Pasien</h2>
<form method="post" action="proses_pasien.php">
    <input type="hidden" name="submit" value="<?= $_submit ?>">
    <input type="hidden" name="pasien_id" value="<?= isset($result['pasien_id']) ? $result['pasien_id'] : '' ?>">
  <div class="form-group row">
    <label for="kode" class="col-4 col-form-label">Kode</label> 
    <div class="col-8">
      <input id="kode" name="kode" type="text" class="form-control" value="<?= isset($result['kode']) ? $result['kode'] : '' ?>" required>
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
  <div class="form-group row">
    <label for="kelurahan_id" class="col-4 col-form-label">Kelurahan</label> 
    <div class="col-8">
      <select id="kelurahan_id" name="kelurahan_id" class="custom-select" value="<?= isset($result['kelurahan_id']) ? $result['kelurahan_id'] : '' ?>"  required>
        <option value="1">Ciomas Rahayu</option>
        <option value="2">Kota Batu</option>
        <option value="3">Laladon</option>
        <option value="4">Pagelaran</option>
        <option value="5">Parakan</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="email" class="col-4 col-form-label">Email</label> 
    <div class="col-8">
      <input id="email" name="email" type="text" class="form-control" value="<?= isset($result['email']) ? $result['email'] : '' ?>" required>
    </div>
  </div>
  <div class="form-group row">
    <label for="alamat" class="col-4 col-form-label">Alamat</label> 
    <div class="col-8">
      <textarea id="alamat" name="alamat" cols="40" rows="5" class="form-control" required><?= isset($result['alamat']) ? $result['alamat'] : '' ?></textarea>
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