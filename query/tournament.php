<?php

include 'includes/database.php';

function getMayTournaments() {
	$mayTournaments = null;
	$sql = "SELECT *
		FROM tournaments
		WHERE time='May';";
		$result = $GLOBALS['conn']->query($sql);
		while ($row = $result->fetch_assoc()) {
		$mayTournaments[] = $row;
	}
	return $mayTournaments;
}

function getJuneTournaments() {
	$juneTournaments = null;
	$sql = "SELECT *
		FROM tournaments
		WHERE time='June';";
		$result = $GLOBALS['conn']->query($sql);
		while ($row = $result->fetch_assoc()) {
		$juneTournaments[] = $row;
	}
	return $juneTournaments;
}

function getTournamentsById() {
	$id = $_GET['id'];
	$tournaments = null;
	$sql = "SELECT tournaments.tournament_name, tournaments.Surface, tournaments.tournament_id, player.name, tournaments.img
		FROM tournaments
		INNER JOIN player
		ON tournaments.player_id=player.player_id
		WHERE tournament_id='$id';";
		$result = $GLOBALS['conn']->query($sql);
		while ($row = $result->fetch_assoc()) {
		$tournaments[] = $row;
	}
	return $tournaments;
}


