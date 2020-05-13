<?php

include '../includes/database.php';

$name = $_POST['name'];

$options = null;
$sql = "SELECT player.name, player.points, player.rank, country.country, player.player_image, country_image
		FROM player
		INNER JOIN country
		ON player.country_id=country.country_id
		WHERE country='$name'";
		$result = $conn->query($sql);
		while ($row = $result->fetch_assoc()) {
		$options[] = $row;
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>ATP</title>
	<link rel="stylesheet" type="text/css" href="CSS/nav.css">
	<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../style.css">
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
			<?php foreach((array)$options as $option): ?>
			<div class="player">
				<img src="<?= $option['player_image']; ?>">
				<h4><?= $option['rank']; ?></h4>
				<h4><?= $option['name'] ?></h4>
				<h6><?= $option['points']; ?></h6>
				<h5><img src="<?= $option['country_image'] ?>"><?= $option['country']  ?></h5>
			</div>
			<?php endforeach ?>
		</main>
		<?php include 'templates/footer.php'?>
		<form action="includes/add.php" method="post">
			<button>Add player</button>
		</form>
	</body>
</html>

		


