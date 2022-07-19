<?php 
    include '../config.php';
    $id = $_POST["id_user"];
    if (isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $result = $connection->query("update tb_user set username='$username', password='$password' where id_user=$id");
    if ($result){
        ?>
        <script  language="JavaScript">
            alert("Data User Has been Updated");
            window.location="dashboard.php?dashboard=data_user";
        </script>
        <?php
        }
    }
?>