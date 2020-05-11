<?php

include 'includes/database.php';

$tournaments = null;
$sql = "SELECT *
		FROM tournaments;";
		$result = $conn->query($sql);
		while ($row = $result->fetch_assoc()) {
		$tournaments[] = $row;
	}