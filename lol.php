<?php
	$con = mysqli_connect('127.0.0.1','root','','hv');
	if($_FILES['img']['name'] != null){
	$query = mysqli_query($con, "UPDATE games SET name  = '" . $_POST['name'] . "' 
												 ,price = '" . $_POST['price'] . "'
												 ,img   = '" . $_FILES['img']['name'] . "'  
										    WHERE id    = '" . $_POST['id'] . "'
										    ");
	move_uploaded_file($_FILES['img']['tmp_name'],$_FILES['img']['name']);
	}
	else {
	$query = mysqli_query($con, "UPDATE games SET name  = '" . $_POST['name'] . "' 
												 ,price = '" . $_POST['price'] . "'
										    WHERE id    = '" . $_POST['id'] . "'
										    ");
	}
	header("Location: http://hv/home/main.php");
?>