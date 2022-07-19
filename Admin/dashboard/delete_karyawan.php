<?php 
	include '../config.php';
	$id = $_GET["id"];
	$hapus_karyawan = mysqli_fetch_array($connection->query("select foto from tb_karyawan where id_karyawan ='$id'"));
	$query="delete FROM tb_karyawan where id_karyawan='$id'";
	$result=$connection->query($query); 
	unlink("../../foto_karyawan/$hapus_karyawan[foto]");
  if ($result) {  
		?>
			<script language="javascript">
				alert("Data Will Be Deleted !");
				document.location="dashboard.php?dashboard=data_karyawan";
			</script>
		<?php
	}
?>


