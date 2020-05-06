<?php
	include 'query/player.php';
	include 'query/country.php';



?>
<!DOCTYPE html>
<html>
<head>
	<title>WTA</title>
	<link rel="stylesheet" type="text/css" href="CSS/nav.css">
	<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="https://kit.fontawesome.com/d3d792014f.js" crossorigin="anonymous"></script>
</head>
	<body>
		<?php 
			$title = "Active players";
			include 'templates/nav.php'
		?>
		<main>
			<?php foreach($players as $player): ?>
			<div class="player">
				<img src="<?= $player['img']; ?>">
				<h4><?= $player['rank']; ?></h4>
				<h4><?= $player['name'] ?></h4>
				<h6><?= $player['points']; ?></h6>
			</div>
			<?php endforeach ?>
		</main>
		<?php include 'templates/footer.php'?>
		<a href="form.php"><button>Add player</button></a>
	</body>
</html>