<?php
    session_start();
    include 'config.php';
    $username ="";
    $password ="";
    if (isset($_POST["username"]) && isset($_POST["password"])) {
        $un =  $connection->real_escape_string($_POST["username"]);
        $pw =  $connection->real_escape_string($_POST["password"]);
        $sql = "select * from tb_user where (username='$un') and (password='$pw')";
        $result = $connection->query($sql);
        if ($result->num_rows == 1){
            $username = $_POST["username"];
            $password = $_POST["password"];
            $_SESSION["username"] = $_POST["username"];
            $_SESSION["password"] = $_POST["password"];
            ?>
                <script language="JavaScript">
                    document.location="dashboard/dashboard.php";
                </script>
            <?php
        }
        else {
            ?>
            <script language="JavaScript">
                alert("Worng Username or Password")
                document.location="index.php";
            </script>
            <?php
        }
    }
?>