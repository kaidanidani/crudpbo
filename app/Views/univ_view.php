<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>UAS PBO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <style>
    .container{
      max-width: 800px;
      margin-top: 20px;

    }
    .navbarbrand{
      padding-left: 20%;
    }
    </style>
  </head>
  <body>
    <!-- NAVBAR -->

<!-- As a heading -->
<nav class="navbar navbar-light bg-success text-white">
  <div class="container-fluid">
    <span class="navbarbrand mb-0 h1">UNIVERSITAS NAHDLATUL ULAMA YOGYAKARTA</span>
  </div>
</nav>
<!-- As a link -->
<nav class="navbar navbar-light bg-primary text-black-50">
  <div class="container-fluid">
    <a class="navbar-brand">UAS OOP |M.Kausari Kaidani|Ahmad Islah'huddin |Pandu Jaman Tara |Roja Sabana</a>
    <br>
    <a class="navbar-brand">211111110|211111117|211111112</a>
  </div>
</nav>
    <!-- CONTAINER -->
   <div class="container">
   <div class="card">
  <div class="card-header bg-secondary text-white">
    Dosen Universitas Nahdlatul Ulama Yogyakarta 2023
  </div>

  <div class="card-body">
    <!-- PENCARIAN -->
    <form action="" method="get">
  <div class="input-group mb-3"> 
  <input type="text" class="form-control" name="katakunci" placeholder="Masukkan Kata Kunci" aria-label="Masukkan Kata Kunci" aria-describedby="button-addon2">
  <button class="btn btn-outline-secondary" type="button" id="button-addon2">Cari</button>
  </form>
</div>

<!-- Button trigger Modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  + Tambah Data Dosen
</button>

<!-- MODAL -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Tambah Data Dosen</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- KALAU ERROR -->
      <div class="alert alert-danger error" role="alert" style="display: none;">
</div>
<!-- KALAU SUKSES -->
<div class="alert alert-primary sukses" role="alert">
</div>
        <!-- FORM INPUT DATA -->
        <div class="mb-3 row">
    <label for="inputNama" class="col-sm-2 col-form-label">Nama</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputNama">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="inputNip" class="col-sm-2 col-form-label">NIP</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputNip">
    </div>
  </div>
    <div class="mb-3 row">
    <label for="inputNama" class="col-sm-2 col-form-label">Dosen di</label>
    <div class="col-sm-10">
      <select name="dosen" id="inputDosen" class="btn btn-warning form-select">
      <option value="disabled">Pilih Fakultas </option>
      <option value="FTI">Fakultas Teknologi Informasi</option>
      <option value="FEK">Fakultas Ekonomi</option>
      <option value="FDI">Fakultas Dirasah Islamiyah</option>
      <option value="FIH">Fakultas Industri Halal</option>
      <option value="FIP">Fakultas Ilmu Pendidikan</option>
      </select>
    </div>
    <div class="mb-3 row">
    <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail">
    </div>
  </div>
    <div class="mb-3 row">
    <label for="inputNoHp" class="col-sm-2 col-form-label">No Hp</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputNoHp">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="inputAlamat" class="col-sm-2 col-form-label">Alamat</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputAlamat">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="inputPos" class="col-sm-2 col-form-label">Kode Pos</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputPos">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="inputNama" class="col-sm-2 col-form-label">Gender</label>
    <div class="col-sm-10">
      <select name="dosen" id="inputDosen" class="btn btn-warning form-select">
      <option value="disabled">Pilih Gender</option>
      <option value="Pria">Pria</option>
      <option value="Wanita">Wanita</option>
      </select>
    </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutp</button>
        <button type="button" class="btn btn-primary" id="tombolSimpan">Simpan</button>
      </div>
    </div>
  </div>
</div>
</div>
  </div>
</table>
  </div>
  <table class="table">
  <thead>
    <tr>
      <th>No</th>
      <th>Nama</th>
      <th>NIP</th>
      <th>Email</th>
      <th>No Hp</th>
      <th>Alamat</th>
      <th>Kode Pos</th>
      <th>Gender</th>
      <th>Aksi</th>
    </tr>
  </thead>
  <tbody>
    <tr>
     <td>1</td>
     <td>Nama</td>
     <td>Dosen di</td>
     <td>Email</td>
     <td>No Hp</td>
     <td>Alamat</td>
      <td>Kode Pos</td>
      <td>Gender</td>
      <td>
      <button type="button" class="btn btn-warning btn-sm">Edit</button>
      <button type="button" class="btn btn-danger btn-sm">Delete</button>

      </td>      
    </tr>
  </tbody>
  
</table>
   </div>

   <!-- JAVA SCRIPT -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script>
      $('#tombolSimpan'). on('click', function(){
        var $nama =$('#inputNama').val();
        var $nip =$('#inputNip').val();
        var $dosen_di =$('#inputDosen').val();
        var $email =$('#inputEmail').val();
        var $nohp =$('#inputNoHp').val();
        var $alamat =$('#inputAlamat').val();
        var $kode_pos =$('#inputPos').val();
        
        $.ajax({
          url: "<?php echo site_url("Home/simpan")?>",
          type: "POST",
          data: {
                  nama: $nama,
                  nip : $nip,
                  dosen_di: $dosen_di,
                  email: $email,
                  nohp: $nohp,
                  alamat: $alamat,
                  kode_pos: $kode_pos,
                  gender: $gender,
                  
          },
          success: function(hasil) {
            var $obj =$.parseJSON(hasil);
            if($obj.sukses == false){
             $('.error').show();
             $('.error').html($obj.error);
            }else{
              $('.sukses').show();
             $('.sukses').html($obj.sukses);
            }
          }
        });

      });
      </script>
  </body>
</html>