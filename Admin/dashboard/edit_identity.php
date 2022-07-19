<?php
    include '../config.php';
    $id = $_POST["id_identity"];
    $query="SELECT * FROM tb_identity where id_identity='$id'";
    $result=$connection->query($query); 
    $baris=mysqli_fetch_row($result);
    $logo_lama = $baris[10];

    if(isset($_POST['submit'])){
        $website_name = $_POST['website_name'];
        $history = $_POST['history'];
        $visi = $_POST['visi'];
        $misi = $_POST['misi'];
        $tujuan = $_POST['tujuan'];
        $alamat = $_POST['alamat'];
        $telepon = $_POST['telepon'];
        $email = $_POST['email'];
        $company_detail = $_POST['company_detail'];
        $logo = $_FILES["logo"]["name"];

        if (empty($logo)) {
        $result = $connection->query("update tb_identity set 
          website_name='$website_name',
          history='$history',
          visi='$visi',
          misi='$misi',
          tujuan='$tujuan',
          alamat='$alamat',
          telepon='$telepon',
          email='$email',
          company_detail='$company_detail'
          where id_identity=$id");
          if ($result){
            ?>
              <script language="JavaScript">alert("Identitas Website Berresult Diupdate");
                window.location="dashboard.php?dashboard=identity";  
              </script>
            <?php 
            }
          }
        else {
        unlink("../../Logo/$logo_lama");
        move_uploaded_file($_FILES["logo"]["tmp_name"],"../../Logo/" .$_FILES["logo"]["name"]);
        $result = $connection->query("update tb_identity set 
          website_name='$website_name',
          history='$history',
          visi='$visi',
          misi='$misi',
          tujuan='$tujuan',
          alamat='$alamat',
          telepon='$telepon',
          email='$email',
          company_detail='$company_detail',
          logo='$logo'
          where id_identity=$id"); 
        if ($result){
          ?>
            <script language="JavaScript">alert("Identitas Website Berresult Diupdate");
              window.location="dashboard.php?dashboard=identity";  
            </script>
          <?php 
          }
        }
    }
?>

