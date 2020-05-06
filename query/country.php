<?php 
include 'includes/database.php';

$countries = null;
$sql = "SELECT * FROM country";
	$result = $conn->query($sql);
	while ($row = $result->fetch_assoc()) {
		$countries[] = $row;
	}