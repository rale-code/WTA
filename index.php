<?php
	include 'includes/dbh.inc.php';

	$sql = "SELECT * FROM player";
	$result = $conn->query($sql);
	while ($row = $result->fetch_assoc()) {
		$datas[] = $row;
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>WTA</title>
	<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="https://kit.fontawesome.com/d3d792014f.js" crossorigin="anonymous"></script>
</head>
	<body>
		<?php include 'templates/nav.php'?>
			<h1>Active players</h1>
		</div>
		<main>
			<?php foreach($datas as $data): ?>
			<div class="player">
				<img src="<?php echo $data['img']; ?>">
				<h5><?php echo $data['name']; ?></h5>
				<h2><?php echo $data['surname']; ?></h2>
				<h3><?php echo $data['country']; ?></h3>
			</div>
			<?php endforeach ?>
		</main>
		<?php include 'templates/footer.php'?>
		<a href="form.php"><button>Add player</button></a>
	</body>
</html>