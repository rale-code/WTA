<?php 

include 'includes/database.php';

function getAllPlayers() {
	$players = null;
	$sql = "SELECT player.name, player.points, player.rank, country.country, player.player_image, country_image, player.player_id
		FROM player
		INNER JOIN country
		ON player.country_id=country.country_id
		ORDER BY player.rank ASC";
		$result = $GLOBALS['conn']->query($sql);
		while ($row = $result->fetch_assoc()) {
		$players[] = $row;
	}
	return $players;
}

function getPlayersById() {
	$id = $_GET['id'];
	$players = null;
	$sql = "SELECT player.name, player.points, player.rank, country.country, player.player_image, country_image, player.player_id
		FROM player
		INNER JOIN country
		ON player.country_id=country.country_id
		WHERE player_id='$id'";
		$result = $GLOBALS['conn']->query($sql);
		while ($row = $result->fetch_assoc()) {
		$players[] = $row;
	}
	return $players;
}