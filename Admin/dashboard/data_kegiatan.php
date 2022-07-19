<?php
    include '../config.php';
    $query= "select * from tb_kegiatan";
    $result = $connection->query($query);
    ?>
<script>
    function ConfirmDelete()
    {
        var del = confirm("are you sure want to delete this?");
        if (del)
            return true;
        else
            return false;  
    }
</script>

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Data Kegiatan</h1>
</div>
<section>
    <div class="container">
        <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#myModal">Tambah Data</button>
        <a type="button" class="btn btn-outline-primary" href="laporan_kegiatan.php" target="_blank">Print</a>
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama Kegiatan</th>
                        <th>Detail</th>
                        <th>Link</th>
                        <th>Gambar</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $i=1;
                        $no=1;
                        while ($row = mysqli_fetch_array($result))
                        {
                            echo "<tr class='odd gradex'>";
                            echo "<td>$no</td>";
                            echo "<td>$row[nama_kegiatan]</td>";
                            echo "<td>$row[deskripsi]</td>";
                            echo "<td>$row[link]</td>";
                            echo "<td><a href='../../foto_kegiatan/$row[foto]' target='_blank'/>
                                            <img src='../../foto_kegiatan/$row[foto]' width='50'></a></td>";   
                            echo "<td>
                                <a href='dashboard.php?dashboard=delete_kegiatan&id=$row[id_kegiatan]'
                                Onclick='return ConfirmDelete();'>
                                <i class='bi bi-trash'></i></a>&nbsp;&nbsp;
                                <a href='' data-bs-toggle='modal' data-bs-target='#edit$row[id_kegiatan]'>
                                <i class='bi bi-pencil-square'></i></a>
                                </td>";
                            echo "</tr>";
                            $i++;
                            $no++;
                    ?>
                        <!-- Modal Edit -->
                        <div class="modal fade" id="edit<?php echo $row['id_kegiatan'];?>" tabindex="-1" 
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Edit Kegiatan</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                        <form action="edit_kegiatan.php" method="POST" enctype="multipart/form-data">
                                            <input type="hidden" name="id_kegiatan" value="<?php echo $row['id_kegiatan']; ?>">
                                            <div class="modal-body">
                                                <label for="">Nama Kegiatan:</label>
                                                <input type="text" name="nama_kegiatan" class="form-control" value="<?php echo $row['nama_kegiatan']; ?>"><br>
                                                <label for="">Deskripsi:</label>
                                                <input id="deskripsi<?php echo $row['id_kegiatan'];?>" type="hidden" name="deskripsi" value="<?php echo $row['deskripsi'];?>">
                                                <label for="">Link</label>
                                                <input type="text" name="link" class="form-control" value="<?php echo $row['link']; ?>"><br>
                                                <input type="file" name="foto">
                                                <p style="size: 90%; color: gray;"><i><?php echo $row['foto'];?></i></p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                                <button type="submit" name="submit" class="btn btn-secondary">Save</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        <?php
                        }   
                ?>
                </tbody>
            </table>
        </div>
    </div>
</section>

<!-- Tambah Kegiatan -->
<div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Activity</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="tmb_kegiatan.php" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    <label for="">Nama Kegiatan:</label>
                    <input type="text" name="nama_kegiatan" class="form-control" required><br>
                    <label for="">Deskripsi:</label>
                    <input id="deskripsi" type="hidden" name="deskripsi">
                    <trix-editor input="deskripsi"></trix-editor><br>
                    <label for="">Link</label>
                    <input type="text" name="link" class="form-control" required><br>
                    <input type="file" name="foto">
                    <p style="size: 90%; color:gray;"><i>Choose The Foto</i></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" name="submit" class="btn btn-secondary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>