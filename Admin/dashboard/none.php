<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Welcome - <?php echo $_SESSION['username']; ?></h1>
</div>

<?php
    include '../config.php';
    $query="select * from tb_identity";
    $result=$connection->query($query); 
    $baris=mysqli_fetch_row($result);
?>

<section id="none">
    <div class="container">
        <div class="row">
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="card-header">
                        Visi
                    </div>
                    <div class="card-body">
                        <p><?php echo $baris[3];?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="card-header">
                        Misi
                    </div>
                    <div class="card-body">
                        <?php echo $baris[4];?>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="card-header">
                        Tujuan
                    </div>
                    <div class="card-body">
                        <p><i><?php echo $baris[5];?></i></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>