<?php 

include 'includes/database.php';

$players = null;
$sql = "SELECT * FROM player";
	$result = $conn->query($sql);
	while ($row = $result->fetch_assoc()) {
		$players[] = $row;
	}
