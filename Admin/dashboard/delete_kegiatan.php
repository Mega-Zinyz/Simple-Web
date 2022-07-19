<?php
    include '../config.php';
    $id = $_GET["id"];
    $delete_kegiatan = mysqli_fetch_array($connection->query("select foto from tb_kegiatan where id_kegiatan ='$id' "));
    if ($delete_kegiatan['foto']!=''){
        $query="delete FROM tb_kegiatan where id_kegiatan='$id'";
        $result=$connection->query($query);
        unlink("../../foto_kegiatan/$delete_kegiatan[foto]");
        ?> 
            <script language="javascript">
            alert("Data Has Been Deleted");
            document.location="dashboard.php?dashboard=data_kegiatan";
            </script>
        <?php
        }
        else{
        $query="delete FROM tb_kegiatan where id_kegiatan='$id'";
        $result=$connection->query($query);
        if  ($result){
            ?>
                <script language="javascript">
                alert("Data Has Been Deleted");
                document.location="dashboard.php?dashboard=data_kegiatan";
                </script>
            <?php
        }
    }
?>