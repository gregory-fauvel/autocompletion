<?php
	  include("INCLUDES/research.php");
?>
<html>
    <head>
        <title>FILM</title>
        <link rel="stylesheet" type="text/css" href="CSS/autocompletion.css">
         <script src="http://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    </head>
    <body id="index">
        <h1 id="title">Le moteur de recherche du cinema</h1>
    	<input name="search"type="text" placeholder="Rechercher film..." id="searchBox">
   
        <div id="response"></div>

        <script type="text/javascript">
            <?php
           include("INCLUDES/script.js");
           ?>
        </script> 
    </body>
</html>