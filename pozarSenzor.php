<?php
	$_POST = file_get_contents("php://input");
	$json_obj = json_decode($_POST);
	$server = "localhost";
	$user = "strizak.e138";
	$pass = "2hT9yQLK";
	$db = "db_strizak_e138";
	$conn = new mysqli($server, $user, $pass, $db);
	if ($conn->connect_error)
		die("Connection failed: " . $conn->connect_error);
	$sql = "INSERT INTO Pozar (pozicija) VALUES
	('" . $json_obj->pozicija . "')";
	if ($conn->query($sql) === TRUE)
		echo "Unos uspesno izvrsen!" . PHP_EOL;
	else
		echo "Greska: " . $sql . $conn->error . PHP_EOL;
	$conn->close();

?>
