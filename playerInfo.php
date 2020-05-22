<?php
	$id = $_GET['id'];

	include 'query/player.php';

	$players = getPlayersById();


?>


<!DOCTYPE html>
<html>
<head>
	<title>Info</title>
</head>
	<link rel="stylesheet" type="text/css" href="CSS/nav.css">
	<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="CSS/info.css">
	<script src="https://kit.fontawesome.com/d3d792014f.js" crossorigin="anonymous"></script>
<body>
	<?php
			$title = "More  about";
			include 'templates/nav.php'
		?>
			<?php foreach((array)$players as $player): ?>
				<div class="player-img">
					<img src="<?= $player['player_image']; ?>">
				</div>
				<div class="player-info">
					<h1>Rank<br><?= $player['rank']; ?></h1>
					<h1>Name<br><?= $player['name'] ?></h1>
					<h1>Points<br><?= $player['points']; ?></h1>
					<h1>Country<br><img src="<?= $player['country_image'] ?>"><?= $player['country']  ?></h1>
				</div>
			<?php endforeach ?>
		</main>
		<?php include 'templates/footer.php'?>
		<form action="includes/importPlayers.php" method="post">
			<button>Add player</button>
		</form>


</body>
</html>