<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
	<script src="https://kit.fontawesome.com/d3d792014f.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="CSS/nav.css">
	<link rel="stylesheet" type="text/css" href="form.css">
</head>
<body>
	<?php include 'templates/nav.php'?>
	<?php $div = '</div>' ?>
	<main>
		<div class="form">
			<form action="includes/add.php" method="post">
				<label for="img">Image</label>
				<input type="text" name="img" placeholder="img" id="img"><br>
				<label for="name">Name</label>
				<input type="text" name="name" id="name"><br>
				<label for="surname">Surname</label>
				<input type="text" name="surname" id="surname"><br>
				<label for="counry">Country</label>
				<input type="text" name="country" id="country"><br>
				<label for="age">Age</label>
				<input type="number" name="age" id="age"><br>
				<label for="height">Height</label>
				<input type="number" name="height" id="height" step=".01"><br>
				<button>Submit</button>
			</form>
		</div>
	</main>


	<?php include 'templates/footer.php'?>

</body>
</html>