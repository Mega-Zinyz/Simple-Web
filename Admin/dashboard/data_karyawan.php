<?php
    include '../config.php';
    $query= "select * from tb_karyawan";
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
    <h1 class="h2">Data Karyawan</h1>
</div>
<section>
    <div class="container">
        <a href="dashboard.php?dashboard=tmb_karyawan" type="button" class="btn btn-outline-primary">Tambah Data</a>
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>NIP</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Foto</th>
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
                            echo "<td>$row[NIP_karyawan]</td>";
                            echo "<td>$row[nama_karyawan]</td>";
                            echo "<td>$row[jenis_kelamin]</td>";
                            echo "<td><a href='../../foto_karyawan/$row[foto]' target='_blank'/>
                                            <img src='../../foto_karyawan/$row[foto]' width='50'></a></td>";   
                            echo "<td>
                                <a href='dashboard.php?dashboard=detail_karyawan&id=$row[id_karyawan]'>
                                <button type='button' class='btn btn-outline-info'>Info</button></a>
                                <a href='dashboard.php?dashboard=delete_karyawan&id=$row[id_karyawan]'
                                Onclick='return ConfirmDelete();'>
                                <button type='button' class='btn btn-outline-danger'>Delete</button></a>
                                <a href='dashboard.php?dashboard=edit_karyawan&id=$row[id_karyawan]'>
                                <button type='button' class='btn btn-outline-primary'>Edit</button></a>
                                </td>";
                            echo "</tr>";
                            $i++;
                            $no++;
                        }   
                ?>
                </tbody>
            </table>
        </div>
    </div>
</section>
