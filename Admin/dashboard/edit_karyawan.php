<?php
  include '../config.php';
  $id = $_GET["id"];
  $query="SELECT * FROM tb_karyawan where id_karyawan='$id'";
	$result=$connection->query($query);
	$baris=mysqli_fetch_row($result);

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
      
      if (empty($foto)) {
        $result = $connection->query("update tb_karyawan set
        NIP_karyawan='$NIP',
        nama_karyawan='$nm',
        tempat = '$tempat',
        tanggal_lahir = '$tanggal', 
        jenis_kelamin = '$jenis_kelamin', 
        alamat = '$alamat', 
        telepon = '$telepon', 
        email = '$email' 
        where id_karyawan=$id");
        if ($result){
            ?>
                <script language="JavaScript">alert("Data karyawan Berresult Di Simpan");
                    window.location="dashboard.php?dashboard=data_karyawan";    
            </script>
            <?php   
        }
      } else {
        unlink("../../foto_karyawan/$baris[9]");
        move_uploaded_file($_FILES["foto"]["tmp_name"],"../../foto_karyawan/".$_FILES["foto"]["name"]);
        $result = $connection->query("update tb_karyawan set
        NIP_karyawan='$NIP',
        nama_karyawan='$nm',
        tempat = '$tempat',
        tanggal_lahir = '$tanggal', 
        jenis_kelamin = '$jenis_kelamin', 
        alamat = '$alamat', 
        telepon = '$telepon', 
        email = '$email', 
        foto = '$foto' 
        where id_karyawan=$id");
        if ($result){
            ?>
                <script language="JavaScript">alert("Data karyawan Berresult Di Simpan");
                    window.location="dashboard.php?dashboard=data_karyawan";    
            </script>
            <?php   
        }
      } 
  } 
?>

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Form Edit karyawan</h1>
</div>
<section>
  <div class="container">
      <div class="row">
          <div class="col">
              <form action="" method="POST" enctype="multipart/form-data">
                  <div class="mb-3 row">
                      <label for="" class="col-sm-2 col-form-label">NIP karyawan</label>
                      <div class="col-sm-10">
                      <input type="text" class="form-control" name="NIP_karyawan" value="<?php echo $baris[1]; ?>">
                      </div>
                  </div>
                  <div class="mb-3 row">
                      <label for="" class="col-sm-2 col-form-label">Nama karyawan</label>
                      <div class="col-sm-10">
                      <input type="text" class="form-control" name="nama_karyawan" value="<?php echo $baris[2]; ?>">
                      </div>
                  </div>
                  <div class="mb-3 row">
                      <label for="" class="col-sm-2 col-form-label">Tempat/Tanggal Lahir</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" name="tempat" value="<?php echo $baris[3]; ?>">
                      </div>
                      <div class="col-sm-5">
                      <input type="date" class="form-control" name="tanggal" value="<?php echo $baris[4]; ?>">
                      </div>
                  </div>
                  <div class="mb-3 row">
                      <label for="" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                      <div class="col-sm-10">
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="jenis_kelamin" value="Laki-Laki" <?php echo ($baris[5]=='Laki-Laki')?'checked':'' ?>>
                          <label class="form-check-label">
                            Laki-Laki
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="jenis_kelamin" value="Perempuan" <?php echo ($baris[5]=='Perempuan')?'checked':'' ?>>
                          <label class="form-check-label">
                            Perempuan
                          </label>
                        </div>
                      </div>
                  </div>
                  <div class="mb-3 row">
                      <label for="" class="col-sm-2 col-form-label">Alamat</label>
                      <div class="col-sm-10">
                          <textarea class="form-control" name="alamat" cols="30" rows="3"><?php echo $baris[6]; ?></textarea>
                      </div>
                  </div>
                  <div class="mb-3 row">
                      <label for="" class="col-sm-2 col-form-label">Telepon</label>
                      <div class="col-sm-10">
                          <input type="text" class="form-control" name="telepon" value="<?php echo $baris[7]; ?>">
                      </div>
                  </div>
                  <div class="mb-3 row">
                      <label for="" class="col-sm-2 col-form-label">Email</label>
                      <div class="col-sm-10">
                          <input type="text" class="form-control" name="email" value="<?php echo $baris[8]; ?>">
                      </div>
                  </div>
                  <div class="mb-3 row">
                      <label for="" class="col-sm-2 col-form-label">Foto karyawan</label>
                      <div class="col-sm-1">
                        <img src="../foto_karyawan/<?php echo $baris[9]; ?>" alt="" width="40">
                      </div>
                      <div class="col-sm-9">
                        <input type="file" class="form-control" name="foto"> 
                      </div>
                  </div>
                  <input type="submit" name="submit" value="Simpan" class="btn btn-secondary mb-3">
                  <a href="dashboard.php?dashboard=data_karyawan" class="btn btn-info mb-3">Kembali</a>
              </form>
          </div>
      </div>
  </div>
</section>