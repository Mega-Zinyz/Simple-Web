<?php
    include '../config.php';
    $id = $_GET["id"];
    $query="delete FROM tb_user where id_user='$id'";
    $result=$connection->query($query);
    if ($result) {
        ?>
            <script language="JavaScript">
                alert("Data Has Been Deleted !")
                document.location="dashboard.php?dashboard=data_user";
            </script>
        <?php
    }
?>