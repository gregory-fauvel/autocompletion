
<html>
<head>
	<title>recherche</title>
	  <script src="http://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
        <script type="text/javascript" src="script.js">
  
        </script>
</head>
<body>

</body>
</html>

<?php

if (isset($_GET['search']))
{
	$connection = new mysqli('localhost', 'root', '', 'autocompletion');
		$q = $connection->real_escape_string($_GET['search']);


		$sql = $connection->query("SELECT * FROM film WHERE nom LIKE'$q%'");
		$i=0;
		while ($data = $sql->fetch_assoc()) {
			$kiki=$data['nom'];
			$kiki2=$data['id'];
			?>
			<p><a href='element.php?id=<?php echo $data['id']; ?>'><?php echo $data['nom']; ?></a></p>
			<?php
			
		
		$i++;	
		}
}
