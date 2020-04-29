<?php
if (isset($_GET['id'])) {

		$connection = new mysqli('localhost', 'root', '', 'autocompletion');
		$q = $connection->real_escape_string($_GET['id']);
		$req= $connection->query("SELECT * FROM film WHERE id='$q%'")->fetch_assoc();	
}
?>
<html>
<head>
	<meta charset="utf-8">
	<title>Element</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script type="text/javascript" src="script.js"></script>
	<link rel="stylesheet" type="text/css" href="../CSS/autocompletion.css">
</head>
<body id="bodyE">
	<header id="headerelement">

	</header>
<main>

		<H1 class="H1element">Fiche du film : <?php echo $req['nom']?></H1>
		<section id="totalE">

			<p class="pE">La categorie est de type : <?php echo $req['type']?></p>
			<p class="pE">Le prix de ce film est de : <?php echo $req['prix']?>€</p>

		</section>

</main>
</body>
</html>