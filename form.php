<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
	<script src="https://kit.fontawesome.com/d3d792014f.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="templates/nav.css">
</head>
<body>
	<?php include 'templates/nav.php'?>
	</div>
	<main>
		<div>
			<form action="add.php" method="post">
				Name<input type="text" name="name"><br>
				Surname<input type="text" name="surname"><br>
				Country<input type="text" name="country"><br>
				height<input type="text" name="height"><br>
				Age<input type="text" name="age"><br>
				Birthplace<input type="text" name="birthplace"><br>
				Coach<input type="text" name="coach"><br>
				<button>Submit</button>
			</form>
		</div>
	</main>


	<?php include 'templates/footer.php'?>

</body>
</html>