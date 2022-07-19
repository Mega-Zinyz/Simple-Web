<?php 
    include '../config.php';
    $id = $_POST["id_kegiatan"];
    $query="SELECT * FROM tb_kegiatan where id_kegiatan='$id'";
    $result=$connection->query($query);
    $baris=mysqli_fetch_array($result);
    $foto_lama = $baris[3];

    if (isset($_POST['submit'])){
        $nama_kegiatan = $_POST['nama_kegiatan'];
        $deskripsi = $_POST['deskripsi'];
        $foto = $_FILES['foto']['name'];

        if (empty($foto)) {
            $result = $connection->query("update tb_kegiatan set nama_kegiatan='$nama_kegiatan', deskripsi='$deskripsi' where id_kegiatan=$id");
            if ($result){
                ?>
                    <script language="JavaScript">alert("Data Kegiatan Berhasil Diupdate");
                    window.location="dashboard.php?dashboard=data_kegiatan";
                    </script>
                <?php
            }
        }
        else{
        unlink("../../foto_kegiatan/$foto_lama");
        move_uploaded_file($_FILES["foto"]["tmp_name"],"../../foto_kegiatan/" .$_FILES["foto"]["name"]);
        $result = $connection->query("update tb_kegiatan set nama_kegiatan='$nama_kegiatan', deskripsi='$deskripsi', foto='$foto' where id_kegiatan=$id");
        if ($result){
            ?>
                <script language="JavaScript">alert("Data Kegiatan Berhasil Diupdate");
                window.location="dashboard.php?dashboard=data_kegiatan";
                </script>
            <?php
            }
        }
    }
?>