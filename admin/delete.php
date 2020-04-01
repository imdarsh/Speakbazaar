<?php
	session_start();
	include('../config.php');
	$ids = $_GET['id'];
	if($_GET['type'] == 'owner') {
		$sql = mysqli_query($conn, "update business_owner set verify='0' where id='$ids'");
		echo '<script>location.href="view_business_owner.php"</script>';
	}
	else if($_GET['type'] == 'user') {
		$sql = mysqli_query($conn, "update customer set verify='0' where id='$ids'");
		echo '<script>location.href="view_customer.php"</script>';
	}
	


?>