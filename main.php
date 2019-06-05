<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
	<?php $con = mysqli_connect('127.0.0.1','root','','hv');
	$query = mysqli_query($con,"SELECT * FROM games ORDER BY id DESC");
	?>
	<div style="height: 50px">
	</div>
	<div class="container mb-2">
			<form method="POST" action="insert.php" enctype="multipart/form-data">
				<h5> добавить товар </h5>
				<input name="name" placeholder="Имя товара" class="form-control mb-1">
				<input name="price" placeholder="Цена" class="form-control mb-1">
				<input type="file" name="img">
				<button class="btn btn-primary">OK</button>
			</form>
	</div>
	<div class="container">
		<div class="row">
			<?php
				for($i = 0; $i < $query->num_rows; $i++){
					//$rec = mysqli_fetch_assoc($query)
					$rec = $query->fetch_assoc();
			?>
			<div class="col-3 mb-4">
				<div>
					<div>
						<?php
							echo '<img src="' . $rec['img'] . '" class="w-100">';
						?>
					</div>
					<div>
						<h6>
							<?php
							echo $rec['name'];
							?>
						</h6>
						<p>
							<?php
							echo $rec['price'] . ' рублей';
							?>
						</p>
					</div>
					<div>
						<form  method="POST" action="delete.php" class="mb-2">
							<?php
								echo '<input type="hidden" name="id" value="' 
								. $rec['id'] . '">';
							?>
							<button class="btn btn-primary">
								delete
							</button>
						</form>
						<form  method="POST" action="edit.php">
							<?php
								echo '<input type="hidden" name="id" value="' 
								. $rec['id'] . '">';
							?>
							<?php
								echo '<input type="hidden" name="name" value="' 
								. $rec['name'] . '">';
							?>
							<?php
								echo '<input type="hidden" name="price" value="' 
								. $rec['price'] . '">';
							?>
							<?php
								echo '<input type="hidden" name="img" value="' 
								. $rec['img'] . '">';
							?>
							<button class="btn btn-primary">
								edit
							</button>
						</form>
					</div>
				</div>
			</div>
			<?php
				}
			?>
		</div>
	</div>
</body>
</html>