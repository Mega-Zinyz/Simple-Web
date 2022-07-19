<?php 
    include '../config.php';
    $nama_kegiatan = $_POST["nama_kegiatan"];
    $deskripsi = $_POST["deskripsi"];
    $foto = $_FILES["foto"]["name"];
    if (file_exists("../../foto_kegiatan/" . $_FILES["foto"]["name"])){
        $connection->query("insert into tb_kegiatan(nama_kegiatan,deskripsi,foto)values('$nama_kegiatan','$deskripsi','$foto')");
    }
    else{
            move_uploaded_file($_FILES["foto"]["tmp_name"],"../../foto_kegiatan/" . $_FILES["foto"]["name"]);
        $connection->query("insert into tb_kegiatan(nama_kegiatan,deskripsi,foto)values('$nama_kegiatan','$deskripsi','$foto')");
    }
        header("location:dashboard.php?dashboard=data_kegiatan");
?>