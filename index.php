<?php
	include 'query/player.php';



?>
<!DOCTYPE html>
<html>
<head>
	<title>ATP</title>
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
			<div name="country_select">
				<form action="query/selectByCountry.php" method="post">
					<button>Select</button>
				</form>
			</div>
			<?php foreach((array)$players as $player): ?>
			<div class="player">
				<img src="<?= $player['player_image']; ?>">
				<h4><?= $player['rank']; ?></h4>
				<h4><?= $player['name'] ?></h4>
				<h6><?= $player['points']; ?></h6>
				<h5><img src="<?= $player['country_image'] ?>"><?= $player['country']  ?></h5>
			</div>
			<?php endforeach ?>
		</main>
		<?php include 'templates/footer.php'?>
		<form action="includes/add.php" method="post">
			<button>Add player</button>
		</form>
	</body>
</html>