<?php 
	include 'query/tournament.php';

	$tournaments = getTournamentsById();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Tournamets</title>
	<script src="https://kit.fontawesome.com/d3d792014f.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="CSS/nav.css">
	<link rel="stylesheet" type="text/css" href="tournamentInfo.css">
	<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap" rel="stylesheet">
</head>
<body>
	<?php 
		$title = "Tournament";
		include 'templates/nav.php'
	?>
	<main>
		<?php foreach ($tournaments as $tournament): ?> 
			<div class="container">
				<img src="<?= $tournament['img']  ?>">
				<h2><?= $tournament['tournament_name']  ?></h2>
				<h3>Winner:</h3>
				<h1><?= $tournament['name']  ?></h1>
				<h2>Surface:</h2>
				<h2><?= $tournament['Surface']  ?></h2>
			</div>
		<?php endforeach ?>
	</main>
	<?php include 'templates/footer.php'?>
</body>
</html>