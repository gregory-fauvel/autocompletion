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
?>
<html>
    <head>
        <title>FILM</title>
        <style type="text/css">
            ul {
                float: left;
                list-style: none;
                padding: 0px;
                border: 1px solid black;
                margin-top: 0px;
            }

            input, ul {
                width: 250px;
            }

            li:hover {
                color: silver;
                background: #0088cc;
            }
        </style>
    </head>
    <body>
    	     <input name="search"type="text" placeholder="Search Query..." id="searchBox">
        
    	

    	<?php
    		
    		

    		
    	?>

    	
    	
			
   
        <div id="response"></div>


         <script src="http://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                $("#searchBox").keyup(function () {

                    var query = $("#searchBox").val();



                    if (query.length > 0) {
                        $.ajax(
                            {
                                url: 'index.php',
                                method: 'GET',
                                data: {
                                    search: 1,
                                    q: query

                                },
                                success: function (data) {
                                    $("#response").html(data);
                                    
                                },
                                dataType: 'text'
                            }
                        );
                    }
                });

                $(document).on('click', 'li', function () {
                    var film = $(this).text();
                    $("#searchBox").val(film);
                    $("#response").html("");
                });
            });
        </script> 
    </body>
</html>