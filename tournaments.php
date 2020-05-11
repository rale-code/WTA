<?php 
include 'query/tournament.php';

?>




<!DOCTYPE html>
<html>
<head>
	<title>Tournamets</title>
	<script src="https://kit.fontawesome.com/d3d792014f.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="CSS/nav.css">
	<link rel="stylesheet" type="text/css" href="tournaments.css">
	<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap" rel="stylesheet">
</head>
<body>
	<?php 
		$title = "Tournaments";
		include 'templates/nav.php'
	?>
	<main>
		<h1>
			May
		</h1>
		<?php foreach ($tournaments as $tournament): ?>
		<div class="container">
			<img src="https://c.stocksy.com/a/mRW400/z9/1078042.jpg">
			<div class="tournament">
				<h1><?= $tournament['tournament_name'] ?></h1>
				
			</div>
		</div>
	<?php endforeach ?>
		<h1>June</h1>
		<div class="container">
			<img src="https://www.liveabout.com/thmb/9KrxnEpqlbHlYMWZe6bEGIfd4W0=/3386x2257/filters:no_upscale():max_bytes(150000):strip_icc()/day-one--the-championships---wimbledon-2015-478964582-5928b0c45f9b585950957a32.jpg">
			<div class="tournament">
				<h1>Libema Open</h1>
			</div>
		</div>
	</main>
	<?php include 'templates/footer.php'?>
</body>
</html>