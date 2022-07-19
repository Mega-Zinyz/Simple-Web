<?php
    include '../config.php';
    $id = $_GET["id"];
    $query="SELECT * FROM tb_karyawan where id_karyawan='$id'";
    $result=$connection->query($query);
    $baris=mysqli_fetch_row($result);
?>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Detil Karyawan</h1>
</div>
<section>
    <div class="row">
        <div class="col-md-12">
        <img class="img-thumbnail img-responsive mb-2" width="150" src="../../foto_karyawan/<?php echo $baris[9];?>" role="img">
        </div>
        <div class="col-md-5">
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                    <h6 class="mb-0">Nim Karyawan</h6>
                    <div class="mb-1 text-muted"><?php echo $baris[1];?></div>
                    <h6 class="mb-0">Nama Karyawan</h6>
                    <div class="mb-1 text-muted"><?php echo $baris[2];?></div>
                    <h6 class="mb-0">Tempat Lahir</h6>
                    <div class="mb-1 text-muted"><?php echo $baris[3];?></div>
                    <h6 class="mb-0">Tanggal Lahir</h6>
                    <div class="mb-1 text-muted"><?php echo $baris[4];?></div>
                </div>
            </div>
            <a href="dashboard.php?dashboard=data_karyawan" class="btn btn-info btn-sm">Kembali</a>
            <a href="dashboard.php?dashboard=edit_karyawan&id=<?php echo $baris[0];?>" type="button" class="btn btn-secondary btn-sm">Edit Data</a>
        </div>
        <div class="col-md-7">
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                    <h6 class="mb-0">Jenis Kelamin</h6>
                    <div class="mb-1 text-muted"><?php echo $baris[5];?></div>
                    <h6 class="mb-0">Alamat</h6>
                    <div class="mb-1 text-muted"><?php echo $baris[6];?></div>
                    <h6 class="mb-0">No. Telepon</h6>
                    <div class="mb-1 text-muted"><?php echo $baris[7];?></div>
                    <h6 class="mb-0">Alamat Email</h6>
                    <div class="mb-1 text-muted"><?php echo $baris[8];?></div>
                </div>
            </div>
        </div>
    </div>
</section>