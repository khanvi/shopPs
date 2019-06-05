<?php
	$con = mysqli_connect('127.0.0.1','root','','hv');
	$query = mysqli_query($con, "DELETE FROM games WHERE id = " . $_POST['id']);
	header("Location: http://hv/home/main.php");
?>