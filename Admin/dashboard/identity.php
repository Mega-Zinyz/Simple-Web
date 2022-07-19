<?php
    include '../config.php';
    $query="select * from tb_identity";
    $result=$connection->query($query); 
    $baris=mysqli_fetch_row($result);
?>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Identitas Website</h1>
</div>
<section>
    <div class="container">
        <div class="row">
            <div class="col">
                <form action="edit_identity.php" method="POST" enctype="multipart/form-data">
                    <input type="hidden" class="form-control" name="id_identity" value="<?php echo $baris[0];?>">
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">Nama Website</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" name="website_name" value="<?php echo $baris[1];?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">Sejarah</label>
                        <div class="col-sm-10">
                            <input id="history<?php echo $baris[0];?>" type="hidden" name="history" value="<?php echo $baris[2];?>">
                            <trix-editor input="history<?php echo $baris[0];?>"></trix-editor><br>                           
                        </div>
                    </div>
                    <div class="mb-3 row">
                    <label for="" class="col-sm-2 col-form-label">Visi</label>
                        <div class="col-sm-10">
                            <input id="visi<?php echo $baris[0];?>" type="hidden" name="visi" value="<?php echo $baris[3];?>">
                            <trix-editor input="visi<?php echo $baris[0];?>"></trix-editor><br>                        
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">Misi</label>
                        <div class="col-sm-10">
                            <input id="misi<?php echo $baris[0];?>" type="hidden" name="misi" value="<?php echo $baris[4];?>">
                            <trix-editor input="misi<?php echo $baris[0];?>"></trix-editor><br>                          
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">Tujuan</label>
                        <div class="col-sm-10">
                            <input id="tujuan<?php echo $baris[0];?>" type="hidden" name="tujuan" value="<?php echo $baris[5];?>">
                            <trix-editor input="tujuan<?php echo $baris[0];?>"></trix-editor><br>                          
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                            <input id="alamat<?php echo $baris[0];?>" type="hidden" name="alamat" value="<?php echo $baris[6];?>">
                            <trix-editor input="alamat<?php echo $baris[0];?>"></trix-editor><br>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">Telepon</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="telepon" value="<?php echo $baris[7];?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="email" value="<?php echo $baris[8];?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">Detail Perusahaan</label>
                        <div class="col-sm-10">
                            <input id="company_detail<?php echo $baris[0];?>" type="hidden" name="company_detail" value="<?php echo $baris[9];?>">
                            <trix-editor input="company_detail<?php echo $baris[0];?>"></trix-editor><br>                        
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">Logo</label>
                        <div class="col-sm-10">
                            <img class="rounded-circle img-thumbnail img-responsive" alt="Logo" width="150" src="../../Logo/<?php echo $baris[10];?>" role="img"><p><?php echo $baris[10];?></p>
                            <input type="file" class="form-control" name="logo"> 
                        </div>
                    </div>
                    <input type="submit" name="submit" class="btn btn-secondary mb-3">
                </form>
            </div>
        </div>
    </div>
</section>