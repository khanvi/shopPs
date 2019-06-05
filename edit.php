<meta charset="utf-8">
<form  method="POST" action="lol.php" enctype="multipart/form-data">
	<?php echo '<input type="hidden" name="id" value="' . $_POST['id'] . '">'; ?>
	<?php echo '<input type="" name="name" value="' . $_POST['name'] . '">'; ?>
	<?php echo '<input type="" name="price" value="' . $_POST['price'] . '">'; ?>
	<?php echo '<input type="file" name="img">'; ?>
	<button class="btn btn-primary">edit</button>
</form>