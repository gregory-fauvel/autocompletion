<?php
if (isset($_GET['id'])) {

		$connection = new mysqli('localhost', 'root', '', 'autocompletion');
		$q = $connection->real_escape_string($_GET['id']);
		$req= $connection->query("SELECT * FROM film WHERE id='$q%'")->fetch_assoc();
		echo($req['nom']);
		echo"</br>";
		echo($req['type']);
		echo"</br>";
		echo($req['prix']);

	

		
}
?>
<html>
<head>
	<meta charset="utf-8">
	<title>Element</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script type="text/javascript" src="script.js"></script>
</head>
<body>



</body>
</html>