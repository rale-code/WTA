<?php
include_once 'includes/database.php';

$id = $_GET['id'];



$players = null;
$sql = "SELECT player.name, player.points, player.rank, country.country, player.player_image, country_image, player.player_id
		FROM player
		INNER JOIN country
		ON player.country_id=country.country_id
		WHERE player_id='$id'";
		$result = $conn->query($sql);
		while ($row = $result->fetch_assoc()) {
		$players[] = $row;
	}


?>


<!DOCTYPE html>
<html>
<head>
	<title>Info</title>
</head>
	<link rel="stylesheet" type="text/css" href="CSS/nav.css">
	<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="https://kit.fontawesome.com/d3d792014f.js" crossorigin="anonymous"></script>
<body>
	<?php 
			$title = "Active players";
			include 'templates/nav.php'
		?>
		<main>
			<div name="country_select">
				<form action="query/selectByCountry.php" method="post">
					<input type="text" name="name">
					<button>Select</button>
				</form>
			</div>
			<?php foreach((array)$players as $player): ?>
			<a href="playerinfo.php?id=<?= $player['player_id'] ?>">	
				<div class="player">
					<img src="<?= $player['player_image']; ?>">
					<h4><?= $player['rank']; ?></h4>
					<h4><?= $player['name'] ?></h4>
					<h6><?= $player['points']; ?></h6>
					<h5><img src="<?= $player['country_image'] ?>"><?= $player['country']  ?></h5>
				</div>
			</a>
			<?php endforeach ?>
		</main>
		<?php include 'templates/footer.php'?>
		<form action="includes/importPlayers.php" method="post">
			<button>Add player</button>
		</form>
	

</body>
</html>