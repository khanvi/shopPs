<?php
	$con = mysqli_connect('127.0.0.1','root','','hv');
	$query = mysqli_query($con, "INSERT INTO games (name,price,img) 
		VALUES ('". $_POST['name']."', 
				'" . $_POST['price'] . "', 
				'" . $_FILES['img']['name'] . "')");
	move_uploaded_file($_FILES['img']['tmp_name'],$_FILES['img']['name']);
	header("Location: http://hv/home/main.php");
?>