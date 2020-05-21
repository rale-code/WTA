<?php 
	include 'query/tournament.php';

	$mayTournaments = getMayTournaments();

	$juneTournaments = getJuneTournaments();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Tournamets</title>
	<script src="https://kit.fontawesome.com/d3d792014f.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="CSS/nav.css">
	<link rel="stylesheet" type="text/css" href="CSS/tournaments.css">
	<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap" rel="stylesheet">
</head>
<body>
	<?php 
		$title = "Tournaments";
		include 'templates/nav.php'
	?>
	<main>
		<h1>
			<i class="far fa-calendar-alt"></i>May
		</h1>
		<?php foreach ($mayTournaments as $tournament): ?>
			<a href="tournamentInfo.php?id=<?php echo $tournament['tournament_id']; ?>">
				<div class="container">
					<img src="https://c.stocksy.com/a/mRW400/z9/1078042.jpg">
					<div class="tournament">
						<h2><?= $tournament['tournament_name'] ?></h2>
					</div>
				</div>
			</a>
		<?php endforeach ?>
		<h1><i class="far fa-calendar-alt"></i>June</h1>
		<?php foreach ($juneTournaments as $tournament): ?>
			<a href="tournamentInfo.php?id=<?php echo $tournament['tournament_id']; ?>">
				<div class="container">
					<img src="https://www.liveabout.com/thmb/9KrxnEpqlbHlYMWZe6bEGIfd4W0=/3386x2257/filters:no_upscale():max_bytes(150000):strip_icc()/day-one--the-championships---wimbledon-2015-478964582-5928b0c45f9b585950957a32.jpg">
					<div class="tournament">
						<h2><?= $tournament['tournament_name']  ?></h2>
					</div>
				</div>
			</a>
		<?php endforeach ?>
	</main>
	<?php include 'templates/footer.php'?>
</body>
</html>