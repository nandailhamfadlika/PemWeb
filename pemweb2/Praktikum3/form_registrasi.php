<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Registrasi</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    
    <fieldset>
        <legend>Form Registrasi IT Club Data Science</legend>

<form method="POST" action="proses_registrasi.php">
  <div class="form-group row">
    <label for="nim" class="col-4 col-form-label">NIM</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card"></i>
          </div>
        </div> 
        <input id="nim" name="nim" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="fullname" class="col-4 col-form-label">Nama Lengkap</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card-o"></i>
          </div>
        </div> 
        <input id="fullname" name="fullname" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Jenis Kelamin</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="jeniskelamin" id="jeniskelamin_0" type="radio" class="custom-control-input" value="laki"> 
        <label for="jeniskelamin_0" class="custom-control-label">Laki-Laki</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="jeniskelamin" id="jeniskelamin_1" type="radio" class="custom-control-input" value="perempuan"> 
        <label for="jeniskelamin_1" class="custom-control-label">Perempuan</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Skill Web &amp; Programming</label> 
    <div class="col-8">
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="skill" id="skill_0" type="checkbox" class="custom-control-input" value="html"> 
        <label for="skill_0" class="custom-control-label">HTML</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="skill" id="skill_1" type="checkbox" class="custom-control-input" value="css"> 
        <label for="skill_1" class="custom-control-label">CSS</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="skill" id="skill_2" type="checkbox" class="custom-control-input" value="js"> 
        <label for="skill_2" class="custom-control-label">JavaScript</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="skill" id="skill_3" type="checkbox" class="custom-control-input" value="bootstrap"> 
        <label for="skill_3" class="custom-control-label">RWD Bootstrap</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="skill" id="skill_4" type="checkbox" class="custom-control-input" value="php"> 
        <label for="skill_4" class="custom-control-label">PHP</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="skill" id="skill_5" type="checkbox" class="custom-control-input" value="python"> 
        <label for="skill_5" class="custom-control-label">Python</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="skill" id="skill_6" type="checkbox" class="custom-control-input" value="java"> 
        <label for="skill_6" class="custom-control-label">Java</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="domisili" class="col-4 col-form-label">Domisili</label> 
    <div class="col-8">
      <select id="domisili" name="domisili" class="custom-select">
        <option value="jakarta">Jakarta</option>
        <option value="bogor">Bogor</option>
        <option value="depok">Depok</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="email" class="col-4 col-form-label">Email</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-envelope"></i>
          </div>
        </div> 
        <input id="email" name="email" type="text" class="form-control">
      </div>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
    </fieldset>

</body>
</html>