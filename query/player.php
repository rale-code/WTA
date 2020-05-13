<?php 

include 'includes/database.php';

$players = null;
$sql = "SELECT player.name, player.points, player.rank, country.country, player.player_image, country_image, player.player_id
		FROM player
		INNER JOIN country
		ON player.country_id=country.country_id
		ORDER BY player.points DESC";
		$result = $conn->query($sql);
		while ($row = $result->fetch_assoc()) {
		$players[] = $row;
	}

