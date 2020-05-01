
<html>
<head>
	<title>recherche</title>
	  <script src="http://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
        <script type="text/javascript" src="script.js">
  
        </script>
        <link rel="stylesheet" type="text/css" href="../CSS/autocompletion">
</head>
<body id="bodyrecherche">
	        <header>

            </form>

        <input name="search"type="text" placeholder="Search Query..." id="searchBox">
           
        <div id="response"></div>

        	<script type="text/javascript">
            <?php
           	include("../INCLUDES/script.js");
           
           		?>
        	</script>
        	<a id="home" href="../index.php">Accueil</a>

        </header>

</body>
</html>

<?php

if (isset($_GET['search']))
{
	$connection = new mysqli('localhost', 'root', '', 'autocompletion');
		$q = $connection->real_escape_string($_GET['search']);


		$sql = $connection->query("SELECT * FROM film WHERE nom LIKE'$q%'");
		$i=0;
		echo "<h1 id='H1RE'>Resultat de votre recherche</h1>";
		echo" <section id='lien'>";
		

		while ($data = $sql->fetch_assoc()) {
			$kiki=$data['nom'];
			$kiki2=$data['id'];
			?>
			<div id="separ"><p class="pRE"><a class="ARE" href='element.php?id=<?php echo $data['id']; ?>'><?php echo $data['nom']; ?></a></p></div>
			<?php
			
		
		$i++;	
		}
		echo"</section>";
}


if (isset($_GET['search2']))
{
	$connection = new mysqli('localhost', 'root', '', 'autocompletion');
		$q = $connection->real_escape_string($_GET['search2']);


		$sql = $connection->query("SELECT * FROM film WHERE type LIKE'$q%'");
		$i=0;
		echo "<h1 id='H1RE'>Resultat de votre recherche</h1>";
		echo" <section id='lien'>";
		

		while ($data = $sql->fetch_assoc()) {
			$kiki=$data['nom'];
			$kiki2=$data['id'];
			?>
			<div id="separ"><p class="pRE"><a class="ARE" href='element.php?id=<?php echo $data['id']; ?>'><?php echo $data['nom']; ?></a></p></div>
			<?php
			
		
		$i++;	
		}
		echo"</section>";
}

