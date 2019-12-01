<?php
	session_start();
	include_once('admin.session.php');
	$id	= $_GET['id'];
	$sql	= mysql_query("delete from kasir where id_kasir='$id'");
	
	echo "<script language=javascript>
			window.alert('Hapus Berhasil');
			window.location='admin.php?hal=1';
			</script>";
	
	session_destroy();		
?>