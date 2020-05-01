<?php
	if (isset($_GET['search'])) {
		$response = "<ul><li>No data found!</li></ul>";

		$connection = new mysqli('localhost', 'root', '', 'autocompletion');
		$q = $connection->real_escape_string($_GET['q']);

		$sql = $connection->query("SELECT nom FROM film WHERE nom LIKE '$q%'");
		if ($sql->num_rows > 0) {
			$response = "<ul>";

			while ($data = $sql->fetch_array())
			
				$response .= "<a href=\"recherche.php?search=" . $data['nom'] . "\"><li>" . $data['nom'] . "</li></a>";
			
			$response .= "</ul>";
			
			 ;
		}


		exit($response);  //termine la condition
	
	}


		if (isset($_GET['search2'])) {
		$response = "<ul><li>No data found!</li></ul>";

		$connection = new mysqli('localhost', 'root', '', 'autocompletion');
		$q = $connection->real_escape_string($_GET['q']);

		$sql = $connection->query("SELECT type FROM film WHERE type LIKE '$q%' LIMIT 1");
		if ($sql->num_rows > 0) {
			$response = "<ul>";

			while ($data = $sql->fetch_array())
			
				$response .= "<a href=\"recherche.php?search2=" . $data['type'] . "\"><li>" . $data['type'] . "</li></a>";
			
			$response .= "</ul>";
			
			 ;
		}


		exit($response);  //termine la condition
	
	}



?>
