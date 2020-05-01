<?php
      // include("INCLUDES/research.php");
?>
<html>
    <head>
        <title>FILM</title>
        <link rel="stylesheet" type="text/css" href="../CSS/autocompletion.css">
         <script src="http://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    </head>
    <body id="index">
        <header> 
        
        <input name="search"type="text" placeholder="Recherche films..." id="searchBox">
   
        <div id="response"></div>
        </header>



        <main id="moteur2">
            <div>
                
            </div>

         <h1 class="title">Le moteur de recherche du cinéma</h1>

             
        <input name="search"type="text" placeholder="Recherche par type" id="searchBox2">
   
        <div id="response2"></div>



        <script type="text/javascript">
            <?php
           include("../INCLUDES/script.js");

           
           ?>
        </script> 
        </main>
    </body>
</html>