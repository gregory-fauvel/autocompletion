<?php
if (isset($_GET['search']))
{
	$connection = new mysqli('localhost', 'root', '', 'autocompletion');
		$q = $connection->real_escape_string($_GET['search']);

		$sql = $connection->query("SELECT * FROM film WHERE nom ='$q'")->fetch_assoc();

		echo $sql['nom'];



		var_dump($sql);
}