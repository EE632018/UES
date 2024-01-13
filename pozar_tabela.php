<?php
	$server = "localhost";
	$user = "strizak.e138";
	$pass = "2hT9yQLK";
	$db = "db_strizak_e138";
	$conn = new mysqli($server, $user, $pass, $db);
	if ($conn->connect_error)
		die("Connection failed: " . $conn->connect_error);
	$result = $conn->query("SELECT * FROM Pozar ORDER BY vreme DESC LIMIT 10");
	
	$conn->close();
?>
<html>
	<head>
		<style>
			table {font-family: arial, sans-serif;}
			td, th {text-align: left; padding: 8px;}
			tr:nth-child(even) {background-color: #dddddd;}
			tr:nth-child(odd) {background-color: #eeeeee;}
			

		</style>
	</head>
	<body>
		<table>
		<tr>
		<th>Vreme</th>
		<th>Tip senzora</th>
		</tr>
		<?php
			while($row = $result->fetch_assoc())
			{
				echo "<tr>" . PHP_EOL;
				echo "<td>" . $row["vreme"] . "</td>" . PHP_EOL;
				echo "<td>" . $row["status"] . "</td>" . PHP_EOL;
				echo "</tr>" . PHP_EOL;
			}
		?>
		</table>

		
	</body>
</html>
