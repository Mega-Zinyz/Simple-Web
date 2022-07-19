<?php
  include '../config.php';
  if(isset($_POST["submit"])){
        $NIP = $_POST["NIP_karyawan"];
        $nm = $_POST["nama_karyawan"];
        $tempat = $_POST["tempat"];
        $tanggal = $_POST["tanggal"];
        $jenis_kelamin = $_POST["jenis_kelamin"];
        $alamat = $_POST["alamat"];
        $telepon = $_POST["telepon"];
        $email = $_POST["email"];
        $foto = $_FILES["foto"]["name"];
      
      move_uploaded_file($_FILES["foto"]["tmp_name"],"../../foto_karyawan/".$_FILES["foto"]["name"]);
      $result = $connection->query("insert into tb_karyawan(NIP_karyawan, nama_karyawan, tempat, tanggal_lahir, jenis_kelamin, alamat, telepon, email, foto)values('$NIP','$nm', '$tempat', '$tanggal', '$jenis_kelamin', '$alamat', '$telepon', '$email', '$foto')");
      if ($result){
          ?>
              <script language="JavaScript">alert("Data Has Been Saved");
                  window.location="dashboard.php?dashboard=data_karyawan";    
          </script>
          <?php   
      } 
  } 
?>

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Form Tambah Karyawan</h1>
</div>
<section>
  <div class="container">
      <div class="row">
          <div class="col">
              <form action="" method="POST" enctype="multipart/form-data">
                  <div class="mb-3 row">
                      <label for="" class="col-sm-2 col-form-label">NIM Karyawan</label>
                      <div class="col-sm-10">
                      <input type="text" class="form-control" name="NIP_karyawan" required>
                      </div>
                  </div>
                  <div class="mb-3 row">
                      <label for="" class="col-sm-2 col-form-label">Nama Karyawan</label>
                      <div class="col-sm-10">
                      <input type="text" class="form-control" name="nama_karyawan" required>
                      </div>
                  </div>
                  <div class="mb-3 row">
                      <label for="" class="col-sm-2 col-form-label">Tempat/Tanggal Lahir</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" name="tempat" required>
                      </div>
                      <div class="col-sm-5">
                      <input type="date" class="form-control" name="tanggal" required>
                      </div>
                  </div>
                  <div class="mb-3 row">
                      <label for="" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                      <div class="col-sm-10">
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="jenis_kelamin" value="Laki-Laki"  checked>
                          <label class="form-check-label">
                            Laki-Laki
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="jenis_kelamin" value="Perempuan">
                          <label class="form-check-label">
                            Perempuan
                          </label>
                        </div>
                      </div>
                  </div>
                  
                  <div class="mb-3 row">
                      <label for="" class="col-sm-2 col-form-label">Alamat</label>
                      <div class="col-sm-10">
                          <textarea class="form-control" name="alamat" cols="30" rows="3" required></textarea>
                      </div>
                  </div>
                  <div class="mb-3 row">
                      <label for="" class="col-sm-2 col-form-label">Telepon</label>
                      <div class="col-sm-10">
                          <input type="text" class="form-control" name="telepon" required>
                      </div>
                  </div>
                  <div class="mb-3 row">
                      <label for="" class="col-sm-2 col-form-label">Email</label>
                      <div class="col-sm-10">
                          <input type="text" class="form-control" name="email" required>
                      </div>
                  </div>
                  <div class="mb-3 row">
                      <label for="" class="col-sm-2 col-form-label">Foto Karyawan</label>
                      <div class="col-sm-10">
                        <input type="file" class="form-control" name="foto" required> 
                        <p style="color: #ccc; size:90%;">tambahkan foto Karyawan</p>
                      </div>
                  </div>
                  <input type="submit" name="submit" value="Simpan" class="btn btn-secondary mb-3">
                  <a href="dashboard.php?dashboard=data_karyawan" type="button" class="btn btn-outline-danger mb-3  ">Cancel</a>
              </form>
          </div>
      </div>
  </div>
</section>