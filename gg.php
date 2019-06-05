<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
	<?php
		$con = mysqli_connect('127.0.0.1','root','','hv');
		$query = mysqli_query($con,"SELECT * FROM games ORDER BY id DESC");
	?>
	<?php
		for($i = 0; $i < $query->num_rows; $i++){
			$rec = mysqli_fetch_assoc($query)
	?>
		<div>
			<?php
				echo '<img src="' . $rec['img'] . '" class="w-100">';
			?>
		</div>
		<div>
			<h6>
				<?php echo $rec['name'];?>
			</h6>
			<p>
				<?php echo $rec['price'] . ' рублей';?>
			</p>
		</div>
		<form  method="POST" action="edit.php">
							<?php
								echo '<input type="hidden" name="id" value"' 
								. $rec['id'] . '">';
							?>
							<?php
								echo '<input type="hidden" name="name" value"' 
								. $rec['name'] . '">';
							?>
							<?php
								echo '<input type="hidden" name="price" value"' 
								. $rec['price'] . '">';
							?>
							<?php
								echo '<input type="hidden" name="img" value"' 
								. $rec['img'] . '">';
							?>
							<button class="btn btn-primary">
								edit
							</button>
		</form>
</body>
</html>